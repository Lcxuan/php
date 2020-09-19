<?php
# 文件指针
$filename = 'data.txt';
$handle = fopen($filename,'r');
//移动文件指针
fseek($handle,-2,SEEK_END);

echo fgetc($handle);