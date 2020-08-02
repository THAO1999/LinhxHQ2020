<?php
class Controller{
// thay vì contronller nào cũng phải require_one thì ta tạo   đối tượng model luôn
    public function model($model){
        // tại đây requir luôn file  thư mục trong model
        require_once "./mvc/models/".$model.".php";
       return new $model; // tạo mới đối tượng
    }

    public function view($layout, $data=[]){
        require_once "./mvc/views/".$layout.".php"; 
      
    }

}
?>