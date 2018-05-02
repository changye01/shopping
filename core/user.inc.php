<?php 
/**
 * 用户注册
 *
 * @return string
 */
function reg(){
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
/**
 * 用户登录
 *
 * @return string
 */
function login(){
    $username=$_POST['username'];
    // sql防注入
    // 不使用addslashes就可以用' or 1=1 #登陆
	//addslashes():使用反斜线引用特殊字符
    $username=addslashes($username);
    
    // $username=mysqli_escape_string($username);
    // 安全用于mysql_query
	$password=md5($_POST['password']);
	$sql="select * from shopping where username='{$username}' and password='{$password}'";
	//$resNum=getResultNum($sql);
	$row=fetchOne($sql);
	//echo $resNum;
	if($row){
		$_SESSION['loginFlag']=$row['id'];
		$_SESSION['username']=$row['username'];
		$mes="登陆成功";
	}else{
		$mes="登陆失败！";
	}
	return $mes;
}
/**
 * 用户退出
 *
 * @return void
 */
function userOut(){
	$_SESSION=array();
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),"",time()-1);
	}

	session_destroy();
	header("location:../index.php");
}
// function checkLoginedUser(){
//     if (@$_SESSION['adminId'] == "") {
//         alertMes("请先登录", "login.php");
//     }
// }
/**
 * 根据页面获取用户
 *
 * @param [int] $page
 * @param integer $pageSize
 * @return array
 */
function getUserByPage($page, $pageSize = 3)
{
    $sql = "select * from shopping";
    global $totalRowsUser;
    $totalRowsUser = getResultNum($sql);
    global $totalPageUser;
    // echo $totalRows;
    // $pageSize = 3;
    // ceil() 函数向上舍入为最接近的整数
    $totalPageUser = ceil($totalRowsUser / $pageSize);

    if ($page < 1 || $page == null || !is_numeric($page)) {
        $page = 1;
    }
    if ($page > $totalPageUser) {
        $page = $totalPageUser;
    }
    $offset = ($page - 1) * $pageSize;
    $sql = "SELECT id,username,email,activeFlag FROM shopping ORDER BY id LIMIT {$offset},{$pageSize}";
    // $rows = getAllAdmin();
    $rowsUser = &fetchAll($sql);
    return $rowsUser;
}

