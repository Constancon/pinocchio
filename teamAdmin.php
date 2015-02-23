﻿<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pinocchio</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />

    <!-- JS/PHP includes -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="bootstrap-sortable.js"></script>
    <script src="search.js"></script>
    <script src="validation.js"></script>
    <script src="submit.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">Pinocchio</a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navHeaderCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="userAdmin.html">User Admin</a></li>
                    <li><a href="roundAdmin.html">Round Admin</a></li>
                    <li class="active"><a href="teamAdmin.html">Team Admin</a></li>
                    <li><a href="questionAdmin.html">Question Admin</a></li>
                    <li><a href="questionnaireAdmin.html">Questionnaire Admin</a></li>
                    <li><a href="fileManager.html">File Manager</a></li>
                    <li><a href="serverManager.html">Server Manager</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Create Team <b class="caret"></b>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post" action="#">
                            <div class="form-group">
                                <label for="userID" class="col-sm-2 control-label">User ID:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="userID" placeholder="User ID">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="roundID" class="col-sm-2 control-label">Round ID:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="roundID" placeholder="Round ID">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="teamNumber" class="col-sm-2 control-label">Team Number:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="teamNumber" placeholder="Team Number">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-info" id="submitTeam" onclick="teamSubmit()">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            Create Teams Via CSV File <b class="caret"></b>
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <form role="form" method="post" action="#">
                            <div class="form-group">
                                <label for="inputfile">Upload CSV File:</label>
                                <input type="file" id="inputfile">
                                <p class="help-block">Select a CSV file to create teams</p>
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Maintain Teams <b class="caret"></b>
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Please select the round number for the teams you wish to maintain</p>

                        <form role="form" method="post" action="#">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <select class="form-control"></select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    </div>
                </div>
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