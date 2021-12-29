<?php 
class DBconnect {
    private static $bdd;

    private function __clone()
    {
    }
    private function __construct(){
      
    }
    public static function Connect (){
        if(is_null(self::$bdd)) 
        {
            self::$bdd = new PDO('mysql:host=127.0.0.1;port=3306;dbname=commercial','root');
        }
        return self::$bdd;
    }
    
}
?>