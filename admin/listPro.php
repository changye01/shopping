<?php
$rowsPro=getProByPage($page,$pageSize=3);
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>-.-</title>
	<script type="text/javascript">


function addPro() {
	window.location = 'addPro.php';
}

function editPro(id) {
	window.location="index.php?editPros&id="+id;
}

function delPro(id) {
	if (window.confirm("您确认要删除嘛？添加一次不易，且删且珍惜!")) {
		window.location = "doAdminAction.php?act=delPro&id=" + id;
	}
}

function search() {
	if (event.keyCode == 13) {
		var val = document.getElementById("search").value;
		window.location = "listPro.php?keywords=" + val;
	}
}

function change(val) {
	window.location = "listPro.php?order=" + val;
}
</script>
</head>

<body>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div id="showDetail" style="display:none;">

			</div>
			<div class="details">
				<div class="details_operation clearfix">
					<div class="bui_select">
						<input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addPro()">
					</div>
					<div class="fr">
						<div class="text">
							<span>商品价格：</span>
							<div class="bui_select">
								<select id="" class="select" onchange="change(this.value)">
									<option>-请选择-</option>
									<option value="iPrice asc">由低到高</option>
									<option value="iPrice desc">由高到底</option>
								</select>
							</div>
						</div>
						<div class="text">
							<span>上架时间：</span>
							<div class="bui_select">
								<select id="" class="select" onchange="change(this.value)">
									<option>-请选择-</option>
									<option value="pubTime desc">最新发布</option>
									<option value="pubTime asc">历史发布</option>
								</select>
							</div>
						</div>
						<div class="text">
							<span>搜索</span>
							<input type="text" value="" class="search" id="search" onkeypress="search()">
						</div>
					</div>
				</div>
				<!--表格-->
				<table class="table table-condensed table-responsive table-striped" cellspacing="0" cellpadding="0">
					<thead>
						<tr>
							<th style="text-align: center;">编号</th>
							<th style="text-align: center;">商品名称</th>
							<th style="text-align: center;">商品分类</th>
							<th style="text-align: center;">是否上架</th>
							<th style="text-align: center;">上架时间</th>

							<th style="text-align: center;">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1;foreach($rowsPro as $row){?>
						<tr>
							<!--这里的id和for里面的c1 需要循环出来-->
							<td>
								<input type="checkbox" id="c1" class="check" value="<?php echo $row['id'];?>">
								<label for="c1" class="label">
									<?php echo $i;?>
								</label>
							</td>
							<td style="text-align: center;">
								<?php echo $row['pName'];?>
							</td>
							<td style="text-align: center;">
								<?php echo $row['cName'];?>
							</td>
							<td style="text-align: center;">
								<?php echo $row['isShow']==1?"上架ai":"为商家";?>
							</td>
							<td style="text-align: center;">
								<?php echo $row['pubTime'];?>
							</td>


							<td align="center">
								<input type="button" value="详情" class="btn" onclick="showDetail(<?php echo $row['id'];?>,'<?php echo $row['pName'];?>')">
								<input type="button"  value="详情" class="btn" data-toggle="modal" data-target="#modal-container-131096<?php echo $row['id']?>">
								<input type="button" value="修改" class="btn" onclick="editPro(<?php echo $row['id']?>)">
								<input type="button" value="删除" class="btn" onclick="delPro(<)">
								<!-- <a href="#modal-container-131096" data-toggle="modal" data-target="#myModal">触发遮罩窗体</a> -->
								<div class="modal fade" id="modal-container-131096<?php echo $row['id']?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h4 class="modal-title" id="myModalLabel">
													标题
												</h4>
											</div>
											<div class="modal-body">
												<table class="table table-responsive table-hover table-condensed table-striped" cellspacing="0" cellpadding="0">
													<tr>
														<td width="20%" align="right">商品名称</td>
														<td>
															<?php echo $row['pName'];?>
														</td>
													</tr>
													<tr>
														<td width="20%" align="right">商品类别</td>
														<td>
															<?php echo $row['cName'];?>
														</td>
													</tr>
													<tr>
														<td width="20%" align="right">商品货号</td>
														<td>
															<?php echo $row['pSn'];?>
														</td>
													</tr>
													<tr>
														<td width="20%" align="right">商品数量</td>
														<td>
															<?php echo $row['pNum'];?>
														</td>
													</tr>
													<tr>
														<td width="20%" align="right">商品价格</td>
														<td>
															<?php echo $row['mPrice'];?>
														</td>
													</tr>
													<tr>
														<td width="20%" align="right">幕课网价格</td>
														<td>
															<?php echo $row['iPrice'];?>
														</td>
													</tr>
													<tr>
														<td width="20%" align="right">商品图片</td>
														<td >
															<?php
															// <!-- echo $row['id']; -->
															$rowsImg=getAllImgByProId($row['id']);
															foreach($rowsImg as $img){
																?>
																<img width="100" height="100" src="uploads/<?php echo $img['albumPath']?>" alt="">&nbsp;&nbsp;
													<?php
															}
															?>
														</td>
													</tr>
													<tr>
														<td width="20%" align="right">是否上架</td>
														<td>
															<?php echo $row['isShow']==1?"上架ai":"为商家";?>
														</td>
													</tr>
													<tr>
														<td width="20%" align="right">是否热卖</td>
														<td>
															<?php echo $row['isHot']==1?"hot":"cold";?>
														</td>
													</tr>
													<tr>
														<td width="20%" align="right">
															商品描述
														</td>
														<td>
															<?php echo $row['pDesc'];?>
														</td>
													</tr>
												</table>

											</div>
											<div class="modal-footer">
												<!-- <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                                <button type="button" class="btn btn-primary">保存</button> -->
											</div>
										</div>

									</div>

								</div>


							</td>
						</tr>

						
						<?php $i++;}?>
						<?php if($totalRows>$pageSize):?>
						<tr>
						<td colspan="6" style="text-align:center;">
							<?php echo showPage($page,$totalPagePro,"#listPros");?>
						</td>
						</tr>
						<?php endif;?>
					</tbody>
					
				</table>
			</div>
		</div>
	</div>
	
</body>

</html>