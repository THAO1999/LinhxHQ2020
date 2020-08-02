<?php


include   "public/PHPMailer-master/src/PHPMailer.php";
include "public/PHPMailer-master/src/Exception.php";
include   "public/PHPMailer-master/src/OAuth.php";
include   "public/PHPMailer-master/src/POP3.php";
include  "public/PHPMailer-master/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Login_User extends DB{
    function __construct(){
  
        parent::__construct();
        
      }
      
      // xu li login
function xuli_login($email,$pass){
     
  $sql =mysqli_query($this->connect,"SELECT * FROM users WHERE email ='$email' and password='$pass'");
  $num=mysqli_num_rows($sql);
   if($num>0)
return 1;
else return 0;

  }


  public function xuli_validate_email($email)
  {
    $fail_email="email  does not exist in database";
    
$token=substr(md5(rand(0,1000)),0,16);
    $sql_query = "UPDATE users SET token='$token' WHERE  email ='$email'";
    if ($this->connect->query($sql_query) === TRUE) {
    
      
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
       try{
         
           $mail->IsSMTP();
           $mail->SMTPDebug = 2;
           $mail->SMTPAuth = TRUE;
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;
            $mail->Host = "smtp.gmail.com";
            $mail->Username =  "taminhthao_t62@hus.edu.vn";
            $mail->Password = "taminhthao@99";
      
          
           $link="đây";
           $mail->setFrom("taminhthao_t62@hus.edu.vn", 'Senaid Bacinovic');
           $mail->addAddress($email);
           $mail->isHTML(true);
           $mail->Subject = 'SMTP email test';
           $mail->Body = 'vui lòng click ở <a href="http://localhost/LinhxHQ2020/MVC_2020/login/validate_token/' .$token .' " >'.$link. '<a>';
           $mail->send();
           return $token;
        




   } catch (Exception $e) {
       return $mail->ErrorInfo;
   }
        
        
     
      }
      else
       return $fail_email;
      
    
  
}

function xuli_update_pass($cf_pass,$old_pass,$token){
  
if($cf_pass==$old_pass){
 
 $sql_query = "UPDATE users SET password='$old_pass'  WHERE token='$token'";
  if ($this->connect->query($sql_query) === TRUE) {
    return 1;
  } else {
    return  $token;
  }
  
}
}



function xuli_validate_token($token){
 
  $sql =mysqli_query($this->connect,"SELECT * FROM users WHERE   token='$token'");
  $num=mysqli_num_rows($sql);
  $row = mysqli_fetch_assoc($sql);
  
   if($num>0)
return $row;
else 
return 9;

  } 

}



?>
