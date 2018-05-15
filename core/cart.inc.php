<?php
function addCart($id){
    $arr=$_POST;
    $arr['pid']=$id;
    if(insert('shopping_cart',$arr)){
        $mes="加入购物车成功";
    }else{
        $mes="加入购物车失败，请重新添加";
    }
    return $mes;
}
function cancelCart($id){
    if(delete("shopping_cart","id={$id}")!=-1){
        $mes="取消成功";
    }else{
        $mes="取消失败";
    }
    return $mes;
}
?>