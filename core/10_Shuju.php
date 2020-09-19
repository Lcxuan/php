<?php
//1.初始化curl(打开浏览器)
$ci = curl_init();
//2.设置curl选项(输入地址)
curl_setopt($ci,CURLOPT_URL,'http://www.baidu.com');
//不显示数据
curl_setopt($ci,CURLOPT_RETURNTRANSFER,1);
//3.执行curl(回车)
$html = curl_exec($ci);
file_put_contents('text.txt',$html);