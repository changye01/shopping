<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <h3 class="col-md-10 col-md-offset-4">addManager</h3>
    <br>
    <br>
    <form class="form-horizontal col-sm-5" style="text-align: center;margin-left: 200pt" role="form" action="doAdminAction.php?act=addAdmin"
        method="POST">
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" placeholder="please input manager name" />
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="please input manager password" />
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" placeholder="please input manager email" name="email" />
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