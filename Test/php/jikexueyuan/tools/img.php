<?php 

//	创建图片
$img = imagecreate(400,300);
//	设置背景色
imagecolorallocate($img, 214,0,0);
//	绘制图形
imageellipse($img, 100,100,50,50,imagecolorallocate($img,255,255,255));
//	绘制水印
imagestring($img,2,5,5,'shuiyin',imagecolorallocate($img,0,255,255));
//	设置头信息	MIME Type
header('Content-type: image/png');
//	打印图像
imagepng($img);