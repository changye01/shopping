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
function getOrderByPage($page, $pageSize = 3)
{
    $sql = "select * from shopping_order";
    global $totalRowsOrder;
    $totalRowsOrder = getResultNum($sql);
    global $totalPageOrder;
    // echo $totalRows;
    // $pageSize = 3;
    // ceil() 函数向上舍入为最接近的整数
    $totalPageOrder = ceil($totalRowsOrder / $pageSize);

    if ($page < 1 || $page == null || !is_numeric($page)) {
        $page = 1;
    }
    if ($page > $totalPageOrder) {
        $page = $totalPageOrder;
    }
    $offset = ($page - 1) * $pageSize;
    $sql = "SELECT * FROM shopping_order ORDER BY id LIMIT {$offset},{$pageSize}";
    // $rows = getAllAdmin();
    $rowsOrder = &fetchAll($sql);
    return $rowsOrder;
}