



<?php

/**
 * connect
 *
 * @return string
 */

function connect()
{
    $link = mysqli_connect('localhost', 'root', '0000', 'shopping') or die('database connect failed' . mysqli_error);
    // mysqli_select_db('db_dbname') or die('制定数据库连接失败');
    return $link;
}

/**
 * insert
 *
 * @param [string] $table
 * @param [array] $array
 * @return number
 */
function insert($table, $array)
{
    $conn = connect();
    $keys = "" . join(",", array_keys($array));

    $vals = "'" . join("','", array_values($array)) . "'";
//INSERT INTO shop_admin (username,password,email)VALUES (xxx,root,512309453@qq.com);
    $sql = "INSERT INTO {$table} ($keys) VALUES ({$vals})";
//    $sql="insert {$table}{$keys} values {$vals}";
    mysqli_query($conn, $sql);
    return mysqli_insert_id($conn);
}

// update shopping ser username ='changye' where id=1
/**
 * update
 *
 * @param [string] $table
 * @param [array] $array
 * @param string $where
 * @return number
 */

function update($table, $array, $where = null)
{
    // $link = mysqli_connect('localhost', 'root', '0000','shopping') or die('database connect failed' . mysqli_error);
    $str = null;
    foreach ($array as $key => $val) {
        if ($str == null) {
            $sep = '';
        } else {
            $sep = ',';
        }
        $str .= $sep . $key . "='" . $val . "'";
    }
    $sql = "update {$table} set {$str} " . ($where == null ? null : "where " . $where);
    $result = mysqli_query(connect(), $sql);

    if ($result) {
        return mysqli_affected_rows(connect());
    } else {
        return false;
    }
}

/**
 * delete
 *
 * @param [string] $table
 *
 * @param [string] $where
 * @return number
 */
function delete($table, $where = null)
{
    // $link = mysqli_connect('localhost', 'root', '0000','shopping') or die('database connect failed' . mysqli_error);
    $where = $where == null ? null : 'where ' . $where;
    $sql = "delete from $table {$where}";
    mysqli_query(connect(), $sql);
    return mysqli_affected_rows(connect());
}

/**
 * get one
 *
 * @param [string] $sql
 * @param [string] $result_type
 * @return multitype
 */
function fetchOne($sql, $result_type = MYSQLI_ASSOC)
{
    // $result=connect()->query($sql);
    // if($result->num_rows>0){
    //     while($row=$result->fetch_assoc()){
    //         return $row;
    //     }
    // }
    $result = mysqli_query(connect(), $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    } else {
        echo null;
    }
}

/**
 * get all
 *
 * @param [string] $sql
 * @param [string] $result_type
 * @return multitype
 */
function &fetchAll($sql, $result_type = MYSQLI_ASSOC)
{
    // $link = mysqli_connect('localhost', 'root', '0000','shopping') or die('database connect failed' . mysqli_error);
    $result = mysqli_query(connect(), $sql);
    // @。当将其放置在一个 PHP 表达式之前，该表达式可能产生的任何错误信息都被忽略掉。
    while (@$row = mysqli_fetch_array($result, $result_type)) {
        $rows[] = $row;
    }
    return $rows;
}

/**
 * get 记录条数
 *
 * @param [string] $sql
 * @return num
 */
function getResultNum($sql)
{
    // $link = mysqli_connect('localhost', 'root', '0000','shopping') or die('database connect failed' . mysqli_error);
    $result = mysqli_query(connect(), $sql);
    return mysqli_num_rows($result);
}
/**
 * 得到上一步的插入id
 *
 * @return int
 */
function getInsertId(){
	return mysqli_insert_id(connect());
}
?>
