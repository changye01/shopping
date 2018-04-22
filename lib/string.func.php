<?php
function buildRandomString($type = 1, $length = 4)
{

    if ($type == 1) {
        $chars = join("", range(0, 9));
    } elseif ($type == 2) {
        $chars = join('', array_merge(range('a', 'z'), range('A', 'Z')));
    } elseif ($type == 3) {
        $chars = join('', array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9)));
    }
    if ($length > strlen($chars)) {
        exit('字符串长度不够');
    }
    //随机打乱所有字符
    $chars = str_shuffle($chars);
    return substr($chars, 0, $length);
}
/**
 * 生成唯一绝对绝对唯一字符串
 *
 * @return string
 */
function getUniName()
{
    return md5(uniqid(microtime(true), true));
}
/**
 * 得到文件扩展名
 *
 * @param [type] $filename
 * @return string
 */
function getExt($filename)
{
    $tep_name = explode('.', $filename);
    return strtolower(end($tep_name));

}
