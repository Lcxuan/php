<?php
//print_r($_FILES);

$file = 'myfile';
$path = './';
$maxsize = 1024*1024*5;
$type = ['image/jpeg','image/png','image/gif','image/jpg','image/pjpeg'];
upload($file,$path,$maxsize,$type);
# 封装文件上传
function upload($file,$path,$maxsize,$type){
    # 判断文件上传中的错误
    switch ($_FILES[$file]['error']){
        case 1:
            exit('文件超过php.ini限制');
            break;
        case 2:
            exit('文件超过html限制');
            break;
        case 3:
            exit('文件上传不完整');
            break;
        case 4:
            exit('没有选择文件');
            break;
        case 6:
            exit('服务器内部错误');
            break;
        case 7:
            exit('服务内部错误');
            break;
    }

    # in_array 判断数组中是否有要搜索的值
    # 判断用户上传的文件类型是否是$type里面的类型
    if (in_array($_FILES[$file]['type'],$type)){
        if ($_FILES[$file]['size'] < $maxsize){
            $tmp = $_FILES[$file]['tmp_name'];
            $filename = getRandName();
            //获取文件扩展名
            # pathinfo 以数组的形式返回文件路径的信息
            $ext = pathinfo($_FILES[$file]['name'],PATHINFO_EXTENSION);

            # 组合
            $basename = $filename.'.'.$ext;

            $dest = "$path.$basename";

            //将临时文件中的文件移动到目标文件
            if (move_uploaded_file($tmp,$dest)){
                echo "上传成功";
            }else{
                echo "上传失败";
            }
        }else{
            echo "<script>alert('上传的文件太大，请重试');location.href='4_WenJianSC.php'</script>";
        }
    }else{
        echo "<script>alert('上传的文件类型有误，请重试');location.href='4_WenJianSC.php'</script>";
    }
}


//随机文件的格式
function getRandName(){
    $string = '';
    for ($i=0;$i<6;$i++){
        switch (mt_rand(0,2)){
            case 0:
                $string .= chr(mt_rand(97,122));
                break;
            case 1:
                $string .= chr(mt_rand(65,90));
                break;
            case 2:
                $string .= mt_rand(0,9);
                break;
        }
    }
    return $string;
}
