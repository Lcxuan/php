<?php
# 文件锁
$filename = 'data.txt';
$handle = fopen($filename);
//锁文件
flock($handle,LOCK_EX);
sleep(10);