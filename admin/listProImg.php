<?php 

@$rows=getProInfo();
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>-.-</title>
    <link rel="stylesheet" href="styles/backstage.css">
</head>

<body>

    <div class="details">

        <!--表格-->
        <table class="table table-bordered table-responsive" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th width="10%">编号</th>
                    <th width="20%">商品名称</th>
                    <th>商品图片</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php if($rows):?>
                <?php foreach($rows as $row):?>
                <tr>
                    <!--这里的id和for里面的c1 需要循环出来-->
                    <td>
                        <input type="checkbox" id="c<?php echo $row['id'];?>" class="check" value=<?php echo $row[ 'id'];?>>
                        <label for="c1" class="label">
                            <?php echo $row['id'];?>
                        </label>
                    </td>

                    <td>
                        <?php echo $row['pName']; ?>
                    </td>
                    <td>
                        <?php 
                            @$proImgs=getAllImgByProId($row['id']);
                            if($proImgs):
                            foreach($proImgs as $img):
                            ?>
                        <img width="100" height="100" src="uploads/<?php echo $img['albumPath'];?>" alt="" /> &nbsp;&nbsp;
                        <?php endforeach;endif;?>
                    </td>
                    
                </tr>
                <?php  endforeach;?>
                            <?php endif;?>
            </tbody>
        </table>
    </div>
   
</body>

</html>