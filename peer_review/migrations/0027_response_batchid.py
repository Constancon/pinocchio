# -*- coding: utf-8 -*-
# Generated by Django 1.9.7 on 2016-07-15 13:02
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('peer_review', '0026_merge'),
    ]

    operations = [
        migrations.AddField(
            model_name='response',
            name='batchid',
            field=models.IntegerField(default=-1),
            preserve_default=False,
        ),
    ]
