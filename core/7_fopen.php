<?php
$filename = './1.txt';
# 打开文件
$result = fopen($filename,'r');
# 关闭文件
fclose($result);
var_dump($result);