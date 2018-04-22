<!doctype html>
<html>

<head>
    <meta charset="utf-8">

    <!-- <script src="../../plugins/jquery-3.3.1.js"></script>
    <script src="../../plugins/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../plugins/bootstrap.css"> -->

</head>

<body>
    <!-- <div id="main"> -->


        <table style="text-align: center;" class="table table-bordered table-hover table-striped table-responsive">
            <caption style="text-align:left;">
                <b>System Infomation</b>
            </caption>
            <tbody>
                <tr>
                    <td style="text-align: center;">Oprating System</td>
                    <td>
                        <?php echo PHP_OS; ?>
                    </td>
                </tr>
                <tr>
                    <td>Apache Version</td>
                    <td>
                        <?php echo apache_get_version(); ?>
                    </td>
                </tr>
                <tr>
                    <td>PHP Version</td>
                    <td>
                        <?php echo PHP_VERSION; ?>
                    </td>
                </tr>
                <tr>
                    <!-- //PHP_SAPI 用来判断是使用命令行还是浏览器执行的 -->
                    <td>Running Way</td>
                    <td>
                        <?php echo PHP_SAPI ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="text-align: center;" class="table table-bordered table-hover table-striped table-responsive">
            <caption style="text-align:left;">
                <b>Software Info</b>
            </caption>
            <tbody>
                <tr>
                    <td style="text-align: center;">System Name</td>
                    <td>
                        <?php echo '电器商城'; ?>
                    </td>
                </tr>
                <tr>
                    <td>Devloper</td>
                    <td>
                        <?php echo 'changye'; ?>
                    </td>
                </tr>
                <tr>
                    <td>company</td>
                    <td>
                        <?php echo "林哥哥牛逼l" . "LALALALALALLALALALA"; ?>
                    </td>
                </tr>
                <tr>
                    <!-- //PHP_SAPI 用来判断是使用命令行还是浏览器执行的 -->
                    <td>Company Website</td>
                    <td>
                        <a href="http://www.baidu.com">http://www.baidu.com</a>
                    </td>
                </tr>
            </tbody>
        </table>
    <!-- </div> -->
</body>

</html>