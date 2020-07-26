<?php

class DB{
 
  
    protected $DB_SERVER = "127.0.0.1";
    protected $DB_USERNAME = "root";
    protected $DB_PASSWORD = "";
    protected $DB_DATABASE = "linxhq";
  
    function __construct(){
  
      $this->connect = mysqli_connect($this->DB_SERVER,$this->DB_USERNAME,$this->DB_PASSWORD,$this->DB_DATABASE);
       
       
        
    
        // Check connection
/*if (!$connect) {
  die("Connection failed: " . $connect->connect_error);
}
else
echo "Connected successfully";
*/
  }

  
   

}

?>