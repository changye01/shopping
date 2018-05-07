<?php
$rowsUser = getUserByPage($page, $pageSize =20);
// var_dump($rowsUser);
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <script>    
            function editUser(id){
                window.location="index.php?editUsers&id="+id;
            }
            function delUser(id){
                if (window.confirm("Are you sure you want to delete? ")) {
                    window.location="doAdminAction.php?act=delUser&id="+id;
                }
            } 
    </script>

</head>

<body>
    <table class="table table-responsive table-striped table-bordered table-condensed " style="text-align: center">
        <tr>
            <td>
                id
            </td>
            <td>
                userName
            </td>
            <td>
                email
            </td>
            <td>
                是否激活
            </td>
            <td>
                送货地址
            </td>
            <td>
                action
            </td>
        </tr>
        <tbody>
            <?php $i=1;foreach($rowsUser as $row):?>
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
                    <?php echo $row['username'];?>
                </td>
                <td>
                    <?php echo $row['email']?>
                </td>
                <td>
                    <?php echo $row['activeFlag']==0?'未激活':'激活';?>
                </td>
                <td>
                    <?php echo $row['location'];?>
                </td>
                <td>
                    <input type="button" class="btn-link col-sm-6 " value="edit" id="editUser" onclick="editUser(<?php echo $row['id'];?>)" >
                    <input type="button" class="btn-link col-sm-6 delUser" value="delete" id="delUser" onclick="delUser(<?php echo $row['id'];?>)" >
                </td>
            </tr>
            <?php $i++; endforeach;?>
            <!-- </form> -->
            <?php if($totalRowsUser>$pageSize):?>
            <tr>
                <td colspan="6"><?php echo showPage($page,$totalPageUser,"#listUsers")?></td>
            </tr>
            <?php endif;?>
        </tbody>
    </table>
    
</body>

</html>