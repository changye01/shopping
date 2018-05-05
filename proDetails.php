<?php
require_once './include.php';
$id=$_REQUEST['id'];
$proInfo=getProById($id);
// var_dump($proInfo);
$proImgs=getProImgsById($id);
if(!($proImgs&&is_array($proImgs))){
    alertMes("商品图片错误","index.php");
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
        <link type="text/css" rel="stylesheet" media="all" href="styles/jquery.jqzoom.css" />
        <script src="scripts/jquery.jqzoom-core.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.jqzoom').jqzoom({
                    zoomType: 'standard',
                    lens: true,
                    preloadImages: false,
                    alwaysOn: false,
                    title: false,
                    zoomWidth: 410,
                    zoomHeight: 410
                });

            });
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
                                    <a class="navbar-brand" href="index.php">Brand</a>
                                </div>

                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">

                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">hello:
                                                <?php
                                        if (isset($_SESSION['username'])) {
                                            echo $_SESSION['username'];
                                        }
                                        // } elseif (isset($_COOKIE['username'])) {
                                        //     echo $_COOKIE['username'];
                                        // }
                                        ?>
                                                    <strong class="caret"></strong>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#modal-container-131096" data-toggle="modal" style="display: <?php if(isset($_SESSION['username'])){
                                                    echo " none ";
                                                 }else {
                                                     echo "unset ";
                                                 }   ?>" class="col-sm-2">login</a>
                                                </li>
                                                <li>
                                                    <a href="#modal-container-131097" data-toggle="modal" style="display: <?php if(isset($_SESSION['username'])){
                                                    echo " none ";
                                                 }else {
                                                     echo "unset ";
                                                 }   ?>" class="col-sm-1">Rigister</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="col-sm-1">Something</a>
                                                </li>
                                                <li class="divider">
                                                </li>
                                                <li>
                                                    <a href="./admin/doAdminAction?act=userOut" class="col-sm-1">quit</a>
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
                                    <form class="form-horizontal" role="form" action="./admin/doAdminAction.php?act=login" method="POST">
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
                                    <form role="form" action="./admin/doAdminAction.php?act=reg" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="username1">username</label>
                                            <input type="username" name="username" class="form-control" id="username1" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" name="password" id="exampleInputPassword1" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email1">Email address</label>
                                            <input type="email" class="form-control" id="email1" />
                                        </div>
                                        <div class="form-group">
                                            <label>Sex</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="sex" id="sex1" value="1" checked>男
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="sex" id="sex2" value="2">女
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="sex" id="sex3" value="3">保密
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="myFile">头像</label>
                                            <input type="file" id="myFile" name="face" />
                                            <p class="help-block">

                                            </p>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />同意本公司的什莫什莫条款</label>
                                        </div>
                                        <button type="submit" class="btn  btn-default">Submit</button>
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
                        <div class="userPosition comWidth col-md-4">
                            <strong>
                                <a href="#">首页</a>
                            </strong>
                            <span>&nbsp;&gt;&nbsp;</span>
                            <a href="#">
                                <?php echo $proInfo['cName'];?>
                            </a>
                            <span>&nbsp;&gt;&nbsp;</span>
                            <em>
                                <?php echo $proInfo['pSn'];?>
                            </em>
                        </div>
                        <div class="description_info comWidth col-md-8">
                            <div class="description clearfix">
                                <div class="leftArea" style="width: 400px">
                                    <div class="description_imgs">
                                        <div class="big">
                                            <a href="image_800/<?php echo  $proImgs[0]['albumPath'];?>" class="jqzoom" rel='gal1' title="triumph">
                                                <img width="440" height="430" src="image_350/<?php  echo $proImgs[0]['albumPath'];?>" title="triumph">
                                            </a>
                                        </div>
                                        <ul class="des_smimg clearfix" id="thumblist">
                                            <?php foreach($proImgs as $key=>$proImg):?>
                                            <li>
                                                <a class="<?php echo $key==0?" zoomThumbActive ":" ";?> active" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: 'image_350/<?php echo $proImg['albumPath'];?>',largeimage: 'image_800/<?php echo $proImg['albumPath'];?>'}">
                                                    <img width="70" height="70" src="image_220/<?php echo $proImg['albumPath'];?>" alt="">
                                                </a>
                                            </li>
                                            <?php endforeach;?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rightArea">
                                    <div class="des_content">
                                        <h3 class="des_content_tit">
                                            <?php echo $proInfo['pName'];?>
                                        </h3>
                                        <div class="dl clearfix">
                                            <div class="dt">木木价</div>
                                            <div class="dd clearfix">
                                                <span class="des_money">
                                                    <!-- <em> 标签告诉浏览器把其中的文本表示为强调的内容。对于所有浏览器来说，这意味着要把这段文字用斜体来显示。 -->
                                                    <em>￥</em>
                                                    <?php echo $proInfo['iPrice'];?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="dl clearfix">
                                            <!-- <div class="dt">优惠</div> -->
                                            <div class="dd clearfix">
                                                <span class="hg">
                                                    <!-- <i class="hg_icon">满换购</i> -->
                                                    <em>购ipad加价优惠够配件或USB充电插座</em>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- 提交表单start  -->
                                        <form class="form-horizontal" role="form" action="./admin/doAdminAction.php?act=addOrder&id=<?php echo $proInfo['id']?>"
                                            method="POST">
                                            <div class="form-group col-sm-offset-5">
                                                <label for="location" class="col-sm-2 control-label">送到：</label>
                                                <div class="col-sm-2">
                                                    <select class="form-control col-sm-2 " id="location" name="location">
                                                        <option value="aaa">aaa</option>
                                                        <option value="bbb">bbb</option>
                                                        <option value="ccc">ccc</option>
                                                        <option value="ddd">ddd</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="color" class="col-sm-2 control-label">color：</label>
                                                <div class="col-sm-10">
                                                    <label class="radio-inline">
                                                        <input type="radio" id="white" value="white" name="color">white
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" id="black" value="black" name="color">black
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" id="blue" value="blue" name="color">blue
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="num" class="col-sm-2 control-label">数量：</label>
                                                <div class="col-sm-2">
                                                    <input type="text" value="1" name="num" class="col-sm-8">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- <label for="num" class="col-sm-2 control-label" >数量：</label> -->
                                                <div class="col-sm-2">
                                                    <input type="hidden" value="<?php echo $proInfo['iPrice'];?>" name="price" class="col-sm-8 ">
                                                    <input type="hidden" value="<?php @$userId=$_SESSION['loginFlag'];
                                                    echo $userId;?>" name="uid" class="col-sm-8 ">
                                                    <!-- <input type="hidden" value=">" name="totalPrice"> -->
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-default">提交订单</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- 提交表单 end -->
                                        <div class="notes">
                                            注意：此商品可提供普通发票，不提供增值税发票。
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>