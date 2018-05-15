<?php require_once './include.php';
$rowsCate1=getAllCate();
// var_dump($rowsCate1);
if(!($rowsCate1&&is_array($rowsCate1))){
    alertMes("对不起，网站维护中","https://www.baidu.com");
}?>
<html>
    <head>

    </head>
    <body>
<!-- top主页start -->
<div class="row clearfix">
    <div class="col-md-12 column">
        <div class="row clearfix">
            <div class="col-md-3 column">
                <div class="list-group">
                    <dl class="list-group">
                        <dt class="list-group-item active" title="">
                            <h4 style="text-align: center;">
                                <a href="./cateListPro.php?id=22" style="color: white;text-decoration: none;">冰箱</a>&nbsp; &nbsp;
                            </h4>
                        </dt>
                        <dd class="list-group-item">
                            <h4 style="text-align: center;">
                                <a href="./cateListPro.php?id=21"> 电视 </a>&nbsp;

                            </h4>
                        </dd>
                    </dl>
                    <dl class="list-group">
                        <dt class="list-group-item active" title="">
                            <h4 style="text-align: center;">
                                <a href="./cateListPro.php?id=23" style="color: white;text-decoration: none;">洗衣机</a>&nbsp; &nbsp;
                            </h4>
                        </dt>
                        <dd class="list-group-item">
                            <h4 style="text-align: center;">
                                <a href="./cateListPro.php?id=26"> 空调 </a>&nbsp;

                            </h4>
                        </dd>
                    </dl>
                    <dl class="list-group">
                        <dt class="list-group-item active" title="">
                            <h4 style="text-align: center;">
                                <a href="./cateListPro.php?id=27" style="color: white;text-decoration: none;">厨卫大电</a>&nbsp; &nbsp;
                            </h4>
                        </dt>
                        <dd class="list-group-item">
                            <h4 style="text-align: center;">
                                <a href="./cateListPro.php?id=28"> 厨房小电 </a>&nbsp;

                            </h4>
                        </dd>
                    </dl>
                    <dl class="list-group">
                        <dt class="list-group-item active" title="">
                            <h4 style="text-align: center;">
                                <a href="./cateListPro.php?id=29" style="color: white;text-decoration: none;">生活电器</a>&nbsp; &nbsp;
                            </h4>
                        </dt>
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
<!-- top主页end -->
<!-- 主页界面start -->
<div class="row clearfix">
    <div class="col-md-12 column">
        <?php if($rowsCate1):?>
        <?php $i = 800;foreach ($rowsCate1 as $row): ?>
        <div class="shopTit comWidth">
            <span class="icon"></span>
            <h3>
                <?php echo $row['cName']; ?>
            </h3>
            <a href="./cateListPro.php?id=<?php echo $row['id']; ?>" class="more">更多&gt;&gt;</a>
        </div>
        <div class="shopList comWidth clearfix">
            <div class="carousel slide" id="carousel-10033<?php echo $i; ?>" style="width: 270pt;height: 200px;">
                <ol class="carousel-indicators">
                    <li data-slide-to="0" data-target="#carousel-10033<?php echo $i; ?>">
                    </li>
                    <li data-slide-to="1" data-target="#carousel-10033<?php echo $i; ?>">
                    </li>
                    <li data-slide-to="2" data-target="#carousel-10033<?php echo $i; ?>" class="active">
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
                <a class="left carousel-control" href="#carousel-10033<?php echo $i; ?>" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-10033<?php echo $i; ?>" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <div class="carousel slide" id="carousel-10033<?php echo $row['id']; ?>" style="width: 270pt;height: 200px;">
                <ol class="carousel-indicators">
                    <li data-slide-to="0" data-target="#carousel-10033<?php echo $row['id']; ?>">
                    </li>
                    <li data-slide-to="1" data-target="#carousel-10033<?php echo $row['id']; ?>">
                    </li>
                    <li data-slide-to="2" data-target="#carousel-10033<?php echo $row['id']; ?>" class="active">
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
                <a class="left carousel-control" href="#carousel-10033<?php echo $row['id']; ?>" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-10033<?php echo $row['id']; ?>" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <
            <div class="rightArea" style="margin-top: -300pt">
                <div class="shopList_top clearfix">
                    <?php
                    $pros = getProsByCid($row['id']);
                    if ($pros && is_array($pros)):
                    foreach ($pros as $pro):
                    $proImg = getProImgById($pro['id']);
                    ?>
                            <div class="shop_item">
                                <div class="shop_img">
                                    <a href="proDetails.php?id=<?php echo $pro['id']; ?>" target="_blank">
                                        <img height="200" width="187" src="image_220/<?php echo $proImg['albumPath']; ?>" alt="">
                                    </a>
                                </div>
                                <h6>
                                    <?php echo $pro['pName']; ?>
                                </h6>
                                <p>
                                    <?php echo $pro['iPrice']; ?>元</p>
                            </div>
                            <?php
                            endforeach;
                            endif;
                            ?>

                </div>
                <div class="shopList_sm clearfix">
                    <?php
                    $prosSmall = getSmallProsByCid($row['id']);
                    if ($prosSmall && is_array($prosSmall)):
                    foreach ($prosSmall as $proSmall):
                    $proSmallImg = getProImgById($proSmall['id']);
                    ?>
                            <div class="shopItem_sm">
                                <div class="shopItem_smImg">
                                    <a href="proDetails.php?id=<?php echo $proSmall['id']; ?>" target="_blank">
                                        <img width="95" height="95" src="image_220/<?php echo $proSmallImg['albumPath']; ?>" alt="">
                                    </a>
                                </div>
                                <div class="shopItem_text">
                                    <p>
                                        <?php echo $proSmall['pName']; ?>
                                    </p>
                                    <h3>￥
                                        <?php echo $proSmall['iPrice']; ?> </h3>
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
                        <?php endif;?>
    </div>
</div>
<!-- 主页界面end -->
</body>
</html>