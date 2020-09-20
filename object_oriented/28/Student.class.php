<?php
final class Student{
    private $name = 'asd';
    private $edu = '本科';
    function __construct(){
        echo "{$this->name}的学历是{$this->edu}";
    }
}