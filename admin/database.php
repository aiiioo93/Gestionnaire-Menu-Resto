<?php 

class Database{

    private static $dbHost = "localhost";
    private static $dbName = "samaburger";
    private static $dbUser = "root";
    private static $dbUserPassword = "";

    private static $connect =null;
    
    public static function connect(){
        try{
            self::$connect = new PDO("mysql:host=".self::$dbHost.";dbname=".self::$dbName,self::$dbUser,self::$dbUserPassword);
        }catch(PDOException $e){
            die($e->getMessage());
        }
        return self::$connect;
    }

    public static function disconnect(){
        self::$connect =null;
    }
    
}

Database::connect();


    
?> 