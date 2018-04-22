<?php
// require_once ('/include.php');
@$id = $_REQUEST['id'];
print_r($id);
$sql = "SELECT * FROM shopping_cate where id='{$id}'";
$row = fetchOne($sql);
print_r($row);

// var_dump($result);
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">

    <!-- <script src="../../plugins/jquery-3.3.1.js"></script>
    <script src="../../plugins/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../plugins/bootstrap.css"> -->

</head>

<body>
    <h3 class="col-md-10 col-md-offset-5">editCate</h3>
    <br>
    <br>

    <form class="form-horizontal col-sm-5" style="text-align: center;margin-left: 200pt" role="form" action="doAdminAction.php?act=editCate&id=<?php echo $id; ?>" method="POST">
        <div class="form-group">
            <label for="cName" class="col-sm-3 control-label" id="username111">Category</label>
            <div class="col-sm-9">
                <input type="text" class="form-control"  name="cName" id="editcName" placeholder="<?php echo $row['cName'];?>" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>