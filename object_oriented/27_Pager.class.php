<?php
//定义最终的分页类
final class Pager{
    //私有的成员属性
    private $page;  //当前页
    private $pages; //总页数
    //构造方法
    public function __construct($page,$pages){
        $this ->page = $page;
        $this ->pages = $pages;
    }
    public function fenye(){
        //计算循环的开始页和结束页
        $start = $this->page-5;
        $end = $this->page+4;
        if($this->page<6){
            $start = 1;
            $end = $end+6-$this->page;
        }
        if ($end>$this->pages){
            $start = $this->pages-10+1;
            $end = $this->pages;
        }
        if ($this->pages<=10){
            $start = 1;
            $end = $this->pages;
        }
        //循环显示所有的页码
        for ($i=$start;$i<=$end;$i++){
            //如果是当前页，不加连接
            if ($i == $this->page){
                echo "<span class='current'>$i</span>";
            }else{
                echo "<a href='?page=$i'>$i</a>";
            }
        }
    }
}