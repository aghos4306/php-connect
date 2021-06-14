<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">

    <title>Talking Space</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URI; ?>templates/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URI; ?>templates/css/custom.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Talking Space</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="register.html">Create An Account</a></li>
                    <li><a href="create.html">Create Topic</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-col">
                    <div class="block">
                        <h1 class="pull-left">Welcome to Talkin Space</h1>
                        <h4 class="pull-right">A simple php forum</h4>
                        <div class="clearfix"></div>
                        <hr>
                        <ul id="topics">
                            <li class="topic">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img class="avatar pull-left" src="img/gravatar.jpg" />
                                    </div>
                                    <div class="col-md-10">
                                        <div class="topic-content pull-right">
                                            <h3><a href="topic.html">Best Web Practice Framework</a></h3>
                                            <div class="topic-info">
                                                <a href="category.html">Development</a> >> <a href="profile.html">Austin Aghogho</a>
                                                <span class="badge pull-right">4</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="topic">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img class="avatar pull-left" src="img/gravatar.jpg" />
                                    </div>
                                    <div class="col-md-10">
                                        <div class="topic-content pull-right">
                                            <h3><a href="topic.html">Best Web Practice Framework</a></h3>
                                            <div class="topic-info">
                                                <a href="category.html">Development</a> >> <a href="profile.html">Austin Aghogho</a>
                                                <span class="badge pull-right">4</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <h3>Forum Statistics</h3>
                        <ul>
                            <li>Total Number of Users: <strong>54</strong></li>
                            <li>Total Number of Topics: <strong>12</strong></li>
                            <li>Total Number of Categories: <strong>4</strong></li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div id="sidebar">
                    <!-- block start -->
                    <div class="block">
                        <h3>Login Form</h3>
                        <form role="form">
                            <div class="form-group">
                                <label>Username</label>
                                <input name="username" type="text" class="form-control" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control" placeholder="Enter Password">
                            </div>
                            <button name="do_login" type="submit" class="btn btn-primary">Login</button>
                            <a class="btn btn-default" href="register.html">Create an Account</a>
                        </form>
                    </div>
                    <!-- category start -->
                    <div class="block">
                        <h3>Categories</h3>
                        <div class="list-group">
                            <a href="#" class="list-group-item active">All Topics
                                <span class="badge pull-right">14</span>
                            </a>
                            <a href="#" class="list-group-item">Design
                                <span class="badge pull-right">3</span>
                            </a>
                            <a href="#" class="list-group-item">Development
                                <span class="badge pull-right">3</span>
                            </a>
                            <a href="#" class="list-group-item">Search Engine
                                <span class="badge pull-right">3</span>
                            </a>
                            <a href="#" class="list-group-item">Business & Marketing
                                <span class="badge pull-right">3</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>