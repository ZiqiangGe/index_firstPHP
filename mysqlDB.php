<?php

/**连接数据库的类
 * Created by PhpStorm.
 * User: geziqiang
 * Date: 16/9/20
 * Time: 下午3:04
 */
class mysqlDB
{
    public $config;
    public $port;
    public $username;
    public $password;
    public $charset;
    public $dbname;


    static $link;
    public function __construct($config){
        //初始化数据
        $this->host = isset($config['host']) ? $config['host'] : 'localhost';
        $this->port = isset($config['port']) ? $config['port'] : '3306';
        $this->username = isset($config['username']) ? $config['username'] : 'root';
        $this->password = isset($config['password']) ? $config['password'] : 'root';
        $this->charset = isset($config['charset']) ? $config['charset'] : 'utf8';
        $this->dbname = isset($config['dbname']) ? $config['dbname'] : 'Joker';

        //连接数据库
        self::$link = $this->connect();
        //设定连接编码
        $this->setCharset($this->charset);
    }

    //这里进行连接
    public function connect(){

        $link =new mysqli($this->host,$this->username,$this->password,$this->dbname);
        if($link->error){
            die('连接数据库发送错误');
        }
        return $link;
    }
    public function setCharset($charset){
        mysqli_set_charset(self::$link,$charset);
    }

    public function query($sql){
        if(self::$link->query($sql)  ===true){
            return true;
        }
        return false;
    }

}
?>