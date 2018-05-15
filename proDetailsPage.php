<html>
    <head>
        
    </head>
<!-- 发起订单start -->
<div class="row clearfix">
                            <div class="userPosition comWidth col-md-4">
                                <strong>
                                    <a href="./index.php">首页</a>
                                </strong>
                                <span>&nbsp;&gt;&nbsp;</span>
                                <a href="./cateListPro.php?id=<?php echo $proInfo['cId'] ?>">
                                    <?php echo $proInfo['cName']; ?>
                                </a>
                                <span>&nbsp;&gt;&nbsp;</span>
                                <em>
                                    <?php echo $proInfo['pName']; ?>
                                </em>
                            </div>
                            <div class="description_info comWidth col-md-8">
                                <div class="description clearfix">
                                    <div class="leftArea" style="width: 400px">
                                        <div class="description_imgs">
                                            <div class="big">
                                                <a href="image_800/<?php echo $proImgs[0]['albumPath']; ?>" class="jqzoom" rel='gal1' title="triumph">
                                                    <img width="440" height="430" src="image_350/<?php echo $proImgs[0]['albumPath']; ?>" title="triumph">
                                                </a>
                                            </div>
                                            <ul class="des_smimg clearfix" id="thumblist">
                                                <?php foreach ($proImgs as $key => $proImg): ?>
                                                <li>
                                                    <a class="<?php echo $key == 0 ? " zoomThumbActive " : " "; ?> active" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: 'image_350/<?php echo $proImg['albumPath']; ?>',largeimage: 'image_800/<?php echo $proImg['albumPath']; ?>'}">
                                                        <img width="70" height="70" src="image_220/<?php echo $proImg['albumPath']; ?>" alt="">
                                                    </a>
                                                </li>
                                                <?php endforeach;?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rightArea">
                                        <div class="des_content">
                                            <h3 class="des_content_tit">
                                                <?php echo $proInfo['pName']; ?>
                                                <?php echo $proInfo['pDesc']; ?>

                                            </h3>

                                            <div class="dl clearfix">
                                                <!-- / <div class="dt"><?php echo $proInfo['pDesc'] ?></div> -->
                                                <div class="dt">木木价</div>
                                                <div class="dd clearfix">
                                                    <span class="des_money">
                                                        <!-- <em> 标签告诉浏览器把其中的文本表示为强调的内容。对于所有浏览器来说，这意味着要把这段文字用斜体来显示。 -->
                                                        <em>￥</em>
                                                        <?php echo $proInfo['iPrice']; ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="dl clearfix">
                                                <!-- <div class="dt">优惠</div> -->
                                                <div class="dd clearfix">
                                                    <span class="hg">
                                                        <!-- <i class="hg_icon">满换购</i> -->
                                                        <!-- <em>购ipad加价优惠够配件或USB充电插座</em> -->
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- 提交表单start  -->
                                            <form class="form-horizontal" id="order" role="form" action="./admin/doAdminAction.php?act=addOrder&id=<?php echo $proInfo['id'] ?>"
                                                method="POST" >
                                                <!-- ./admin/doAdminAction.php?act=addOrder&id=<?php echo $proInfo['id'] ?> -->
                                                <div class="form-group col-sm-offset-5">
                                                    <label for="location" class="col-sm-2 control-label">送到：</label>
                                                    <div class="col-sm-4">
                                                        <select class="form-control col-sm-4"  name="location">
                                                        <?php foreach ($location as $val) {?>
                                                            <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
                                                        <?php }?>
                                                        </select>
                                                        <!-- <input type="text" class="" id="location" name="location"> -->
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="color" class="col-sm-2 control-label">color：</label>
                                                    <div class="col-sm-10">
                                                        <label class="radio-inline">
                                                            <input type="radio" id="white" value="white" name="color" checked>white
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
                                                        <input type="text" value="1" name="num"  class="col-sm-8">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="num" class="col-sm-2 control-label" >数量：</label> -->
                                                    <div class="col-sm-2">
                                                        <input type="hidden" value="<?php echo $proInfo['iPrice']; ?>" name="price" class="col-sm-8 ">
                                                        <input type="hidden" value="<?php @$userId = $_SESSION['loginFlag'];
                                                        echo $userId;?>" name="uid" class="col-sm-8 ">
                                                        <!-- <input type="hidden" value=">" name="totalPrice"> -->
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-default" >提交订单</button>
                                                        <input type="button"  id="Cart" class="btn btn-default" postid="<?php echo $proInfo['id']?>" style="margin-left:50px;"  value="加入购物车">
                                                        <!-- onclick="Cart()" -->
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
                        <!-- 发起订单end -->