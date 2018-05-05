<?php
require_once '../include.php';
$act = $_REQUEST['act'];
@$id = $_REQUEST['id'];

if ($act == "logout") {
    logout();
} elseif ($act == "addAdmin") {
    $mes = addAdmin();
    alertMes($mes, 'index.php?addManagers');
} elseif ($act == "editAdmin") {
    $mes = editAdmin($id);
    alertMes($mes, 'index.php?listManagers');
} elseif ($act == "delAdmin") {
    $mes = delAdmin($id);
    alertMes($mes, 'index.php?listManagers');
}elseif($act=="addCate"){
    $mes=addCate();
    alertMes($mes,'index.php?addCate1');
}elseif($act=="editCate"){
    $mes=editCate($id);
    alertMes($mes,'index.php?listCates');
}elseif($act=="delCate"){
    $mes=delCate($id);
    alertMes($mes,'index.php?listCates');
}elseif($act=="addPro"){
    $mes=addPro();
    alertMes($mes,"index.php?addPros");
}elseif($act=="editPro"){
    // $where=""
    $mes=editPro($id);
    alertMes($mes,"index.php?listPros");
}elseif($act=="delPro"){
    $mes=delPro($id);
    alertMes($mes,"index.php?listPros");
}elseif($act=="addUser"){
    $mes=addUser();
    alertMes($mes,"index.php?addUsers");
}elseif($act=="reg"){
    $mes=reg();
    alertMes($mes,"../index.php");
}elseif($act=="login"){
    $mes=login();
    alertMes($mes,"../index.php");
}elseif($act=="delUser"){
    $mes=delUser($id);
    alertMes($mes,"index.php?listUsers");
}elseif($act=="editUser"){
    $mes=editUser($id);
    alertMes($mes,"index.php?listUsers");
}elseif($act=="userOut"){
    userOut();
}elseif($act=="addOrder"){
    $mes=addOrder($id);
    // alertMes($mes,"../proDetails.php?id={$id}");
    alertMes($mes,"../proDetails.php?id={$id}");
}elseif($act=="delOrder"){
    $mes=delOrder($id);
    alertMes($mes,"index.php?listOrders");
}elseif($act=="doneOrder"){
    $mes=doneOrder($id);
    alertMes($mes,"index.php?listOrders");
}
