<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <h3 class="col-md-10 col-md-offset-4">addUser</h3>
    <br>
    <br>
    <form class="form-horizontal col-sm-5" style="margin-left: 200pt" role="form" action="doAdminAction.php?act=addUser"
        method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" placeholder="please input user name" />
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="please input user password" />
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" placeholder="please input user email" name="email" />
            </div>
        </div>
        <div class="form-group">
            <label for="location" class="col-sm-2 control-label">送货地址：</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="please input user location" name="location" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Sex</label>
            <div class="col-sm-5">

                <label class="radio-inline">
                    <input type="radio" name="sex" id="sex1" value="1" checked>男
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sex" id="sex2" value="2">女
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sex" id="sex3" value="3">保密
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="myFile" class="col-sm-2 control-label">头像</label>
            <div class="col-sm-10">
            <input type="file" id="myFile" name="face"  class="form-control"/>
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