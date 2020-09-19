<?php
$filename = './1.txt';
$handle = fopen($filename,'r+');
// 写入数据
$return = fwrite($handle,'123');
var_dump($return);
