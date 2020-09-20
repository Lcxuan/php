<?php
//定义最终的教师类
final class Teacher{
    private $name = 'asd';
    private $school = '北京大学';
    public function __construct(){
        echo "{$this->name}老师毕业于{$this->school}";
    }

}
