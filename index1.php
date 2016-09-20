<?php
require_once ('./class/A.php');

class factory{
    //Instance表示“实例”，“对象”
    static function getInstance($className){

        if(file_exists('./class/' . $className . ".php")){
            echo 'esists';
            $obj1 = new $className();
            return $obj1;
        }
        else{
            echo 'no esists';
            return null;//也可以die();
        }
    }
}
$obj1 = factory::getInstance("A");//获取类A的一个对象
var_dump($obj1) ;

echo 'hello world';



?>