
<?php

class Login extends Controller{
   public $tok="uu";
    
    public function index(){
       
                //goi view
                $this->view("layout_login", [
                    "Page"=>"login",
                       "View"=>"login",
                           
               ]);
            
      
          
    }
// login
function login()
{
  
    if(!empty($_POST["Email"])&& !empty($_POST["Password"])){
    $email=$_POST["Email"];
    $password=$_POST["Password"];
  
}
else{
$email='';
$password='';
}
 // goi model

$add = $this->model("Login_User");
$kq=$add->xuli_login($email,$password);
return $kq;

}
// xac thuc email
public function validate_form()
{
    $this->view("layout_login", [
        "Page"=>"login",
           "View"=>"validate_email",
       
      
    
   ]);
    }

       
    
    // xac thực email để gửi link
public function validate_email()
{
    if(!empty($_POST["Email"]))
        $email=$_POST["Email"];

$add = $this->model("Login_User");
$kq=$add->xuli_validate_email($email);
echo $kq;

}

// cập nhật mật khẩu
function Update_password($token){
    if(isset($_POST["new_password"])&& isset($_POST["comfirm_pass"])){
    $new_pass=$_POST["new_password"];
    $confirm_pass=$_POST["comfirm_pass"];
     $token=$token;
}



$add = $this->model("Login_User");

$kq=$add->xuli_update_pass($new_pass,$confirm_pass,$token);
if($kq==1){
    header("location:/Linxhq_2020/LinhxHQ2020/MVC_2020/login/index");
}
}

// xác thực token để cập nhật mật khẩu
function validate_token($token){
   
    $add = $this->model("Login_User");
    $tken=$add->xuli_validate_token($token);
     $this->tok=$tken["token"];
    if( $tken["token"]==$token){
  
        $this->view("layout_login", [
            "Page"=>"login",
           "token"=>$token,
               "View"=>"edit_password",      
       ]);
       
      
    }
   
    else
    {
        header("location:/Linxhq_2020/LinhxHQ2020/MVC_2020/login/index");
    }
}

}

?>