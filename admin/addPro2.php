<?php
$rowsCate1=getAllCate();
// var_dump($rowsCate1);
if(!$rowsCate1){
	echo "<script>alert('No classified information');</script>";
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<script>
		KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
		$(document).ready(function () {
			$("#selectFileBtn").click(function (event) {
				$fileFiled = $('<input type="file" name="thumbs[]"/>');
				$fileFiled.hide();
				$("#attachList").append($fileFiled);
				$fileFiled.trigger('click');
				$fileFiled.change(function (event) {
					//console.log("change");
					$path = $(this).val();
					$filename = $path.substring($path.lastIndexOf("\\") + 1);
					if ($path != "") {
						$attachItem = $(
							'<div class="attachItem"><div class="left">a.gif</div><a href="javascript:void(0)" title="删除附件">删除</a></div>'
						);
						$attachItem.find(".left").html($filename);
						$("#attachList").append($attachItem);
						$a = $("#attachList>.attachItem").find("a");
						//console.log("第二次算a数量为："+$a.length);
						$a.click(function () {
							//console.log("触发了click事件");
							$(this).parents('.attachItem').prev('input').remove();
							$(this).parents('.attachItem').remove();
						})
					}
				})
				//$fileFiled.trigger('change');  //egde 浏览器不写这句不能显示？！
				$a = $("#attachList>.attachItem").find("a");
				if ($a.length == 0) {
					//console.log("a数量为零，手动触发change事件");
					$fileFiled.trigger('change');
				}
				//event.stopPropagation();
			})
		})
	</script>

</head>

<body>
<h3>添加商品</h3>
<form action="doAdminAction.php?act=addPro" method="post" enctype="multipart/form-data">
<table width="70%"  border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
	<tr>
		<td align="right">商品名称</td>
		<td><input type="text" name="pName"  placeholder="请输入商品名称"/></td>
	</tr>
	<tr>
		<td align="right">商品分类</td>
		<td>
		<select name="cId">
			<?php foreach($rowsCate1 as $row):?>
				<option value="<?php echo $row['id'];?>"><?php echo $row['cName'];?></option>
			<?php endforeach;?>
		</select>
		</td>
	</tr>
	<tr>
		<td align="right">商品货号</td>
		<td><input type="text" name="pSn"  placeholder="请输入商品货号"/></td>
	</tr>
	<tr>
		<td align="right">商品数量</td>
		<td><input type="text" name="pNum"  placeholder="请输入商品数量"/></td>
	</tr>
	<tr>
		<td align="right">商品市场价</td>
		<td><input type="text" name="mPrice"  placeholder="请输入商品市场价"/></td>
	</tr>
	<tr>
		<td align="right">商品平台价</td>
		<td><input type="text" name="iPrice"  placeholder="请输入商品平台价"/></td>
	</tr>
	<tr>
		<td align="right">商品描述</td>
		<td>
			<textarea name="pDesc" id="editor_id" style="width:100%;height:150px;"></textarea>
		</td>
	</tr>
	<tr>
		<td align="right">商品图像</td>
		<td>
			<a href="javascript:void(0)" id="selectFileBtn">添加附件</a>
			<div id="attachList" class="clear"></div>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit"  value="发布商品"/></td>
	</tr>
</table>
</form>
</body>
</html>