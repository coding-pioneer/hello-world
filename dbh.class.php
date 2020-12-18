<?php
   include_once "core/init.php";

Class Dbh{
    private static $_instance = null;
   private $servername;
   private $username;
   private $password;
   private $dbname;
   private $charset;
   

       public function connectDb(){
      
       $this->servername = "localhost";
       $this->username = "root";
       $this->password = "";
       $this->dbname = "seat-dbase";
       $this->charset = "utf8mb4";
       $dsn = "";
       try{
       $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
       $pdo = new PDO($dsn, $this->username,$this->password);
       $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       
   }
   catch(PDOException $e){
       echo "connection failed : ".$e->getMessage();
   }
}


public static function getInstance(){
    if (!isset(self::$_instance)) {
        # code...
        self::$_instance = new Dbh();
    }

    return self::$_instance;



}

}


?>