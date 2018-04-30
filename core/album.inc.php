<?php
function addAlbum($arr){
    insert("shopping_album",$arr);
}
/**
 * 根据商品id得到商品图片路径
 *只得到一条
 * 
 * @param [int] $id
 * @return array
 */
function getProImgById($id){
$sql="SELECT albumPath from shopping_album where pid={$id} limit 1 ";
$row=fetchOne($sql);
return $row;
}
/**
 * 根据商品id得到所有的图片
 *
 * @param [int] $id
 * @return array
 */
function getProImgsById($id){
$sql="SELECT albumPath from shopping_album where pid={$id}";
$rows=fetchAll($sql);
return $rows;
}