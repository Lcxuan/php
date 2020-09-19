<?php
//下载照片
//1.通过协议头告诉浏览器，将要发送给你的数据，而应该作为一个应用程序数据
header('Content-type:application/octet-stream');
//2.通过协议头告诉浏览器，将要发送给你的数据，作为附件下载
header('Content-disposition:attachment;filename=m01.jpg');
//3.读取所要发送的文件内容，并发送给客户端
$content = file_get_contents('face/m01.jpg');
echo $content;