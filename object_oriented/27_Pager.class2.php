<?php
//定义最终的分页类
final class Pager{
    private $curPage;   //当前页
    private $totalPage; //最终页
    //构造函数，传进来当前页和最终页
    public function __construct($curPage,$totalPage){
        $this->curPage = $curPage;
        $this->totalPage = $totalPage;
    }

    public function fenye(){
       # 存储页码字符串
       $pageNumString = "";
       # 根据当前页，决定起始页与终止页
       if ($this->curPage<=5){
           $begin = 1;
           $end = $this->totalPage>=10?10:$this->totalPage;
       }else{
           $end = $this->curPage + 5>$this->totalPage?$this->totalPage:$this->curPage+5;
           $begin = $end - 9<=1?1:$end-9;
       }
# 根据起始页与终止页将当前页面的页码显示出来
       for ($i=$begin;$i<=$end;$i++){
           if ($this->curPage == $i){
               $pageNumString = "<a href='?curPage=$i' style='color: red'>$i</a>&nbsp;&nbsp;";
               echo $pageNumString;
           }else{
               $pageNumString = "<a href='?curPage=$i'>$i</a>&nbsp;&nbsp;";
               echo $pageNumString;
           }
       }
   }
}