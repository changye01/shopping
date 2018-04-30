<?php 
require_once './include.php';
$rowsCate1=getAllCate();
// var_dump($rowsCate1);
if(!($rowsCate1&&is_array($rowsCate1))){
    alertMes("对不起，网站维护中","https://www.baidu.com");
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <script src="./plugins/jquery-3.3.1.js"></script>
    <script src="./plugins/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./plugins/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <style>
        .popover {
            width: auto;
            max-width: 870px;
            height: auto;
        }
    </style>
    <script>
        $(document).ready(function () {
            $(".pop").popover({
                    trigger: "manual",
                    html: true,
                    animation: false,
                    container: 'body',

                })
                .on("mouseenter", function () {
                    var _this = this;
                    $(this).popover("show");
                    $(".popover").on("mouseleave", function () {
                        $(_this).popover('hide');
                    });
                }).on("mouseleave", function () {
                    var _this = this;
                    setTimeout(function () {
                        if (!$(".popover:hover").length) {
                            $(_this).popover("hide");
                        }
                    }, 300);
                });
        })
    </script>
</head>

<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <nav class="navbar navbar-default" role="navigation">
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

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">hello world :
                                            <strong class="caret"></strong>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#modal-container-131096" data-toggle="modal">login</a>
                                            </li>
                                            <li>
                                                <a href="#modal-container-131097" data-toggle="modal">Rigister</a>
                                            </li>
                                            <li>
                                                <a href="#">Something</a>
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
                    </div>
                </div>
                <!-- 登陆窗体 start -->
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
                                        <img src="getVerify.php" alt="">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="autoFlag" value="1" />Auto login</label>
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
                <!-- 登陆窗体 end -->
                <!-- 注册窗体 start -->
                <div class="modal fade" id="modal-container-131097" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">
                                    注册页面
                                </h4>
                            </div>
                            <div class="modal-body">
                                <form role="form">
                                     <div class="form-group">
                                        <label for="username1">username</label><input type="username" class="form-control" id="username1" />
                                    </div>
                                    <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1" />
                                       </div>
                                    <div class="form-group">
                                        <label for="email1">Email address</label><input type="email" class="form-control" id="email1" />
                                    </div>
                                    <div class="form-group">
                                        <label>Sex</label>
                                            <label class="radio-inline">
                                                    <input type="radio" name="sex" id="sex1" value="1" checked>男
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="sex" id="sex2"  value="2">女
                                                </label>
                                                <label class="radio-inline">
                                                        <input type="radio" name="sex" id="sex3"  value="3">保密
                                                    </label>
                                        </div>
                                    
                                    <div class="form-group">
                                         <label for="exampleInputFile">File input</label><input type="file" id="exampleInputFile" />
                                        <p class="help-block">
                                            
                                        </p>
                                    </div>
                                    <div class="checkbox">
                                         <label><input type="checkbox" />同意本公司的什莫什莫条款</label>
                                    </div> <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                               
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                                <button type="button" class="btn btn-primary">保存</button> -->
                            </div>
                        </div>

                    </div>

                </div>
                <!-- 注册窗体 end -->
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="row clearfix">
                            <div class="col-md-3 column">
                                <div class="list-group">
                                    <dl class="list-group">
                                        <dt class="list-group-item active pop" title="" data-toggle="popover" data-placement="right" data-content="<dl>
                                                    <dd>
                                                        <a href='#' class='text-muted'>手机通讯 ></a>&nbsp;
                                                        <a href='#' class='text-muted'>老人机</a>&nbsp;
                                                        <a href='#' class='text-muted'>游戏手机</a>&nbsp;
                                                        <a href='#' class='text-muted'>游戏手机</a>&nbsp;
                                                        <a href='#' class='text-muted'>游戏手机</a>&nbsp;
                                                        <a href='#' class='text-muted'>游戏手机</a>&nbsp;
                                                        <a href='#' class='text-muted'>游戏手机</a>&nbsp;
                                                    </dd>
                                                </dl>
                                
                                                
                                                <br>
                                                <dl>
                                                    <dd>
                                                        <a href='#' class='text-muted'>手机配件 ></a>&nbsp;
                                                        <a href='#' class='text-muted'>贴膜</a>&nbsp;
                                                        <a href='#' class='text-muted'>手机壳</a>&nbsp;
                                                        <a href='#' class='text-muted'>耳机</a>&nbsp;
                                                        <a href='#' class='text-muted'>内存卡</a>&nbsp;
                                                        <a href='#' class='text-muted'>摄像头</a>&nbsp;
                                                        <a href='#' class='text-muted'>游戏手机</a>&nbsp;
                                                    </dd>
                                                </dl>
                                               
                                                <br>
                                                <dl>
                                                    <dd>
                                                        <a href='#' class='text-muted'>手机配件 ></a>&nbsp;
                                                        <a href='#' class='text-muted'>贴膜</a>&nbsp;
                                                        <a href='#' class='text-muted'>手机壳</a>&nbsp;
                                                        <a href='#' class='text-muted'>耳机</a>&nbsp;
                                                        <a href='#' class='text-muted'>内存卡</a>&nbsp;
                                                        <a href='#' class='text-muted'>摄像头</a>&nbsp;
                                                        <a href='#' class='text-muted'>游戏手机</a>&nbsp;
                                                    </dd>
                                                </dl>
                                               
                                                <br>
                                                <dl>
                                                    <dd>
                                                        <a href='#' class='text-muted'>手机配件 ></a>&nbsp;
                                                        <a href='#' class='text-muted'>贴膜</a>&nbsp;
                                                        <a href='#' class='text-muted'>手机壳</a>&nbsp;
                                                        <a href='#' class='text-muted'>耳机</a>&nbsp;
                                                        <a href='#' class='text-muted'>内存卡</a>&nbsp;
                                                        <a href='#' class='text-muted'>摄像头</a>&nbsp;
                                                        <a href='#' class='text-muted'>游戏手机</a>&nbsp;
                                                    </dd>
                                                </dl>
                                
                                               
                                                <br>
                                                
                                                
                                                
                                                
                                                ">
                                            <h4>
                                                <a href="#" style="color: white;"> 手机/通讯/数码</a>&nbsp; &nbsp;
                                            </h4>
                                        </dt>
                                        <dd class="list-group-item">
                                            <h5>
                                                <a href="#"> 华为 </a>&nbsp;
                                                <a href="#"> ipone </a>&nbsp;
                                                <a href="#"> 华为 </a>&nbsp;
                                                <a href="#"> ipone </a>&nbsp;
                                            </h5>
                                        </dd>
                                    </dl>

                                    <dt class="list-group-item active">
                                        <h4>
                                            <a href="#" style="color: white;"> 手机</a>&nbsp; &nbsp;
                                            <a href="#" style="color: white;"> 手机</a>
                                        </h4>
                                    </dt>
                                    <dd class="list-group-item">
                                        <h5>
                                            <a href="#"> 华为 </a>&nbsp;
                                            <a href="#"> ipone </a>&nbsp;
                                            <a href="#"> 华为 </a>&nbsp;
                                            <a href="#"> ipone </a>&nbsp;
                                        </h5>
                                    </dd>
                                    </dl>
                                    <dl>
                                        <dt class="list-group-item active">
                                            <h4>
                                                <a href="#" style="color: white;"> 手机</a>&nbsp; &nbsp;
                                                <a href="#" style="color: white;"> 手机</a>
                                            </h4>
                                        </dt>
                                        <dd class="list-group-item">
                                            <h5>
                                                <a href="#"> 华为 </a>&nbsp;
                                                <a href="#"> ipone </a>&nbsp;
                                                <a href="#"> 华为 </a>&nbsp;
                                                <a href="#"> ipone </a>&nbsp;
                                            </h5>
                                        </dd>
                                        <dt class="list-group-item active">
                                            <h4>
                                                <a href="#" style="color: white;"> 手机</a>&nbsp; &nbsp;
                                                <a href="#" style="color: white;"> 手机</a>
                                            </h4>
                                        </dt>
                                        <dd class="list-group-item">
                                            <h5>
                                                <a href="#"> 华为 </a>&nbsp;
                                                <a href="#"> ipone </a>&nbsp;
                                                <a href="#"> 华为 </a>&nbsp;
                                                <a href="#"> ipone </a>&nbsp;
                                            </h5>
                                        </dd>
                                    </dl>

                                </div>

                            </div>
                            <div class="col-md-9 column">
                                <div class="carousel slide" id="carousel-10031">
                                    <ol class="carousel-indicators">
                                        <li data-slide-to="0" data-target="#carousel-10031">
                                        </li>
                                        <li data-slide-to="1" data-target="#carousel-10031">
                                        </li>
                                        <li data-slide-to="2" data-target="#carousel-10031" class="active">
                                        </li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item">
                                            <img alt="" src="./1.jpg" />
                                            <div class="carousel-caption">
                                                <h4>
                                                    First Thumbnail label
                                                </h4>
                                                <p>
                                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id
                                                    dolor id nibh ultricies vehicula ut id elit.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img alt="" src="./2.jpg" />
                                            <div class="carousel-caption">
                                                <h4>
                                                    Second Thumbnail label
                                                </h4>
                                                <p>
                                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id
                                                    dolor id nibh ultricies vehicula ut id elit.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item active">
                                            <a href="#">
                                                <img alt="" src="./3.jpg" />

                                                <div class="carousel-caption">
                                                    <h4>
                                                        Third Thumbnail label
                                                    </h4>
                                                    <p>
                                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id
                                                        dolor id nibh ultricies vehicula ut id elit.
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-10031" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-10031" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <?php $i=800;foreach($rowsCate1 as $row):?>
                        <div class="shopTit comWidth">
                            <span class="icon"></span>
                            <h3>
                                <?php echo $row['cName'];?>
                            </h3>
                            <a href="#" class="more">更多&gt;&gt;</a>
                        </div>
                        <div class="shopList comWidth clearfix">
                            <div class="carousel slide" id="carousel-10033<?php echo $i;?>" style="width: 270pt;height: 200px;">
                                <ol class="carousel-indicators">
                                    <li data-slide-to="0" data-target="#carousel-10033<?php echo $i;?>">
                                    </li>
                                    <li data-slide-to="1" data-target="#carousel-10033<?php echo $i;?>">
                                    </li>
                                    <li data-slide-to="2" data-target="#carousel-10033<?php echo $i;?>" class="active">
                                    </li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img alt="" src="./1.jpg" />
                                        <div class="carousel-caption">
                                            <h4>
                                                First Thumbnail label
                                            </h4>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id
                                                dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img alt="" src="./2.jpg" />
                                        <div class="carousel-caption">
                                            <h4>
                                                Second Thumbnail label
                                            </h4>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id
                                                dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item active">
                                        <a href="#">
                                            <img alt="" src="./3.jpg" />

                                            <div class="carousel-caption">
                                                <h4>
                                                    Third Thumbnail label
                                                </h4>
                                                <p>
                                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id
                                                    dolor id nibh ultricies vehicula ut id elit.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-10033<?php echo $i;?>" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-10033<?php echo $i;?>" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="carousel slide" id="carousel-10033<?php echo $row['id'];?>" style="width: 270pt;height: 200px;">
                                <ol class="carousel-indicators">
                                    <li data-slide-to="0" data-target="#carousel-10033<?php echo $row['id'];?>">
                                    </li>
                                    <li data-slide-to="1" data-target="#carousel-10033<?php echo $row['id'];?>">
                                    </li>
                                    <li data-slide-to="2" data-target="#carousel-10033<?php echo $row['id'];?>" class="active">
                                    </li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img alt="" src="./1.jpg" />
                                        <div class="carousel-caption">
                                            <h4>
                                                First Thumbnail label
                                            </h4>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id
                                                dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img alt="" src="./2.jpg" />
                                        <div class="carousel-caption">
                                            <h4>
                                                Second Thumbnail label
                                            </h4>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id
                                                dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item active">
                                        <a href="#">
                                            <img alt="" src="./3.jpg" />

                                            <div class="carousel-caption">
                                                <h4>
                                                    Third Thumbnail label
                                                </h4>
                                                <p>
                                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id
                                                    dolor id nibh ultricies vehicula ut id elit.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-10033<?php echo $row['id'];?>" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-10033<?php echo $row['id'];?>" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="rightArea" style="margin-top: -300pt">
                                <div class="shopList_top clearfix">
                                    <?php 
                                        $pros=getProsByCid($row['id']);
                                        if($pros &&is_array($pros)):
                                        foreach($pros as $pro):
                                        $proImg=getProImgById($pro['id']);
                                    ?>
                                    <div class="shop_item">
                                        <div class="shop_img">
                                            <a href="proDetails.php?id=<?php echo $pro['id'];?>" target="_blank">
                                                <img height="200" width="187" src="image_220/<?php echo $proImg['albumPath'];?>" alt="">
                                            </a>
                                        </div>
                                        <h4>
                                            <?php echo $pro['pName'];?>
                                        </h4>
                                        <p>
                                            <?php echo $pro['iPrice'];?>元</p>
                                    </div>
                                    <?php 
                                        endforeach;
                                        endif;
                                        ?>

                                </div>
                                <div class="shopList_sm clearfix">
                                    <?php 
                                        $prosSmall=getSmallProsByCid($row['id']);
                                        if($prosSmall &&is_array($prosSmall)):
                                        foreach($prosSmall as $proSmall):
                                        $proSmallImg=getProImgById($proSmall['id']);
                                    ?>
                                    <div class="shopItem_sm">
                                        <div class="shopItem_smImg">
                                            <a href="proDetails.php?id=<?php echo $proSmall['id'];?>" target="_blank">
                                                <img width="95" height="95" src="image_220/<?php echo $proSmallImg['albumPath'];?>" alt="">
                                            </a>
                                        </div>
                                        <div class="shopItem_text">
                                            <p>
                                                <?php echo $proSmall['pName'];?>
                                            </p>
                                            <h3>￥
                                                <?php echo $proSmall['iPrice'];?> </h3>
                                        </div>
                                    </div>
                                    <?php 
                                        endforeach;
                                        endif;
                                        ?>
                                </div>
                            </div>
                        </div>

                        <?php $i++;endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>