<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    
    <script src="../plugins/jquery-3.3.1.js"></script>
    <script src="../plugins/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../plugins/bootstrap.css">
   
</head>

<body>
    <!-- <div class="container"> -->
        <div class="row clearfix">
            <div class="col-md-12 column">
                <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Brand</a>
                        </div>

                        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-right">
                                <!-- <li>
                                                    <a href="#">Link</a>
                                                </li> -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <label>welcome:</label>
                                        <strong class="caret"></strong>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- <li>
                                                            <label>welcome:</label>
                                                        </li> -->
                                        <li>
                                            <a href="#">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#">search</a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li>
                                            <a href="#">quit</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                </nav>
                <img src="./4.jpg" id="img-top" class="img-responsive">
                <br><br><br><br><br><br>
                <div class="row clearfix">
                    <div class="col-md-4 column">
                    </div>
                    <div class="col-md-4 column">
                            <form class="form-horizontal" role="form" action="./doLogin.php" method="POST">
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="username" name="username" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name="password" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="verifyPassword" class="col-sm-2 control-label">验证码</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="verifyPassword" name="verifyPassword" />
                                        
                                    </div>
                                    <img src="getVerify.php"  alt="">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="autoFlag" value="1"/>Auto login</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Sign in</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                    <div class="col-md-4 column">
                    </div>
                </div>
                </div>
            </div>
        </div>
</body>

</html>