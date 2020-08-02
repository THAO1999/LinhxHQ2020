<?php


class Home extends Controller{

    function Index(){
        
                // gọi đến model
        $add = $this->model("User");
        $listUser=  array();
        
        $listUser=$add->getUser();
      
        //goi view
        $this->view("layout", [
            "Page"=>"home",
               "View"=>"Index",
            "listUser"=>$listUser,
          
        
       ]);
    
}

    
// xuli add
function add( ){
    $name = $_POST['Name'];
    $birthday=  date("Y-m-d", strtotime($_POST['Birthday'])); 
    
    // goi model
    $add = $this->model("User");
    $kq=$add->xuli_Add($name,$birthday);
     echo $kq;

}
// xu li search
function search(){

   

    $name = $_POST['Name'];
    $listUser=  array();
    // goi model
    $add = $this->model("User");
     
    $listUser=$add->xuli_search($name);
     

    $this->view("layout", [
        "Page"=>"home",
        "View"=>"search",
        "listUser"=>$listUser,
    
   ]);

}

// xu li delete
function delete_user(){
    $user_id = $_POST['ID'];
   
    // goi model
    $add = $this->model("User");
    $kq=$add->xuli_delete($user_id);
    
echo $kq;
}

function edit(){
   $Name=$_POST["Name"];
   $Birthday=  date("Y-m-d", strtotime($_POST['Birthday'])); 
 // $Birthday= $_POST['Birthday'];
   $ID=$_POST["ID"];

$add = $this->model("User");
    $kq=$add->xuli_edit($Name,$Birthday,$ID);
    echo $kq;


}
// xuli search_month
public function search_month()
{
    $Search_start=$_POST["Search_start"];
    $Search_end=$_POST["Search_end"];
    $listUser=  array();
$add = $this->model("User");
$listUser=$add->xuli_search_month($Search_start,$Search_end);


$this->view("layout", [
    "Page"=>"home",
    "View"=>"search",
    "listUser"=>$listUser,

]);

}


 
}

// http://localhost/live/Home/Show/1/2
 // có bao nhiêu màn hình thì có bấy nhiêu controller   
 