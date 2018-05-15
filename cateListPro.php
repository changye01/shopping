<?php 
require_once './include.php';
@$rowsCate1=getAllCate();
// var_dump($rowsCate1);
if(!($rowsCate1&&is_array($rowsCate1))){
    alertMes("对不起，网站维护中","https://www.baidu.com");
}
// var_dump($rowsCate1);
@$id1=$_REQUEST['id'];
// var_dump($id);
@$rowCate=getCateById($id1);
// var_dump($rowCate);
@$proInfo=getProsByCid($id1);
@$id=$_SESSION['loginFlag'];
// var_dump($id);
$sql="SELECT * from shopping where id={$id}";
@$userInfo=fetchOne($sql);
$sql1="SELECT * from shopping_order where uid={$id}";
// var_dump($userInfo);
// var_dump($_SESSION['loginFlag'])
@$orderInfo=fetchAll($sql1);
// var_dump($proInfo);
@$sessionId=$_SESSION['loginFlag'];
$sqlCart="SELECT * FROM shopping_cart where uid={$sessionId}";
//购物车信息
@$cartInfo=fetchAll($sqlCart);

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <script src="./plugins/jquery-3.3.1.js"></script>
    <script src="./plugins/bootstrap.min.js"></script>
    <script src="./plugins/waterfall/waterfall.js"></script>
    <script src="./plugins/jquery.validate.js"></script>
    <script src="./scripts/myValidate.js"></script>
    <link rel="stylesheet" href="./plugins/bootstrap.css">
    <script>
        function cancelOrder(id) {
            if (window.confirm("确定申请取消订单吗? ")) {
                window.location = "./admin/doAdminAction.php?act=cancelOrder&id=" + id;
            }
        }
        function cancelCart(id){
            // console.log(id);
            $.ajax({
                type:"post",
                url:'./admin/doAdminAction.php?act=cancelCart&id='+id,
                // data:$('#order').serialize(),
                async:true,
                success:function(data,textStatus,jqXHR){
                    var data1=$.trim(data);
                    alert(data1);
                    var url=window.location.href;
                    // $("#modal-container-131010").modal('show');
                    window.location.reload();
                    console.log(data);
                    
                },
                error:function(mes){
                    console.log(mes);
                }
            });
        }
        $(window).ready(function(){
            $("#Cart").click(function(){
                    // var id=1;
                var id=$('#Cart').attr('postid');
                // console.log(id); 
                $.ajax({
                    type:"post",
                    url:'./admin/doAdminAction.php?act=addCart&id='+id,
                    data:$('#order').serialize(),
                    //异步刷新，默认false同步刷新
                    async:true,
                    success:function(data,textStatus,jqXHR){
                        var data1=$.trim(data);
                        // opener.location.reload();
                        window.location.reload();
                        alert(data1);
                    },
                    error:function(mes){
                        console.log(mes);
                    }
                })
            });
        })
    </script>
    <style>
        /* 显示物品瀑布流 */
        * {
            padding: 0;
            margin: 0;
        }

        #main {
            position: relative;
        }

        .pin {
            padding: 15px 0 0 15px;
            float: left;
        }

        .box {
            padding: 10px 10px 10px 10px;
            border: 1px solid #ccc;
            box-shadow: 0 0 6px #ccc;
            border-radius: 5px;
        }

        .box img {
            width: 158px;
            height: auto;
        }

        /* .box label{
            display: block;
            padding-left: 50px;
        } */

        .price {
            display: block;
            padding-left: 50px;
        }

        .pname {
            display: block;
            font-family: 'Times New Roman';
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row clearfix">
            <!-- 导航栏start -->
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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu">hello:
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
                                        <a href="#modal-container-131096" data-toggle="modal" style="display: <?php if (isset($_SESSION['username'])) {
                                        echo "none";
                                    } else {
                                        echo "unset ";
                                    }?>">login</a>
                                    </li>
                                    <li>
                                        <a href="#modal-container-131097" data-toggle="modal" style="display: <?php if (isset($_SESSION['username'])) {
                                            echo "none";
                                        } else {
                                            echo "unset ";
                                        }?>">Rigister</a>
                                    </li>
                                    <li>
                                        <a href="#modal-container-131098" data-toggle="modal" style="display: <?php if (isset($_SESSION['username'])) {
                                            echo "unset";
                                        } else {
                                            echo "none ";
                                        }?>">修改用户信息</a>
                                    </li>
                                    <li>
                                        <a href="#modal-container-131099" data-toggle="modal" style="display: <?php if (isset($_SESSION['username'])) {
                                            echo "unset";
                                        } else {
                                            echo "none";
                                        }?>">我的订单</a>
                                    </li>
                                    <li>
                                        <a href="#modal-container-131010" data-toggle="modal" style="display: <?php if (isset($_SESSION['username'])) {
                                            echo "unset";
                                        } else {
                                            echo "none ";
                                        }?>">我的购物车</a>
                                    </li>
                                    <li>
                                        <a href="./admin/doAdminAction?act=userOut" style="display: <?php if (isset($_SESSION['username'])) {
                                            echo "unset";
                                        } else {
                                            echo "none";
                                        }?>"> quit</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>
            <!-- 导航栏end -->
            </div>
            <!-- 登陆窗体 start -->
            <div class="modal fade" id="modal-container-131096" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">
                                登录
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
                            <form role="form" action="./admin/doAdminAction.php?act=reg" method="POST" enctype="multipart/form-data" class="" id="register">
                                <div class="form-group">
                                    <label for="username1">username</label>
                                    <input type="text" name="username" class="form-control" id="username1" />
                                </div>
                                <div class="">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">confirmPassword</label>
                                    <input type="password" class="form-control" name="confirmPassword" id="exampleInputPassword2" />
                                </div>
                                <div class="form-group">
                                    <label for="email1">Email address</label>
                                    <input type="email" class="form-control" id="email1" name="email" />
                                </div>
                                <div class="form-group">
                                    <label for="location">location</label>
                                    <input type="text" name="location" class="form-control" id="location" placeholder="该地址是您的送货地址，请输入详细地址" />
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
            <!-- 修改用户信息start -->
            <div class="modal fade" id="modal-container-131098" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">
                                修改信息页面
                            </h4>
                        </div>
                        <div class="modal-body">
                            <form role="form" action="./admin/doAdminAction.php?act=updateUser&id=<?php echo ($_SESSION['loginFlag']) ?>" method="POST"
                                enctype="multipart/form-data" id="updateUser">

                                <div class="form-group">
                                    <label for="username1">username</label>
                                    <input type="text" name="username" class="form-control" id="username2" value="<?php echo $userInfo['username'] ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword3">Password</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputPassword3" value="<?php echo $userInfo['password'] ?>"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="location2">location</label>
                                    <input type="text" name="location" class="form-control" id="location2" value="<?php echo $userInfo['location'] ?>" placeholder="该地址是您的送货地址，请输入详细地址"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="email2">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email2" value="<?php echo $userInfo['email'] ?>" />
                                </div>

                                <div class="form-group">
                                    <label>Sex</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" value="1" checked>男
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" value="2">女
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" value="3">保密
                                    </label>
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
            <!-- 修改用户信息end -->
            <!-- 用户个人订单start -->
            <div class="modal fade" id="modal-container-131099" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">
                                我的订单
                            </h4>
                        </div>
                        <div class="modal-body">
                            <table class="table  table-striped table-bordered table-condensed col-lg-7" style="text-align: center">
                                <tr>

                                    <td class="col-sm-2">
                                        商品名
                                    </td>
                                    <td class="col-sm-1">
                                        商品颜色
                                    </td>
                                    <td>
                                        数量
                                    </td>
                                    <td class="col-sm-2">
                                        送货地址
                                    </td>

                                    <td>
                                        总价
                                    </td>
                                    <td>
                                        是否完成
                                    </td>
                                    <td class="col-sm-3">
                                        action
                                    </td>
                                </tr>
                                <tbody>
                                    <?php $i = 1;foreach (@$orderInfo as $row): ?>

                                    <!-- <form action="editManager.php" method="POST"> -->
                                    <tr>

                                        <td>
                                            <?php
                                            $proName = getProByOrderPid($row['pid']);
                                            foreach ($proName as $val) {
                                                echo $val;
                                            }
                                            ?>
                                        </td>

                                        <td>
                                            <?php echo $row['color'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['num']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['location'] ?>
                                        </td>

                                        <td>
                                            <?php $totalPrice = $row['price'] * $row['num'];
                                            echo $totalPrice;
                                            ?>
                                        </td>
                                        <td>
                                            <?php if ($row["flag"] == 1 && $row['applyCancel'] == 0) {
                                                echo "已完成";
                                            } elseif ($row["flag"] == 0 && $row['applyCancel'] == 1) {
                                                echo "取消中";
                                            } elseif ($row["flag"] == 0 && $row['applyCancel'] == 0) {
                                                echo "配送中";
                                            }?>
                                        </td>
                                        <td>

                                            <input type="button" class="btn-link  " value="取消订单" style="display: <?php
                                            if ($row["flag"] == 0 && $row['applyCancel'] == 0) {
                                                echo "unset";
                                            } else {
                                                echo "none";
                                            }
                                            ?>" id="cancelOrder" onclick="cancelOrder(<?php echo $row['id']; ?>)">
                                        </td>
                                    </tr>
                                    <?php $i++;endforeach;?>
                                    <!-- </form> -->
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
            <!-- 用户个人订单end -->
            <!-- 用户个人购物车start -->
            <div class="modal fade" id="modal-container-131010" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <?php ?>
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">
                                我的购物车
                            </h4>
                        </div>
                        <div class="modal-body">
                            <table class="table  table-striped table-bordered table-condensed col-lg-7" style="text-align: center">
                                <tr>
                                    <td></td>
                                    <td class="col-sm-2">
                                        商品名
                                    </td>
                                    <td class="col-sm-1">
                                        商品颜色
                                    </td>
                                    <td>
                                        数量
                                    </td>
                                    <td class="col-sm-2">
                                        送货地址
                                    </td>
                                    <td>
                                        总价
                                    </td>

                                    <td class="col-sm-3">
                                        action
                                    </td>
                                </tr>
                                <tbody>
                                    <?php if ($cartInfo): ?>
                                    <?php $i = 1;foreach (@$cartInfo as $row): ?>
                                    <tr>
                                        <td>
                                            <?php $proImg = getProImgById($row['pid']);
                                            ?>
                                            <img src="./image_50/<?php echo $proImg['albumPath']; ?>" style="width:50px;height: 50px">
                                        </td>
                                        <td>
                                        <?php
                                        $proName = getProByOrderPid($row['pid']);
                                        // var_dump($proName);
                                        echo $proName['pName'];
                                        ?>
                                        </td>

                                        <td>
                                            <?php echo $row['color'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['num']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['location'] ?>
                                        </td>

                                        <td>
                                            <?php $totalPrice = $row['price'] * $row['num'];
                                            echo $totalPrice;
                                            ?>
                                        </td>
                                        <td>
                                            <input type="button" class="btn-link cancelCart" value="删除" id="cancelCart" onclick="cancelCart(<?php echo $row["id"]; ?>)">
                                        </td>
                                        </td>
                                        <?php $i++;endforeach;?>
                                        <?php endif;?>
                                        <!-- </form> -->
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
            <!-- 用户个人购物车end -->
                <!-- 所有商品瀑布流start -->
                <div class="row clearfix">
                    <div id="main">
                        <?php foreach(@$proInfo as $row){
                           @$proImg=getProImgById($row['id']);
                            // var_dump($proImg);
                        ?>

                        <div class="pin">
                            <div class="box">
                                <a href="./proDetails.php?id=<?php echo $row['id']?>" style="text-decoration: none;color:black;">
                                    <img id="1" src="./image_220/<?php echo $proImg['albumPath']?>" />
                                    <label for="1" class="pname">
                                        <?php echo $row['pName']?>
                                    </label>
                                    <label for="1" class="price">
                                        <?php echo $row['iPrice']?>
                                    </label>
                                </a>
                            </div>
                        </div>
                        <?php }?>


                    </div>

                </div>
                <!-- 所有商品瀑布流end -->
            </div>
        </div>
    </div>
</body>

</html>