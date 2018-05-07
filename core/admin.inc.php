<?php
// require_once '../include.php';
/**
 * 检查是否有管理员
 *
 * @param [type] $sql
 * @return void
 */
function checkAdmin($sql)
{
    // connect();
    return fetchOne($sql);
}

/**
 * 检查管理员是否登录
 *
 * @return void
 */
function checkLogined()
{
    if (@$_SESSION['adminId'] == "" && $_COOKIE['adminId'] == "") {
        alertMes("请先登录", "login.php");
    }
}
/**
 * 添加管理员
 *
 * @return void
 */
function addAdmin()
{
    $arr = $_POST;
    $arr['password'] = md5($_POST['password']);
    if (insert("shopping_admin", $arr)) {
        $mes = "Insert Success";
    } else {
        $mes = 'Insert Failed';
    }
    return $mes;
}
function delAdmin($id)
{
    if (delete("shopping_admin", "id={$id}") != -1) {
        $mes = "delete success";

    } else {
        $mes = "delete failed";
    }
    return $mes;
}
/**
 * 更新管理员
 *
 * @param [type] $id
 * @return void
 */
function editAdmin($id)
{
    $arr = $_POST;

    $arr['password'] = md5($_POST['password']);
    if (update("shopping_admin", $arr, "id={$id}") != -1) {
        $mes = "update success";
    } else {
        $mes = "update failed";
    }
    return $mes;

}
/**
 * 根据页面得到商品管理员信息
 *
 * @param [type] $page
 * @param integer $pageSize
 * @return array
 */
function getAdminByPage($page, $pageSize = 3)
{
    $sql = "select * from shopping_admin";
    global $totalRows;
    $totalRows = getResultNum($sql);
    global $totalPage;
    // echo $totalRows;
    // $pageSize = 3;
    // ceil() 函数向上舍入为最接近的整数
    $totalPage = ceil($totalRows / $pageSize);
    if ($page < 1 || $page == null || !is_numeric($page)) {
        $page = 1;
    }
    if ($page > $totalPage) {
        $page = $totalPage;
    }
    $offset = ($page - 1) * $pageSize;
    $sql = "SELECT id,username,email FROM shopping_admin order by id LIMIT {$offset},{$pageSize}";
// $rows = getAllAdmin();
    $rows = fetchAll($sql);
    return $rows;
}
/**
 * 得到所有管理员
 *
 * @return void
 */
function getAllAdmin($where = null)
{
    $sql = "select * from shopping_admin {$where}";
    $rows = fetchAll($sql);
    return $rows;
}
/**
 * 注销
 *
 * @return void
 */
function logout()
{
    $_SESSION = array();
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), "", time() - 1);
    }
    if (isset($_COOKIE['adminId'])) {
        setcookie("adminId", "", time() - 1);
    }
    if (isset($_COOKIE['adminName'])) {
        setcookie("adminName", "", time() - 1);
    }
    session_destroy();
    header("location:login.php");

}
/**
 * 添加用户
 *
 * @return string
 */
function addUser(){
    $arr=$_POST;
	$arr['password']=md5($_POST['password']);
	$arr['regTime']=time();
	$uploadFile=uploadFile("../uploads/");
	
    // print_r($uploadFile);
    // exit;
	if($uploadFile&&is_array($uploadFile)){
		$arr['face']=$uploadFile[0]['name'];
	}else{
		$mes= "注册失败";
	}
	// print_r($arr);exit;
	if(insert("shopping", $arr)){
		$mes="注册成功!";
	}else{
		$filename="../uploads/".$uploadFile[0]['name'];
		if(file_exists($filename)){
			unlink($filename);
		}
		$mes="注册失败!";
	}
	return $mes;
}
function delUser($id)
{
    $sql="SELECT face from shopping where id=".$id;
    $row=fetchOne($sql);
    $face=$row['face'];
    if(file_exists("../uploads/".$face)){
        unlink("../uploads/".$face);
    }
    if (delete("shopping", "id={$id}") != -1) {
        $mes = "delete success";

    } else {
        $mes = "delete failed";
    }
    return $mes;
}
/**
 * 更新用户
 *
 * @param [int] $id
 * @return string
 */
function editUser($id)
{
    $arr = $_POST;
    // $sql=""
    // $arr['password'] = md5($_POST['password']);
    if (update("shopping", $arr, "id={$id}") != -1) {
        $mes = "update success";
    } else {
        $mes = "update failed";
    }
    return $mes;

}