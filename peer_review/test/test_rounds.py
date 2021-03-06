from django.core.urlresolvers import reverse
from django.test import TestCase, Client
from peer_review.models import User
from peer_review.models import RoundDetail
from peer_review.models import Questionnaire
from datetime import datetime, timezone, timedelta
class RoundTests(TestCase):
    def test_test(self):
        """
        2 + 2 should equal 4
        """
        ans = 2 + 2
        self.assertEqual(ans, 4)

    def setUp(self):
        self.client = Client()
        self.questionnaire = Questionnaire.objects.create(intro='Hello, this is a question',label='This is the descriptionish')
        startdate = datetime.now(timezone(timedelta(hours=2)))
        enddate = datetime.now(timezone(timedelta(hours=2)))
        self.round = RoundDetail.objects.create(name='test round',questionnaire=self.questionnaire,startingDate=startdate,endingDate=enddate, description='Hey there, we have a round')
        self.user = User.objects.create_user('bob@bob.com', 'bob')


    def test_round_create(self):
        self.client.login(username='bob@bob.com', password='bob')

        url = reverse('createRound')
        response = self.client.get(url)
        self.assertIn(response.status_code,[302])

    def test_round_delete(self):
        self.client.login(username='bob@bob.com', password='bob')
        url = reverse('deleteRound',kwargs={'round_pk':'1'})
        response = self.client.get(url)
        self.assertEquals(response.status_code,302)
        goneround = RoundDetail.objects.filter(id=1)
        self.assertEquals(len(goneround),0)

    def test_round_update(self):
        self.client.login(username='bob@bob.com', password='bob')
        post_starting_date = '2016-06-27 11:12+02:00'
        post_description = 'New description, better than the old'
        post_questionnaire = 1
        post_name = 'A better round name'
        post_ending_date = '2016-06-29 11:12+02:00'
        response = self.client.post('/maintainRound/update/1', {'startingDate':post_starting_date,'description':post_description,'questionnaire':post_questionnaire,'roundName':post_name,'endingDate':post_ending_date})
        round_test = RoundDetail.objects.get(pk=1)
        self.assertEqual(response.status_code, 302)
        self.assertEqual(round_test.description,'New description, better than the old')