<?php
// require_once ('/include.php');
@$id = $_REQUEST['id'];
print_r($id);
$sql = "SELECT * FROM shopping where id='{$id}'";
$row = fetchOne($sql);
print_r($row);
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <h3 class="col-md-10 col-md-offset-4">editUser</h3>
    <br>
    <br>
    <form class="form-horizontal col-sm-5" style="margin-left: 200pt" role="form" action="doAdminAction.php?act=editUser&id=<?php echo $row['id']?>;"
        method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" value="<?php echo $row['username'];?>" placeholder="please input user name" />
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="please input user password" value="<?php echo $row['username'];?>" />
            </div>
        </div>
        <div class="form-group">
            <label for="location" class="col-sm-2 control-label">location</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="location" placeholder="please input user location" value="<?php echo $row['location'];?>" />
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" value="<?php echo $row['email'];?>" placeholder="please input user email" name="email" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Sex</label>
            <div class="col-sm-5">

                <label class="radio-inline">
                    <input type="radio" name="sex" id="sex12" value="1" <?php echo $row['sex']=='男'?'checked':null;?> >男
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sex" id="sex22" value="2" <?php echo $row['sex']=='女'?"checked":null;?>>女
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sex" id="sex32" value="3" <?php echo $row['sex']=='保密'?"checked":null;?>>保密
                </label>
            </div>
        </div>
        <!-- <div class="form-group">
            <label for="myFile1" class="col-sm-2 control-label">头像</label>
            <div class="col-sm-10">
            <input type="file" id="myFile1" name="face"  class="form-control"/>
            </div>
        </div> -->
        
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>