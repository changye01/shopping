<?php
require_once './include.php';
// $sql="SELECT * from shopping where username=changye";
// $changye=fetchOne($sql);

// var_dump($changye);
// $time=time();
// // print_r($time);
// echo (date("Y-M-D",$time))."<br>";
// echo (date("y-m-d",$time));
// $arr['username']=$_POST['username'];
// 	$arr['location']=$_POST['location'];
// 	$arr['username']=$_POST['username'];
//     $arr['sex']=$_POST['sex'];
    
// 	$arr['email']=$_POST['email'];
// 	$arr['password']=md5($_POST['password']);
//     $arr['regTime']=time();
//     var_dump($arr);
// $arr=$_POST;

// var_dump($arr);
$sql="SELECT password from shopping where id=12";
$rows=fetchOne($sql);
// $password=md5($rows['password']);
$password=$rows['password'];
var_dump($password);
?>