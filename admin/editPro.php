<?php
// $rowsCate1=getAllCate();
// var_dump($rowsCate1);
// if(!$rowsCate1){
//     echo "<script>alert('No classified information');</script>";
// }
$sql = "SELECT p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from shopping_pro as p join shopping_cate c on p.cId=c.id where p.id={$id}";
$proInfo = fetchOne($sql);
print_r($proInfo);
?>
	<!doctype html>
	<html>

	<head>
		<meta charset="utf-8">
		<script>
			KindEditor.ready(function (K) {
				window.editor = K.create('#editor_id1');
			});
			$(document).ready(function () {
				$("#selectFileBtn1").click(function (event) {
					$fileFiled = $('<input type="file" name="thumbs[]"/>');
					$fileFiled.hide();
					$("#attachList1").append($fileFiled);
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
							$("#attachList1").append($attachItem);
							$a = $("#attachList1>.attachItem").find("a");
							//console.log("第二次算a数量为："+$a.length);
							$a.click(function () {
								//console.log("触发了click事件");
								$(this).parents('.attachItem').prev('input').remove();
								$(this).parents('.attachItem').remove();
							})
						}
					})
					//$fileFiled.trigger('change');  //egde 浏览器不写这句不能显示？！
					$a = $("#attachList1>.attachItem").find("a");
					if ($a.length == 0) {
						//console.log("a数量为零，手动触发change事件");
						$fileFiled.trigger('change');
					}
					//event.stopPropagation();
				})
			})
		// </script>

	</head>

	<body>
		<h3 class="col-md-10 col-md-offset-5">editPro</h3>
		<br>
		<br>
		<form class="form-horizontal col-sm-7" style="text-align: center;margin-left: 150pt" role="form" action="doAdminAction.php?act=editPro&id=<?php echo $proInfo['id'] ?>"
		    method="POST" enctype="multipart/form-data">
			<table class="table table-bordered table-condensed table-responsive">
				<tbody>
					<tr>
						<td>
							商品名称
						</td>
						<td>
							<input type="text" class="form-control" name="pName" value="<?php echo $proInfo['pName'] ?>" />
						</td>
					</tr>
					<tr>
						<td>
							商品分类
						</td>
						<td>
							<select name="cId" class="form-control">
								<?php
foreach ($rowsCate1 as $row) {
    ?>
									<option value="<?php echo $row['id']; ?>" >
										<?php echo $row['cName']; ?>
									</option>

								<?php }?>
							</select>
						</td>

					</tr>
					<tr>
						<td>商品货号</td>
						<td>
							<input type="text" class="form-control" name="pSn" value="<?php echo $proInfo['pSn'] ?>" />
						</td>
					</tr>
					<tr>
						<td>商品数量</td>
						<td>
							<input type="text" name="pNum" class="form-control" value="<?php echo $proInfo['pNum'] ?>" />
						</td>
					</tr>
					<tr>
						<td>商品市场价</td>
						<td>
							<input type="text" class="form-control" name="mPrice" value="<?php echo $proInfo['mPrice'] ?>" />
						</td>
					</tr>
					<tr>
						<td>商品慕课价</td>
						<td>
							<input type="text" class="form-control" name="iPrice" value="<?php echo $proInfo['iPrice'] ?>" />
						</td>
					</tr>
					<tr>
						<td>商品描述</td>
						<td>
							<textarea name="pDesc" id="editor_id1" style="width:100%;height:150px;" class="form-control" ><?php echo $proInfo['pDesc'] ?></textarea>
						</td>
					</tr>
					<tr>
						<td>商品图像</td>
						<td>
							<a href="javascript:void(0)" id="selectFileBtn1">添加附件</a>
							<div id="attachList1" class="clear"></div>
						</td>
                    </tr>

					<tr>
						<td colspan="2">
							<input type="submit" value="发布商品" />
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>

	</html>