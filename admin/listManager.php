<?php

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">

    <!-- <script src="../../plugins/jquery-3.3.1.js"></script>
    <script src="../../plugins/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../plugins/bootstrap.css"> -->
    <script>
        
            function editManager(id){
                window.location="index.php?editManagers&id="+id;
            }
            function delManager(id){
                if (window.confirm("Are you sure you want to delete? ")) {
                    window.location="doAdminAction.php?act=delAdmin&id="+id;
                }
            }
            // $(document).ready(function(){
            //     $(".delManager").click(function EventHandler(e){
            //         id1=e.currentTarget.id;
            //         id2=id1.substr(10,id1.length);
            //         console.log(id2);
            //         $.post("doAdminAction.php",{
            //             id:id2,
            //             act:"delAdmin"
            //         },function(data,status){
            //             // alert();
            //         });
            //     });
            // });
    
    </script>

</head>

<body>
    <table class="table table-responsive table-striped table-bordered table-condensed " style="text-align: center">
        <tr>
            <td>
                id
            </td>
            <td>
                Mangage Name
            </td>
            <td>
                Manage User
            </td>
            <td>
                action
            </td>
        </tr>
        <tbody>
            <?php $i=1;foreach($rows as $row):?>
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
                    <input type="button" class="btn-link col-sm-6 " value="edit" id="editManager" onclick="editManager(<?php echo $row['id'];?>)" >
                    <input type="button" class="btn-link col-sm-6 delManager" value="delete" id="delManager" onclick="delManager(<?php echo $row['id'];?>)" >
                </td>
            </tr>
            <?php $i++; endforeach;?>
            <!-- </form> -->
            <?php if($totalRows>$pageSize):?>
            <tr>
                <td colspan="4"><?php echo showPage($page,$totalPage,"#listManagers")?></td>
            </tr>
            <?php endif;?>
        </tbody>
    </table>
    
</body>

</html>