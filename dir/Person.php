<?php

/**
 * Created by PhpStorm.
 * User: geziqiang
 * Date: 16/9/20
 * Time: 下午1:47
 */
class Person
{
    public $name;
    public $gender;
    public $age;
    public function intro(){
        return 'my name is '.$this->name.' i\'m '.$this->age.' years old '.'  I\'m a '.$this->gender;
    }
}

class Teacher extends Person
{
    public $salary;

    public function intro()
    {

        echo parent::intro().' I get '.$this->salary.' a month'.'<br>';
    }

    public function study(){
        echo 'Let\'s go  day day up';
    }

    public function run(){
        echo 'Hello';
    }

}

class Student extends Person{
    public $class;
    static public $currentStu;
    const  cc =10;
    public function intro()
    {
        echo parent::intro().' I\'m in '.$this->class.' class ';
    }

    public function __construct($n,$m,$x,$y)
    {
        echo self::cc;
        $this->name   =$n;
        $this->gender =$m;
        $this->age    =$x;
        $this->class  =$y;
        echo '<br>'.$this->name.' 加入传值'.' 当前有 '.++self::$currentStu.' 个学生'.'<br>';
    }
    public function  __destruct()
    {
        // TODO: Implement __destruct() method.
        echo 'dealloc';
    }

}





?>