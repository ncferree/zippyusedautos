<?php
  
class Database {    
   private static $dsn = 'mysql:host=u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=fhh2mtds55apjahi';
   private static $username = 'm2vonlmxsg2mgfij';
   private static $password = 'vto8z0jpjodf2liz'; 
   private static $db;

   private function __construct() {}

   public static function getDB() {
    if (!isset(self::$db)) {
        try {
            self::$db = new PDO(self::$dsn, self::$username, self::$password);
        } catch (PDOException $e) {
            $error = "Database Error: ";
            $error .= $e->getMessage();
            include('./view/error.php');
            exit();
        }
    }
    return self::$db;
}
}
?>