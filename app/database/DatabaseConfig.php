<?php 
namespace app\database;
class DatabaseConfig implements IConfig{
    private $data =[
        'host'=>'localhost',
        'username'=>'root',
        'password'=>'123456',
        'database'=>'crud_ipdv',
        'driver'=>'mysqli'
    ];
    public static function get($key){
        return $data[$key];
    }
}
?>