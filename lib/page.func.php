<?php
/**
 * test code
 */
// require_once "../include.php";
// $sql = "select * from shopping_admin";
// $totalRows = getResultNum($sql);
// // echo $totalRows;
// $pageSize = 3;
// // ceil() 函数向上舍入为最接近的整数
// $totalPage = ceil($totalRows / $pageSize);
// @$page = $_REQUEST['page'] ? (int) $_REQUEST['page'] : 1;
// if ($page < 1 || $page == null || !is_numeric($page)) {
//     $page = 1;
// }
// if ($page > $totalPage) {
//     $page = $totalPage;
// }
// $offset = ($page - 1) * $pageSize;
// // limit子句可以用于强制select语句返回制定的记录数，limit接受一个或两个数字的参数，如果给定两个参数第一个指定返回记录行的偏移量，第二个指定返回记录行的最大数目
// $sql = "select * from shopping_admin limit {$offset},{$pageSize}";
// $rows = fectchAll($sql);
// var_dump($rows);
// foreach ($rows as $row) {
//     echo "id:" . $row['id'], "<br>";
//     echo "name:" . $row['username'], "<hr/>";
// }
// echo showPage($page, $totalPage);
// echo "<hr/>";
// echo showPage($page,$totalPage,"cid=5");
/**
 * show pages
 *
 * @param [type] $page
 * @param [type] $totalPage
 * @param [type] $where
 * @param string $sep
 * @return void
 */
function showPage($page, $totalPage, $where = null, $sep = "&nbsp;")
{
    $where = ($where == null) ? null : "&" . $where;
    $url = $_SERVER['PHP_SELF'];
    $index = ($page == 1) ? "首页" : "<a href='{$url}?page=1{$where}'>首页</a>";
    $last = ($page == $totalPage) ? "尾页" : "<a href='{$url}?page={$totalPage}{$where}'>尾页</a>";
    $prev = ($page == 1) ? "prev" : "<a href='{$url}?page=" . ($page - 1) . "{$where}'>prev</a>";
    $next = ($page == $totalPage) ? "next" : "<a href='{$url}?page=" . ($page + 1) . "{$where}'>last</a>";
    $str = "总共{$totalPage}页/当前是第{$page}页";
    for ($i = 1; $i <= $totalPage; $i++) {
        if ($page == $i) {
            @$p .= "[{$i}]";
        } else {
            @$p .= "<a href='{$url}?page={$i}{$where}'>[{$i}]</a>";
        }
    }
    // echo "<hr/>";
    $pageStr = $index . $sep . $prev . $sep . $p . $sep . $next . $sep . $last . $sep . $sep . $str;
    return $pageStr;
}
