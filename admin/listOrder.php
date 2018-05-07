<?php
@$rowsOrder = getOrderByPage($page, $pageSize = 7);
// var_dump($rowsUser);
// var_dump($rowsOrder)
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <script>
        
            function delOrder(id){
                if (window.confirm("确定删除订单? ")) {
                    window.location="doAdminAction.php?act=delOrder&id="+id;
                }
            }
            function doneOrder(id){
                if(window.confirm("确定完成订单? ")){
                    window.location="doAdminAction.php?act=doneOrder&id="+id;
                }
            }
    </script>

</head>

<body>
    <table class="table table-responsive table-striped table-bordered table-condensed col-md-10" style="text-align: center">
        <tr>
            <td>
                id
            </td>
            <td>
                商品名
            </td>
            <td>
                用户名
            </td>
            <td>
                商品颜色
            </td>
            <td>
                数量
            </td>
            <td>
                地址
            </td>
            <td>
                价格
            </td>
            <td>
                总价
            </td>
            <td>
                用户申请取消
            </td>
            <td>
                action
            </td>
        </td>
        <tbody>
            <?php $i=1;foreach($rowsOrder as $row):?>
                 <?php if($row['flag']==0):?>
            <!-- <form action="editManager.php" method="POST"> -->
            <tr>
                <td>
                    <!-- checkbox 默认选中 -->
                    <!-- checked="checked" -->
                    <input type="checkbox" class="checkbox col-sm-1" id="checkbox1<?php echo $row['id'];?>">
                    <label for="checkbox1<?php echo $row['id'];?>" class="col-sm-11">
                        <?php echo $row['id'];?>
                    </label>
                </td>
                <td>
                    <?php 
                        $proName=getProByOrderPid($row['pid']);
                        foreach($proName as $val){
                            echo $val;
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $username=getUserByOrderUid($row['uid']);
                        // var_dump($username);
                        foreach($username as $val){
                            echo $val;
                        }
                    ?>
                </td>
                <td>
                    <?php echo $row['color']?>
                </td>
                <td>
                    <?php echo $row['num'];?>
                </td>
                <td>
                    <?php echo $row['location']?>
                </td>
                <td>
                    <?php echo $row['price']?>
                </td>
                <td>
                    <?php $totalPrice=$row['price']*$row['num'];
                          echo $totalPrice;
                    ?>
                </td>
                <td>
                    <?php echo $row['applyCancel']==1?"是":"否";
                    ?>
                </td>
                <td>
                    <!-- <input type="button" class="btn-link col-sm-6 " value="edit" id="editUser" onclick="editUser(" > -->
                    <input type="button" class="btn-link col-sm-6  " value="完成订单" id="doneOrder" onclick="doneOrder(<?php echo $row['id'];?>)" >
                    <input type="button" class="btn-link col-sm-6  " value="删除订单" id="delOrder" onclick="delOrder(<?php echo $row['id'];?>)" >
                </td>
            </tr>
                <?php endif;?>
            <?php $i++; endforeach;?>
            <!-- </form> -->
            <?php if($totalRowsOrder>$pageSize):?>
            <tr>
                <td colspan="9"><?php echo showPage($page,$totalPageOrder,"#listOrders")?></td>
            </tr>
            <?php endif;?>
        </tbody>
    </table>
    
</body>

</html>