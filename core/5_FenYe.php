<?php
# 定义最大的页码数
$totalPage = 23;
# 当前页码数，默认当前页为1
$curPage = isset($_GET['curPage'])?$_GET['curPage']:1;
# 存储页码字符串
$pageNumString = "";
# 根据当前页，决定起始页与终止页
if ($curPage<=5){
    $begin = 1;
    $end = $totalPage>=10?10:$totalPage;
}else{
    $end = $curPage + 5>$totalPage?$totalPage:$curPage+5;
    $begin = $end - 9<=1?1:$end-9;
}
# 根据起始页与终止页将当前页面的页码显示出来
for ($i=$begin;$i<=$end;$i++){
    if ($curPage == $i){
        $pageNumString .= "<a href='5_FenYe.php?curPage=$i' style='color: red'>$i</a>&nbsp;&nbsp;";
    }else{
        $pageNumString .= "<a href='5_FenYe.php?curPage=$i'>$i</a>&nbsp;&nbsp;";
    }
}
echo $pageNumString;