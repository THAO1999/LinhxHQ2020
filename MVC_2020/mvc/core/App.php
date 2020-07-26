<?php
class App{
       // thanh địa chỉ quyết đinh các controller action params
       // class App quyết đinh controller nào hàm nào được hiển thị
    protected $controller="Home";
    protected $action="Index";
    protected $params=[];

    function __construct(){
       
     
      
        $arr = $this->UrlProcess();
  
    
        // Controller
        
        if( file_exists("./mvc/controllers/".$arr[0].".php") ){
            $this->controller = $arr[0]; // gán  controller bằng ar[0] 
            unset($arr[0]); // hủy phần tử a[0]
        }
        // mặc đinh controller la home nếu file k tồn tai, mà nếu file tồn tại thì ar vẫn gán cho thằng controller;
        require_once "./mvc/controllers/". $this->controller .".php";
        $this->controller = new $this->controller;

        // Action 
        if(isset($arr[1])){
            // kiem tra function có tồn tại k tham số 1 là tên file tham số 2 là tên function
            if( method_exists( $this->controller , $arr[1]) ){
                $this->action = $arr[1]; 
            }
            unset($arr[1]); //hủy phần tử a[1]
        }
        

        // Params
        $this->params = $arr?array_values($arr):[];

          // print_r($this->params);
        // nếu như không có hàm này thì function trong class không thể chạy
        // hàm nay coi như tạo đối tượng để gọi
        // tạo biến có kiểu controller có chạy hàm và tham số truyền vào
        // nếu như hàm tồn tại thì tham số trên thanh đchi tự động đươc hiểu là tham sô
       call_user_func_array([$this->controller, $this->action] ,$this->params);
    
    }   


    

    function UrlProcess(){
      
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/"))); // tách từng dấu / và lọc khoảng trắng
        }
    }

}
?>