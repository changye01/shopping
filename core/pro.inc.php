<?php
/**
 * 添加商品
 * @return string
 */
function addPro()
{
    $arr = $_POST;
    $arr['pubTime'] = time();
    $path = "./uploads";
    $uploadFiles = uploadFile($path);
    if (is_array($uploadFiles) && $uploadFiles) {
        foreach ($uploadFiles as $key => $uploadFile) {
            thumb($path . "/" . $uploadFile['name'], "../image_50/" . $uploadFile['name'], 50, 50);
            thumb($path . "/" . $uploadFile['name'], "../image_220/" . $uploadFile['name'], 220, 220);
            thumb($path . "/" . $uploadFile['name'], "../image_350/" . $uploadFile['name'], 350, 350);
            thumb($path . "/" . $uploadFile['name'], "../image_800/" . $uploadFile['name'], 800, 800);
        }
    }
    $pid = insert("shopping_pro", $arr);
    // $pid=getInsertId();
    if ($pid) {
        foreach ($uploadFiles as $uploadFile) {
            $arr1['pid'] = $pid;
            $arr1['albumPath'] = $uploadFile['name'];
            addAlbum($arr1);

        }
        $mes = "添加成功";
    } else {
        foreach ($uploadFiles as $uploadFile) {
            if (file_exists("../image_800/" . $uploadFile['name'])) {
                unlink("../image_800/" . $uploadFile['name']);
            }
            if (file_exists("../image_50/" . $uploadFile['name'])) {
                unlink("../image_50/" . $uploadFile['name']);
            }
            if (file_exists("../image_220/" . $uploadFile['name'])) {
                unlink("../image_220/" . $uploadFile['name']);
            }
            if (file_exists("../image_350/" . $uploadFile['name'])) {
                unlink("../image_350/" . $uploadFile['name']);
            }
        }
        $mes = "添加失败";

    }
    return $mes;
}
/**
 *编辑商品
 * @param int $id
 * @return string
 */
function editPro($id)
{
    $arr = $_POST;
    $arr['pubTime'] = time();
    $path = "./uploads";
    $uploadFiles = uploadFile($path);
    // var_dump($uploadFiles);
    // print_r("aaaa");exit;
    if (is_array($uploadFiles) && $uploadFiles) {
        foreach ($uploadFiles as $key => $uploadFile) {
            thumb($path . "/" . $uploadFile['name'], "../image_50/" . $uploadFile['name'], 50, 50);
            thumb($path . "/" . $uploadFile['name'], "../image_220/" . $uploadFile['name'], 220, 220);
            thumb($path . "/" . $uploadFile['name'], "../image_350/" . $uploadFile['name'], 350, 350);
            thumb($path . "/" . $uploadFile['name'], "../image_800/" . $uploadFile['name'], 800, 800);
        }
    }
    $where = "id={$id}";
    $res = update("shopping_pro", $arr, $where);
    // var_dump($res);
    // $pid=getInsertId();
    $pid = $id;
    if ($res != -1) {
        if ($uploadFiles && is_array($uploadFiles)) {
            foreach ($uploadFiles as $uploadFile) {
                $arr1['pid'] = $pid;
                $arr1['albumPath'] = $uploadFile['name'];
                addAlbum($arr1);

            }
        }
        $mes = "update success";
    } else {
        if ($uploadFiles && is_array($uploadFiles)) {
            foreach ($uploadFiles as $uploadFile) {
                if (file_exists("../image_800/" . $uploadFile['name'])) {
                    unlink("../image_800/" . $uploadFile['name']);
                }
                if (file_exists("../image_50/" . $uploadFile['name'])) {
                    unlink("../image_50/" . $uploadFile['name']);
                }
                if (file_exists("../image_220/" . $uploadFile['name'])) {
                    unlink("../image_220/" . $uploadFile['name']);
                }
                if (file_exists("../image_350/" . $uploadFile['name'])) {
                    unlink("../image_350/" . $uploadFile['name']);
                }
            }
        }
        $mes = "update failed";

    }
    return $mes;
}

/**
 * 删除商品信息
 *
 * @param [type] $id
 * @return void
 */
function delPro($id)
{
    $where = "id=$id";
    $res = delete("shopping_pro", $where);
    $rowsImg = getAllImgByProId($id);
    if ($rowsImg != -1 && is_array($rowsImg)) {
        foreach ($rowsImg as $proImg) {
            if (file_exists("uploads/" . $proImg['albumPath'])) {
                unlink("uploads/" . $proImg['albumPath']);
            }
            if (file_exists("../image_50/" . $proImg['albumPath'])) {
                unlink("../image_50/" . $proImg['albumPath']);
            }
            if (file_exists("../image_220/" . $proImg['albumPath'])) {
                unlink("../image_220/" . $proImg['albumPath']);
            }
            if (file_exists("../image_350/" . $proImg['albumPath'])) {
                unlink("../image_350/" . $proImg['albumPath']);
            }
            if (file_exists("../image_800/" . $proImg['albumPath'])) {
                unlink("../image_800/" . $proImg['albumPath']);
            }

        }
    }
    $where1 = "pid={$id}";
    $res1 = delete("shopping_album", $where1);
    if ($res != -1 && $res1 != -1) {
        $mes = "delete success";
    } else {
        $mes = "delete failed";
    }
    return $mes;
}

/**
 * 得到商品的所有信息
 * @return array
 */
function getAllProByAdmin()
{
    $sql = "select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName from shopping_pro as p join shopping_cate c on p.cId=c.id";
    $rows = fetchAll($sql);
    return $rows;
}

/**
 *根据商品id得到商品图片
 * @param int $id
 * @return array
 */
function getAllImgByProId($id)
{
    $sql = "select a.albumPath from shopping_album a where pid={$id}";
    $rowsImg = &fetchAll($sql);
    return $rowsImg;
}

/**
 * 根据id得到商品的详细信息
 * @param int $id
 * @return array
 */
function getProById($id)
{
    $sql = "SELECT p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from shopping_pro as p join shopping_cate c on p.cId=c.id where p.id={$id}";
    $row = fetchOne($sql);
    return $row;
}
function getProByOrderPid($id)
{
    $sql = "SELECT p.pName from shopping_pro as p join shopping_order o on p.id=o.pid where p.id={$id}";
    $proName = fetchOne($sql);
    return $proName;
}
/**
 * 检查分类下是否有产品
 * @param int $cid
 * @return array
 */
function checkProExist($cid)
{
    $sql = "select * from shopping_pro where cId={$cid}";
    $rows = fetchAll($sql);
    return $rows;
}

/**
 * 得到所有商品
 * @return array
 */
function getAllPros()
{
    $sql = "select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from shopping_pro as p join shopping_cate c on p.cId=c.id ";
    $rowsPro = &fetchAll($sql);
    return $rowsPro;
}

/**
 *根据cid得到4条产品
 * @param int $cid
 * @return Array
 */
function getProsByCid($cid)
{
    $sql = "SELECT p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from shopping_pro as p join shopping_cate c on p.cId=c.id where p.cId={$cid} limit 4";
    $rows = fetchAll($sql);
    return $rows;
}

/**
 * 得到下4条产品
 * @param int $cid
 * @return array
 */
function getSmallProsByCid($cid)
{
    $sql = "select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from shopping_pro as p join shopping_cate c on p.cId=c.id where p.cId={$cid} limit 4,4";
    $rows = fetchAll($sql);
    return $rows;
}

/**
 *得到商品ID和商品名称
 * @return array
 */
function getProInfo()
{
    $sql = "select id,pName from shopping_pro order by id asc";
    $rows = fetchAll($sql);
    return $rows;
}
function getProByPage($page, $pageSize = 3)
{
    $sql = "select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from shopping_pro as p join shopping_cate c on p.cId=c.id ";
    global $totalRowsPro;
    $totalRowsPro = getResultNum($sql);
    global $totalPagePro;
    // echo $totalRows;
    // $pageSize = 3;
    // ceil() 函数向上舍入为最接近的整数
    $totalPagePro = ceil($totalRowsPro / $pageSize);

    if ($page < 1 || $page == null || !is_numeric($page)) {
        $page = 1;
    }
    if ($page > $totalPagePro) {
        $page = $totalPagePro;
    }
    $offset = ($page - 1) * $pageSize;
    $sql = "SELECT p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId FROM shopping_pro AS p JOIN shopping_cate c ON p.cId=c.id order by p.id LIMIT {$offset},{$pageSize}";
    // $rows = getAllAdmin();
    $rowsPro = &fetchAll($sql);
    return $rowsPro;
}
