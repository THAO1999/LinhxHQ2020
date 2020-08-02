<?php
class User extends DB{
   
  private $name;
  private $birthday;
  private $count=0;
function __construct(){
  
  parent::__construct();
}

      // load form
     function getUser(){

      $listPerson =  array();   
      $sql_list_student=mysqli_query($this->connect,"SELECT * from Users ");
  while($row = mysqli_fetch_assoc($sql_list_student)) {    
     $listPerson[]=$row;
    
  }
 
 return $listPerson;
 
}



   // them sinh vien
 public function xuli_Add($name,$birthday){
$sql = "INSERT INTO Users (userName,Birthday) VALUES ('$name','$birthday')";

if (mysqli_query($this->connect, $sql)) 
 return 1;
 else 
  echo "Error: " ;
}



  //xuli_search
public function xuli_search($name){

  $listPerson =  array();
     
  $sql_search_student=mysqli_query($this->connect,"SELECT * FROM users WHERE userName LIKE '$name%' ");
  while($row = mysqli_fetch_assoc($sql_search_student)) {
  
    $listPerson[]=$row;
 
 
 }
 return $listPerson;

  }
//xuli_delete
  public function xuli_delete($user_id){
  
       
    $sql_delete_student=mysqli_query($this->connect," DELETE FROM users WHERE  user_id=$user_id");

if ($this->connect->query($sql_delete_student) === TRUE) {
 return 1;
} else {
 return 0;
}

}
//xuli_delete
public function xuli_edit($Name,$Birthday,$id){

  $sql_query = "UPDATE users SET userName='$Name',Birthday='$Birthday'  WHERE user_id=$id";
  if ($this->connect->query($sql_query) === TRUE) {
    echo 1;
  } else {
    echo "Error updating record: " . $this->connect->error;
  }
  
}
//xuli_search_month
 function xuli_search_month($Search_start,$Search_end){
  $listPerson =  array();
     
$sql_query="SELECT * FROM `users` WHERE (SELECT MONTH(Birthday)) >=$Search_start and (SELECT MONTH(Birthday) )<=$Search_end";

  $sql_search_student=mysqli_query($this->connect,$sql_query);
  while($row = mysqli_fetch_assoc($sql_search_student)) {
  
    $listPerson[]=$row;
 
 
 }
 return $listPerson;

}



}

?>