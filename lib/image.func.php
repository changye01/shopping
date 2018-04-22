<?php


require_once 'string.func.php';
/**
 *create verifyImage
 * 通过gd库做验证码
 * 创建画布
 * @param integer $type
 * @param integer $length
 * @return void
 */
function verifyImage($type = 1, $length = 4)
{
    session_start();
    $width = 80;
    $height = 30;
    $image = imagecreatetruecolor($width, $height);
    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);
    //用填充矩形填充画布
    imagefilledrectangle($image, 1, 1, $width - 2, $height - 2, $white);
    $chars = buildRandomString($type, $length);
    $_SESSION['verify'] = $chars;

    $fontfiles = array('SIMYOU.TTF', 'STFANGSO.TTF', 'STKAITI.TTF', 'STSONG.TTF', 'STXIHEI.TTF');
    for ($i = 0; $i < $length; $i++) {
        $size = mt_rand(16, 20);
        $angle = mt_rand(-15, 15);
        $x = 5 + $i * $size;
        $y = mt_rand(20, 26);
        $color = imagecolorallocate($image, mt_rand(50, 70), mt_rand(70, 200), mt_rand(70, 288));
        $fontfile = "../fonts/" . $fontfiles[mt_rand(0, count($fontfiles) - 1)];
        // $fontfile = "../fonts/" . $fontfiles [mt_rand ( 0, count ( $fontfiles ) - 1 )];
        $text = substr($chars, $i, 1);
        imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
    }

    if ($pixel) {
        for ($i = 0; $i < $pixel; $i++) {
            // $color=imagecolorallocate($image,mt_rand(50,70),mt_rand(70,200),mt_rand(70,288));
            imagesetpixel($image, mt_rand(0, $width - 1), mt_rand(0, $height - 1), $black);
        }
    }
    if ($line) {
        for ($i = 0; $i < $line; $i++) {
            $color = imagecolorallocate($image, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
            imageline($image, mt_rand(0, $width - 1), mt_rand(0, $height - 1), mt_rand(0, $width - 1), mt_rand(0, $height - 1), $color);
        }
    }
    // ob_clean这个函数的作用就是用来丢弃输出缓冲区中的内容，如果你的网站有许多生成的图片类文件，那么想要访问正确，就要经常清除缓冲区。
    ob_clean();
    header('content-type:image/gif');
    imagegif($image);
    imagedestroy($image);
    // echo  $_SESSION['verify'];
}
// echo  $_SESSION['verify'];
// verifyImage(1,3,4,4);

/**
 * 生成图片缩略图
 *
 * @param [string] $filename
 * @param [string] $destination
 * @param [int] $dst_w
 * @param [int] $dst_h
 * @param boolean $isReservedSource
 * @param float $scale
 * @return string #保存文件名
 */
function thumb($filename, $destination = null, $dst_w = null, $dst_h = null, $isReservedSource = true, $scale = 0.5)
{
    list($src_w, $src_h, $imagetype) = getimagesize($filename);

    if (is_null($dst_w) || is_null($dst_h)) {
        $dst_w = ceil($src_w * $scale);
        $dst_h = ceil($src_h * $scale);

    }
    $mime = image_type_to_mime_type($imagetype);

    $createFun = str_replace("/", "createfrom", $mime);
    $outFun = str_replace("/", null, $mime);
    // $createFun==imagecreatefromjpeg()
    // $outFuc==imagejpeg();
    $src_image = $createFun($filename);
    $dst_image = imagecreatetruecolor($dst_w, $dst_h);
    imagecopyresampled($dst_image, $src_image, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
    if ($destination && !file_exists(dirname($destination))) {
        mkdir(dirname($destination), 0777, true);
    }

    $dstFileName = ($destination == null) ? getUniName() . "." . getExt($filename) : $destination;
    $outFun($dst_image, $dstFileName);
    imagedestroy($src_image);
    imagedestroy($dst_image);

    if (!$isReservedSource) {
        // unlink delete the file
        unlink($filename);
    }
    return $dstFileName;
}



