<?php 
require_once '../include.php';
checkLogined();
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <!-- <script src="../../plugins/jquery-3.3.1.js"></script>
    <script src="../../plugins/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../plugins/bootstrap.css"> -->
    <!-- <style type="css/text">
        .
    </style> -->
</head>

<body>

    <div class="row clearfix">
        <div class="col-md-12 column">

            <nav class="navbar navbar-default navbar-inverse " role="navigation">
                <!-- 让遮罩窗体只能在body父元素下正常显示 同时让导航栏居中 充满整个top -->
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

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#modal-container-131096" data-toggle="modal">触发遮罩窗体</a>

                                <div class="modal fade" id="modal-container-131096" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    标题
                                                </h4>
                                            </div>
                                            <div class="modal-body">
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
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                                <button type="button" class="btn btn-primary">保存</button> -->
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>

            </nav>
           
        </div>
    </div>

</body>

</html>