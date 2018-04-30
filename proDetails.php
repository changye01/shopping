<?php
require_once './include.php';
$id=$_REQUEST['id'];
$proInfo=getProById($id);
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
    <link type="text/css" rel="stylesheet" media="all" href="styles/jquery.jqzoom.css"/>
    <script src="scripts/jquery.jqzoom-core.js" type="text/javascript"></script>
    <script type="text/javascript">
$(document).ready(function() {
	$('.jqzoom').jqzoom({
            zoomType: 'standard',
            lens:true,
            preloadImages: false,
            alwaysOn:false,
			title:false,
			zoomWidth:410,
			zoomHeight:410
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
                                <a class="navbar-brand" href="#">Brand</a>
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active">
                                        <a href="#">Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Link</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                            <strong class="caret"></strong>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">Action</a>
                                            </li>
                                            <li>
                                                <a href="#">Another action</a>
                                            </li>
                                            <li>
                                                <a href="#">Something else here</a>
                                            </li>
                                            <li class="divider">
                                            </li>
                                            <li>
                                                <a href="#">Separated link</a>
                                            </li>
                                            <li class="divider">
                                            </li>
                                            <li>
                                                <a href="#">One more separated link</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <form class="navbar-form navbar-left" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" />
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a href="#">Link</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                            <strong class="caret"></strong>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">Action</a>
                                            </li>
                                            <li>
                                                <a href="#">Another action</a>
                                            </li>
                                            <li>
                                                <a href="#">Something else here</a>
                                            </li>
                                            <li class="divider">
                                            </li>
                                            <li>
                                                <a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </nav>
                    </div>
                </div>
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
                        <div class="description clearfix" >
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
                                            <a class="<?php echo $key==0?" zoomThumbActive ":" ";?> active" href='javascript:void(0);'
                                                rel="{gallery: 'gal1', smallimage: 'image_350/<?php echo $proImg['albumPath'];?>',largeimage: 'image_800/<?php echo $proImg['albumPath'];?>'}">
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
                                        <div class="dt">优惠</div>
                                        <div class="dd clearfix">
                                            <span class="hg">
                                                <i class="hg_icon">满换购</i>
                                                <em>购ipad加价优惠够配件或USB充电插座</em>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="des_position">
                                        <div class="dl clearfix">
                                            <div class="dt">送到</div>
                                            <div class="dd clearfix">
                                                <div class="select">
                                                    <!-- <h3>海淀区五环内</h3> -->
                                                    <span></span>
                                                    <!-- <ul class="show_select">
                                                        <li>上帝</li>
                                                        <li>五道口</li>
                                                        <li>上帝</li>
                                                    </ul> -->
                                                    <select>
                                                        <option>aaaaa</option>
                                                    </select>
                                                </div>
                                                <span class="theGoods">有货，可当日出货</span>
                                            </div>
                                        </div>
                                        <div class="dl clearfix">
                                            <div class="dt colorSelect">选择颜色</div>
                                            <div class="dd clearfix">
                                                <div class="des_item">
                                                    <a>WIFI 16GB</a>
                                                </div>
                                                <div class="des_item">
                                                    <a>WIFI 16GB</a>
                                                </div>
                                                <div class="des_item">
                                                    WIFI 16GB
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dl clearfix">
                                            <div class="dt des_select_more">选择版本</div>
                                            <div class="dd clearfix ">
                                                <div class="des_item des_item_sm des_item_acitve">
                                                    WIFI 16GB
                                                </div>
                                                <div class="des_item des_item_sm">
                                                    WIFI 16GB + 3G
                                                </div>
                                                <div class="des_item des_item_sm">
                                                    WIFI + 3G
                                                </div>
                                                <div class="des_item des_item_sm">
                                                    WIFI 16GB
                                                </div>
                                                <div class="des_item des_item_sm">
                                                    WIFI 16GB + 3G
                                                </div>
                                                <div class="des_item des_item_sm">
                                                    WIFI + 3G
                                                </div>
                                                <div class="des_item des_item_sm">
                                                    WIFI 16GB
                                                </div>
                                                <div class="des_item des_item_sm">
                                                    WIFI 16GB + 3G
                                                </div>
                                                <div class="des_item des_item_sm">
                                                    WIFI + 3G
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dl">
                                            <div class="dt des_num">数量</div>
                                            <div class="dd clearfix">
                                                <div class="des_number">
                                                    <div class="reduction">-</div>
                                                    <div class="des_input">
                                                        <input type="text">
                                                    </div>
                                                    <div class="plus">+</div>
                                                </div>
                                                <span class="xg">限购
                                                    <em>9</em>件</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="des_select">
                                        已选择
                                        <span>"白色|WIFI 16G"</span>
                                    </div>
                                    <div class="shop_buy">
                                        <a href="#" class="shopping_btn"></a>
                                        <!-- <span class="line"></span> -->
                                        <!-- <a href="#" class="buy_btn"></a> -->
                                    </div>
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