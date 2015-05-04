﻿<!DOCTYPE html>
<html lang = "en">
	<head>
        <title>Pinocchio</title>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="style.css" />
	</head>
	<body>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">Pinocchio</a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="userAdmin.php">User Admin</a></li>
                        <li><a href="roundAdmin.html">Round Admin</a></li>
                        <li><a href="teamAdmin.html">Team Admin</a></li>
                        <li><a href="questionAdmin.html">Question Admin</a></li>
                        <li><a href="questionnaireAdmin.html">Questionnaire Admin</a></li>
                        <li><a href="fileManager.html">File Manager</a></li>
                        <li><a href="serverManager.html">Server Manager</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="jumbotron text-center">
                <h1>Welcome to Pinocchio!</h1>
                <p>This is the administrative home page</p>
                <a href="#" class="btn btn-info" id="wizard">Start Wizard</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="mid">What is Pinocchio?</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse commodo nisi eu nisl dictum, vitae faucibus turpis vestibulum. Nunc a condimentum nisi. Vestibulum finibus lectus et gravida molestie. Praesent tellus sapien, posuere vitae vulputate eget, pulvinar in libero. Maecenas euismod orci a eros semper iaculis. Pellentesque mattis erat sit amet lorem malesuada, eget pharetra purus auctor. Praesent lectus lorem, rhoncus ut lorem eu, congue volutpat nunc. Cras ornare luctus tortor sit amet lacinia.
                    </p>
                    <h3><a href="http://www.up.ac.za" class="btn btn-info">University of Pretoria</a></h3>
                </div>

                <div class="col-md-6">
                    <h3 class="mid">Who Designed Pinocchio?</h3>
                    <p>
                        Fusce ac ligula id magna luctus blandit vitae non lorem. Ut ultricies faucibus posuere. Ut lacinia blandit venenatis. Vestibulum blandit ullamcorper odio, a cursus nisi lobortis sit amet. Cras libero felis, condimentum ac justo quis, scelerisque tristique nisl. Maecenas id fringilla magna, in laoreet ligula. Maecenas eget ultricies erat. Sed sit amet nunc gravida, posuere eros ac, bibendum nisi. Sed blandit vehicula augue ut cursus. Cras vel blandit felis. Sed eu mauris ante. Curabitur nec efficitur turpis, a luctus lorem. Fusce nec mollis ligula, id pulvinar ipsum. Proin facilisis ligula sit amet lacinia ornare.
                    </p>
                    <h3><a href="#" class="btn btn-info">Dev Team</a></h3>
                </div>
            </div>
        </div>

        <div class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                <p class="navbar-text pull-left">&copy; Dillon Heins</p>
                <a class="navbar-btn btn-danger btn pull-right">Log Out</a>
            </div>
        </div>

        <script src="jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
	</body>
</html>