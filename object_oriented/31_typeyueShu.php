<?php
//类型约束
function abc($a,array $b,Student $c,inter2 $d){
    //第一个参数可以是任何值
    //第二个参数只能是数组
    //第三个参数必须是Student类的对象
    //第四个参数必须是interface接口的对象
}
//创建inter2接口
interface inter2{}
//创建Student类
class Student implements inter2 {}
$obj1 = new  Student();
abc('123',[1,2,3,4],$obj1,$obj1);