<!doctype html>
<html>

<head>
    <meta charset="utf-8">

    <!-- <script src="../../plugins/jquery-3.3.1.js"></script>
    <script src="../../plugins/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../plugins/bootstrap.css"> -->

</head>

<body>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">

        <!-- <script src="../../plugins/jquery-3.3.1.js"></script>
    <script src="../../plugins/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../plugins/bootstrap.css"> -->

    </head>

    <body>
        <h3 class="col-md-10 col-md-offset-4">addCate</h3>
        <br>
        <br>
        <form class="form-horizontal col-sm-5" style="text-align: center;margin-left: 200pt" role="form" action="doAdminAction.php?act=addCate"
            method="POST">
            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">分类名称</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="please input category name" name="cName" />
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