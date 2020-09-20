<?php
class Student{
    //在类中创建当前类的对象
    static function getPlane(){
        $className  =__CLASS__;
        return new $className;
    }
    function showInfo(){
        echo "当前行号：".__LINE__;
        echo "<br>当前文件".__FILE__;
        echo "<br>当前目录：".__DIR__;
        echo "<br>当前函数名：".__FUNCTION__;
        echo "<br>当前类名：".__CLASS__;
        echo "<br>当前方法：".__METHOD__;
    }
}
//实例化对象
$obj = Student::getPlane();
$obj->showInfo();