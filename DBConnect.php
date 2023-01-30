<?php

class DBConnect
{
    private static $instance; // new Singleton
    private static $connect;
    public static function getInstance() {
        if(self::$instance instanceof self){
            return self::$instance;
        }
        return self::$instance=new self;
    }
    private function __clone()
    {

    }

    private function __construct()
    {
        self::$connect = mysqli_connect('localhost', 'root', '')or die("Невозможно установить соединение c базой данных".mysqli_connect_error( ));
        mysqli_query(self::$connect,'SET names "utf8"');   //база устанавливаем кодировку данных в базе
        mysqli_select_db(self::$connect,'cinemaolimp' ) or die ("Ошбка обращения к базе ".mysqli_connect_error());
    }
    function getConnect(){
        return self::$connect;
    }
}