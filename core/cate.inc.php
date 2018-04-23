<?php
require_once '../include.php';
/**
 * add category
 *
 * @return void
 */
function addCate()
{
    $arr = $_POST;
    if (insert("shopping_cate", $arr)) {
        $mes = "add category success";
    } else {
        $mes = "add category failed";
    }
    return $mes;
}
/**
 * get category by page
 *
 * @param integer $pageSize
 * @return void
 */
function getCateByPage($page,$pageSize = 3)
{
    $sql = "select * from shopping_cate";
    global $totalRowsCate;
    $totalRowsCate = getResultNum($sql);
    global $totalPageCate;
    // echo $totalRows;
    // $pageSize = 3;
    // ceil() 函数向上舍入为最接近的整数
    $totalPageCate = ceil($totalRowsCate / $pageSize);
    
    if ($page < 1 || $page == null || !is_numeric($page)) {
        $page = 1;
    }
    if ($page > $totalPageCate) {
        $page = $totalPageCate;
    }
    $offset = ($page - 1) * $pageSize;
    $sql = "SELECT id,cName FROM shopping_cate ORDER BY id LIMIT {$offset},{$pageSize}";
    // $rows = getAllAdmin();
    $rowsCate = &fetchAll($sql);
    return $rowsCate;
}
/**
 * edit category
 *
 * @param [type] $id
 * @return string
 */
function editCate($id){
    $arr = $_POST;
    if (update("shopping_cate", $arr, "id={$id}")!= -1) {
        $mes="update success";
    } else {
        $mes = "update failed";
    }
    return $mes;
}
/**
 * delete category
 *
 * @param [int] $id
 * @return string
 */
function delCate($id){
    if (delete("shopping_cate", "id={$id}") != -1) {
        $mes = "delete success";

    } else {
        $mes = "delete failed";
    }
    return $mes;
}
/**
 * 得到所有分类
 *
 * @return array
 */
function getAllCate(){
    $sql='SELECT id,cName FROM shopping_cate';
    $rowsCate1=&fetchAll($sql);
    return $rowsCate1;
}