<?php
// @$id=$_REQUEST['id'];
/**
 * 添加订单
 *
 * @param [int] $id
 * @return string
 */
function addOrder($id){
    $pid=$id;
    $arr=$_POST;
    $arr['pid']=$pid;
    if(insert("shopping_order",$arr)){
        $mes="提交成功";
    }else{
        $mes="提交失败";
    }
    return $mes;
}