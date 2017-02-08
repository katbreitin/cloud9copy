<?php  

    class DatabaseHelper {
        public static function getConnection($connection_string, $db_user, $db_pass){
            $pdo = new PDO($connection_string, $db_user, $db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
    }
?>