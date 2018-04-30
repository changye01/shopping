<?php
$rowsCate = getCateByPage($page, $pageSize = 3);
?>
<!doctype html>

<html>

<head>
    <meta charset="utf-8">

    <!-- <script src="../../plugins/jquery-3.3.1.js"></script>
    <script src="../../plugins/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../plugins/bootstrap.css"> -->
    <script>
        
            function editCate(id){
                window.location="index.php?editCates&id="+id;
            }
            function delCate(id){
                if (window.confirm("Are you sure you want to delete? ")) {
                    window.location="doAdminAction.php?act=delCate&id="+id;
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
                Category
            </td>
            <td>
                action
            </td>
            
        </tr>
        <tbody>

            <?php
            // $rows=getCateByPage($pageSize=3);
            $i=1;foreach($rowsCate as $row):?>
            <!-- <form action="editManager.php" method="POST"> -->
            <tr>
                <td>
                    <!-- checkbox 默认选中 -->
                    <!-- checked="checked" -->
                    <input type="checkbox" class="checkbox col-sm-1" id="checkbox1">
                    <label for="checkbox1" class="col-sm-11">
                        <?php echo $row['id'];?>
                    </label>
                </td>
                <td>
                    <?php echo $row['cName'];?>
                </td>
                
                <td>
                    <input type="button" class="btn-link col-sm-6 " value="edit" id="editCate" onclick="editCate(<?php echo $row['id'];?>)" >
                    <input type="button" class="btn-link col-sm-6 " value="delete" id="delCate" onclick="delCate(<?php echo $row['id'];?>)" >
                </td>
            </tr>
            <?php $i++; endforeach;?>
            <!-- </form> -->
            <?php if($totalRowsCate>$pageSize):?>
            <tr>
                <td colspan="2"><?php echo showPage($page,$totalPageCate,"#listCates")?></td>
            </tr>
            <?php endif;?>
        </tbody>
    </table>
    
</body>

</html>