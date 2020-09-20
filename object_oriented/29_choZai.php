<?php
//魔术方法——重载
//魔术方法__set(),当给不可访问的属性赋值时，自动调用
//class Student{
//    private $name;
//    //当给不可访问的属性赋值时，__set()自动调用
//    function __set($name, $value){
//        // TODO: Implement __set() method.
//        $this->$name = $value;
//    }
//}
//$obj = new Student();
//$obj ->name = "ert";

//魔术方法__get(),当读取不可访问的属性时，会自动调用
//class Student{
//    private $name = "lcx";
//    //当读取不可访问的属性时，会自动调用
//    function __get($name){
//        // TODO: Implement __get() method.
//        return $this->$name;
//    }
//}
//$obj = new Student();
//echo "我的名字叫：{$obj -> name}";

//魔术方法__isset(),当对不可访问属性调用isset()或empty()时，isset()会被调用
//class Student{
//    private $name = "lcx";
//    function __isset($name){
//        // TODO: Implement __isset() method.
//        echo "不能对不可访问的属性调用isset或者empty";
//    }
//}
//$obj = new Student();
//isset($obj->name);

//魔术方法：__unset(),当对不可访问属性调用unset(),__unset()或自动调用
//class Student{
//    private $name = "lcx";
//    function __unset($name){
//        // TODO: Implement __unset() method.
//        echo "不能对不可访问的属性进行unset";
//    }
//}
//$obj = new Student();
//unset($obj->name);

//魔术方法：__call,在对象中调用一个不可访问方法时，__call()会被调用。
//class Student{
//    function __call($name, $arguments){
//        // TODO: Implement __call() method.
//        echo "方法{$name}不存在或者不可访问";
//    }
//}
//$obj = new Student();
//$obj ->showInfo(10010,"lcx",24);

//魔法方法：__callStatic(),用静态方式中调用一个不可访问方法时，__callStatic()会自动调用
class Student{
    public static function __callStatic($name, $arguments){
        // TODO: Implement __callStatic() method.
        echo "方法{$name}不存在或者不可访问";
    }
}
//使用静态方式，访问一个静态方法
Student::showInfo();