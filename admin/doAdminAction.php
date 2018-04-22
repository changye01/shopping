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
}
