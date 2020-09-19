<?php
# 目录操作

//遍历文件夹
//遍历指定的文件夹中所有的内容
//1.设置一个函数，输出给定的文件夹中所有的内容
//$dir = 'app';
//function getTree($dir){
//    $return = scandir($dir);
//    foreach ($return as $value){
//        $item = $dir.'/'.$value;
//        echo $item.'<br>';
//    }
//}
//getTree($dir);

//2.如果是文件夹以红色显示，如果是文件以蓝色显示
//$dir = 'app';
//function getTree($dir){
//    $return = scandir($dir);
//    foreach ($return as $value){
//        $item = $dir.'/'.$value;
//        if (is_dir($item)){
//            echo '<font color="red">'.$item.'</font>'."<br>";
//        }else{
//            echo '<font color="blue">'.$item.'</font>'."<br>";
//        }
//    }
//}
//getTree($dir);

//3.如果是文件夹，再输出子文件夹中所有内容
$dir = 'app';
function getTree($dir){
    $return = scandir($dir);
    foreach ($return as $value){
        $item = $dir.'/'.$value;
        //判断是否是文件夹
        if (is_dir($item)){
            //判断是否是.或..如果不是则继续执行
            if ($value == '.' || $value == '..'){
                continue;
            }
            echo '<font color="red">'.$item.'</font>'."<br>";
            getTree($item);
        }else{
            echo '<font color="blue">'.$item.'</font>'."<br>";
        }
    }
}
getTree($dir);

//判断目录
//$dir = 'app';
//$return = is_dir($dir);
//var_dump($return);

//扫描目录
//$dir = 'app';
//$arr = scandir($dir);
//foreach ($arr as $value){
//    echo $value."<br>";
//}

//读取目录
//$dir = 'app';
//$handle = opendir($dir);
//while ($item = readdir($handle)){
//    echo $item."<br>";
//}


# 删除目录
//$name = 'data';
//rmdir($name);

# 重命名
//$filename = '1.txt';
//rename($filename,'data1.txt');
//
//$name = 'parent';
//rename($name,'data');

# 关闭目录
//$name = 'parent';
//$return = opendir($name);
//closedir($return);
//var_dump($return);

# 打开目录
//$name = 'parent';
//$return = opendir($name);
//var_dump($return);

# 创建多级文件夹
//$name = 'parent/name';
//mkdir($name,777,true);

# 创建层级文件夹
//$name = 'parent';
//mkdir($name);