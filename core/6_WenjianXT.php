<?php
/*
*  文件系统管理
*/
# file_exists
//$file = './data.txt';
//$return = file_exists($file);
//var_dump($return);

# filemtime
//$file = './1.txt';
//$time = filemtime($file);
//echo date('Y-m-d H:i:s',$time);

# filesize
//$file = './1.txt';
//$size = filesize($file);
//echo $size;

# basename
//$file = './1.txt';
//$name = basename($file);
//echo $name;

# realpath
$file = './1.txt';
$result = realpath($file);
echo $result;