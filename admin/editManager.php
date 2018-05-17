<?php
// require_once ('/include.php');
@$id = $_REQUEST['id'];
print_r($id);
$sql = "SELECT * FROM shopping_admin where id='{$id}'";
$row = fetchOne($sql);
print_r($row);
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
    <h3 class="col-md-10 col-md-offset-5">editManager</h3>
    <br>
    <br>

    <form class="form-horizontal col-sm-5" style="text-align: center;margin-left: 200pt" role="form" action="doAdminAction.php?act=editAdmin&id=<?php echo $id; ?>" method="POST">
        <div class="form-group">
            <label for="username" class="col-sm-3 control-label" id="username111">username</label>
            <div class="col-sm-9">
                <input type="text" class="form-control"  name="username"  value="<?php echo $row['username']; ?>" />
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" name="password"  />
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">E-mail</label>
            <div class="col-sm-9">
                <input type="email" class="form-control"  name="email"  value="<?php echo $row['email']; ?>"/>
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