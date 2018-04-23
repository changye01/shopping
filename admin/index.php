<?php
include_once '../include.php';
checkLogined();
// $sql = "select * from shopping_cate";

//     $totalRows = getResultNum($sql);
//     global $totalPage;
//     // echo $totalRows;
//     $pageSize = 3;
//     // ceil() 函数向上舍入为最接近的整数
//     $totalPage = ceil($totalRows / $pageSize);
//     global $page;
//     @$page = $_REQUEST['page'] ? (int) $_REQUEST['page'] : 1;
//     if ($page < 1 || $page == null || !is_numeric($page)) {
//         $page = 1;
//     }
//     if ($page > $totalPage) {
//         $page = $totalPage;
//     }
//     $offset = ($page - 1) * $pageSize;
//     $sql = "SELECT id,cName FROM shopping_cate LIMIT {$offset},{$pageSize}";
// // $rows = getAllAdmin();
//     $rows = fetchAll($sql);
//     $rows1 = &fetchAll($sql);
//     var_dump($rows1);
@$page = $_REQUEST['page'] ? (int) $_REQUEST['page'] : 1;
$rows = getAdminByPage($page, $pageSize = 3);

// var_dump($rowsPro);
// var_dump($rowsPro);

// var_dump($rows1);
// $sql="select * form shopping_admin where id='{$id}'";
// $rowEdit=fetchOne($sql);
// print_r($rowEdit);
if (!$rows) {
    alertMes("No administrator", "index.php?addManager");
    exit;
}
?>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles/backstage.css">
        <link rel="stylesheet" href="scripts/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
        <script src="scripts/jquery-ui/js/jquery-3.3.1.js"></script>
        <script src="scripts/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
        <script src="scripts/jquery-ui/js/jquery-ui-1.10.4.custom.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="../plugins/kindeditor/kindeditor.js"></script>
        <script type="text/javascript" charset="utf-8" src="../plugins/kindeditor/lang/zh_CN.js"></script>
        <!-- <script src="../plugins/jquery-3.3.1.js"></script> -->
        <script src="../plugins/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../plugins/bootstrap.css">
        <style type="css/text">
            /* .manage-left{ background-color: #505254; background-image: url('./2.jpg'); } #manage-left{ background-color: #505254;
            background-image: url('./2.jpg'); } #manage-left2{ background-color: #505254; } */ /* .text-dark{ color:gray;
            } */ /* td{ align:center; } */
        </style>
        <script>
            $(document).ready(function () {
                var url = window.location.href;
                index = url.indexOf("addManagers");
                index1 = url.indexOf("editManagers");
                index2 = url.indexOf("listManagers");
                index3 = url.indexOf("addCate1");
                index4 = url.indexOf("listCates");
                index5 = url.indexOf("editCates");
                index6 = url.indexOf("addPros");
                index7 = url.indexOf("listPros");
                index8 = url.indexOf("editPros");
                if (index != -1) {
                    $.ajax({

                        success: function () {
                            $("#main").hide();
                            $("#listManagers").hide();
                            $("#editManagers").hide();
                            $('#addManagers').show();
                            $("$addCate1").hide();
                            $("#listCates").hide();
                            $("#editCates").hide();
                            $("#addPros").hide();
                            $("#listPros").hide();
                            $("#editPros").hide();
                        }
                    });
                }
                if (index1 != -1) {
                    $.ajax({
                        success: function () {
                            $("#editManagers").show();
                            $("#listManagers").hide();
                            $("#addManagers").hide();
                            $("#main").hide();
                            $("$addCate1").hide();
                            $("#listCates").hide();
                            $("#editCates").hide();
                            $("#addPros").hide();
                            $("#listPros").hide();
                            $("#editPros").hide();
                        }
                    });
                }
                if (index2 != -1) {
                    $.ajax({
                        success: function () {
                            $("#editManagers").hide();
                            $("#addManagers").hide();
                            $("#listManagers").show();
                            $("#main").hide();
                            $("#addCate1").hide();
                            $("#listCates").hide();
                            $("#editCates").hide();
                            $("#addPros").hide();
                            $("#listPros").hide();
                            $("#editPros").hide();
                        }
                    });
                }
                if (index3 != -1) {
                    $.ajax({
                        success: function () {
                            $("#editManagers").hide();
                            $("#addManagers").hide();
                            $("#listManagers").hide();
                            $("#main").hide();
                            $("#listCates").hide();
                            $("#editCates").hide();
                            $("#addPros").hide();
                            $("#addCate1").show();
                            $("#listPros").hide();
                            $("#editPros").hide();
                        }
                    });
                }
                if (index4 != -1) {
                    $.ajax({
                        success: function () {
                            $("#editManagers").hide();
                            $("#addManagers").hide();
                            $("#listManagers").hide();
                            $("#main").hide();
                            $("#addCate1").hide();
                            $("#listCates").show();
                            $("#editCates").hide();
                            $("#addPros").hide();
                            $("#listPros").hide();
                            $("#editPros").hide();
                        }
                    });
                }
                if (index5 != -1) {
                    $.ajax({
                        success: function () {
                            $("#editManagers").hide();
                            $("#addManagers").hide();
                            $("#listManagers").hide();
                            $("#main").hide();
                            $("#addCate1").hide();
                            $("#listCates").hide();
                            $("#editCates").show();
                            $("#addPros").hide();
                            $("#listPros").hide();
                            $("#editPros").hide();
                        }
                    });
                }
                if (index6 != -1) {
                    $.ajax({
                        success: function () {
                            $("#editManagers").hide();
                            $("#addManagers").hide();
                            $("#listManagers").hide();
                            $("#main").hide();
                            $("#addCate1").hide();
                            $("#listCates").hide();
                            $("#editCates").hide();
                            $("#addPros").show();
                            $("#listPros").hide();
                            $("#editPros").hide();
                        }
                    });
                }
                if (index7 != -1) {
                    $.ajax({
                        success: function () {
                            $("#editManagers").hide();
                            $("#addManagers").hide();
                            $("#listManagers").hide();
                            $("#main").hide();
                            $("#addCate1").hide();
                            $("#listCates").hide();
                            $("#editCates").hide();
                            $("#addPros").hide();
                            $("#listPros").show();
                            $("#editPros").hide();
                        }
                    });
                }
                if (index8 != -1) {
                    $.ajax({
                        success: function () {
                            $("#editManagers").hide();
                            $("#addManagers").hide();
                            $("#listManagers").hide();
                            $("#main").hide();
                            $("#addCate1").hide();
                            $("#listCates").hide();
                            $("#editCates").hide();
                            $("#addPros").hide();
                            $("#listPros").hide();
                            $("#editPros").show();

                        }
                    });
                }
                $("#editPros").hide();
                $("#listPros").hide();
                $("#main").show();
                $("#addPros").hide();
                $("#editManagers").hide();
                $("#addManagers").hide();
                $("#listManagers").hide();
                $("#addCate1").hide();
                $("#listCates").hide();
                $("#editCates").hide();

                $("#addManager").click(function () {
                    $("#main").hide();
                    $("#listManagers").hide();
                    $("#editManagers").hide();
                    $('#addManagers').show();
                    $("#addCate1").hide();
                    $("#listCates").hide();
                    $("#editCates").hide();
                    $("#listPros").hide();
                    $("#addPros").hide();
                    $("#editPros").hide();
                });
                $("#listManager").click(function () {
                    $("#main").hide();
                    $("#addManagers").hide();
                    $("#editManagers").hide();
                    $("#listManagers").show();
                    $("#addCate1").hide();
                    $("#listCates").hide();
                    $("#editCates").hide();
                    $("#addPros").hide();
                    $("#listPros").hide();
                    $("#editPros").hide();
                });
                //
                $("#addCate").click(function () {
                    $("#editManagers").hide();
                    $("#listManagers").hide();
                    $("#addManagers").hide();
                    $("#main").hide();
                    $("#addCate1").show();
                    $("#listCates").hide();
                    $("#editCates").hide();
                    $("#addPros").hide();
                    $("#listPros").hide();
                    $("#editPros").hide();
                });
                $("#listCate").click(function () {
                    $("#editManagers").hide();
                    $("#listManagers").hide();
                    $("#addManagers").hide();
                    $("#main").hide();
                    $("#addCate1").hide();
                    $("#listCates").show();
                    $("#addPros").hide();
                    $("#editCates").hide();
                    $("#listPros").hide();
                    $("#editPros").hide();
                });

                $("#addPro").click(function () {
                    $("#editManagers").hide();
                    $("#listManagers").hide();
                    $("#addManagers").hide();
                    $("#main").hide();
                    $("#addCate1").hide();
                    $("#listCates").hide();
                    $("#editCates").hide();
                    $("#addPros").show();
                    $("#listPros").hide();
                    $("#editPros").hide();
                });
                $("#listPro").click(function () {
                    $("#editManagers").hide();
                    $("#listManagers").hide();
                    $("#addManagers").hide();
                    $("#main").hide();
                    $("#addCate1").hide();
                    $("#listCates").hide();
                    $("#editCates").hide();
                    $("#addPros").hide();
                    $("#listPros").show();
                    $("#editPros").hide();
                });
            });
        </script>
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
                            <a class="navbar-brand" href="index.php">Brand</a>
                        </div>
                        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <!-- <li>
                            <a href="#">Link</a>
                        </li> -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        welcome:
                                        <?php
if (isset($_SESSION['adminName'])) {
    echo $_SESSION['adminName'];
} elseif (isset($_COOKIE['adminName'])) {
    echo $_COOKIE['adminName'];
}
?>
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
                                            <a href="doAdminAction.php?act=logout">quit</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                </nav>
                <img src="./4.jpg" id="img-top" class="img-responsive">
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-2 column manage-left" id="manage-left">
                    <div class="panel-group" id="panel-311891">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="panel-title" data-toggle="collapse" data-parent="#panel-311891" href="#panel-element-1">商品管理</a>
                            </div>
                            <div id="panel-element-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <a href="#addPros" id="addPro" style="color: #505254;">添加商品</a>
                                </div>
                                <div class="panel-body">
                                    <a href="#listPros" id="listPro" style="color: #505254;">商品列表</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" id="manage-left2">
                            <div class="panel-heading">
                                <a class="panel-title" data-toggle="collapse" data-parent="#panel-311891" href="#panel-element-2">分类管理</a>
                            </div>
                            <div id="panel-element-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <a href="#addCate1" style="color: #505254;" id="addCate">添加分类</a>
                                </div>
                                <div class="panel-body">
                                    <a href="#listCates" style="color: #505254; " id="listCate">分类列表</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="panel-title" data-toggle="collapse" data-parent="#panel-311891" href="#panel-element-3">商品图片管理</a>
                            </div>
                            <div id="panel-element-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <a href="thinglist" style="color: #505254;">商品图片列表</a>
                                </div>
                                <div class="panel-body">
                                    <a href="thinglist" style="color: #505254;">分类列表</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="panel-title" data-toggle="collapse" data-parent="#panel-311891" href="#panel-element-4">订单管理</a>
                            </div>
                            <div id="panel-element-4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <a href="thinglist" style="color: #505254;">订单修改</a>
                                </div>
                                <div class="panel-body">
                                    <a href="thinglist" style="color: #505254;">订单修改</a>
                                </div>
                                <div class="panel-body">
                                    <a href="thinglist" style="color: #505254;">订单总是修改</a>
                                </div>
                                <div class="panel-body">
                                    <a href="#" style="color: #505254;">深灰色链接。</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="panel-title" data-toggle="collapse" data-parent="#panel-311891" href="#panel-element-5">用户管理</a>
                            </div>
                            <div id="panel-element-5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <a href="thinglist" style="color: #505254;">添加用户</a>
                                </div>
                                <div class="panel-body">
                                    <a href="thinglist" style="color: #505254;">用户列表</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="panel-title" data-toggle="collapse" data-parent="#panel-311891" href="#panel-element-6">管理员管理</a>
                            </div>
                            <div id="panel-element-6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <a href="#addManagers" id="addManager" style="color: #505254;">添加管理员</a>
                                </div>
                                <div class="panel-body">
                                    <a href="#listManagers" id="listManager" style="color: #505254;">管理员列表</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 column">
                    <div id="main">
                        <?php include_once './main.php';?>
                    </div>
                    <br>
                    <br>
                    <br>

                    <div id="addManagers">
                        <!-- <iframe src="./view/editManager.html"  name="mainFrame" class="col-md-12 column frame" scrolling="No" frameborder="0" height=""></iframe> -->
                        <?php include_once './addManager.php'?>
                    </div>
                    <div id="editManagers">
                        <?php include_once './editManager.php'?>
                    </div>
                    <div id="listManagers">
                        <?php include_once './listManager.php'?>
                    </div>
                    <div id="addCate1">
                        <?php include_once './addCate.php'?>
                    </div>
                    <div id="listCates">
                        <?php include_once './listCate.php'?>
                    </div>
                    <div id="editCates">
                        <?php include_once './editCate.php'?>
                    </div>
                    <div id="addPros">
                        <?php include_once './addPro.php'?>
                    </div>
                    <div id="listPros">
                        <?php include_once './listPro.php'?>
                    </div>
                    <div id="editPros">
                        <?php include_once './editPro.php'?>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>