<?php
# 读取文件
//打开文件
$filename = 'data.txt';
$handle = fopen($filename,'r');

//file_get_contents()读取文件内容
$contens = file_get_contents($filename);
echo $contens;

//readfile()读取文件内容
//readfile($filename);

//file()读取文件内容
//$return = file($filename);
//print_r($return);

//fread()读取文件内容
//echo fread($handle,1000);

//fgets()读取文件内容
//echo fgets($handle,10000);

//fgetc()读取文件内容
//while ($char = fgetc($handle)){
//    echo $char;
//}