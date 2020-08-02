
 <form  action="../update_password/<?php echo $data["token"] ?>" method="post" >
<div style=" border: 2px solid red; width:400px;margin-left:500px" class="container">
<p class="row "style="margin-left:120px">ĐẶT MẬT KHẨU</p>
 <input class="row "  type="password" name="new_password" id="new_password" placeholder="mật khẩu mới"style="margin-left:100px">
 <input class="row mt-1" type="password" name="comfirm_pass" id="comfirm" placeholder="nhập lại mật khẩu"style="margin-left:100px">
 <button type='submit'class="r row mt-2 mb-2"style="margin-left:150px ;background-color:red"> luu </button>
 <!--<button class="btn btn-danger row mt-2 mb-2" id="btn_search"type="button" style="margin-left:150px" onclick="update_password()">Gui</button>        -->                    
</div>
</form>
<script type="text/javascript" src="../../public/js/jquery-3.5.1.min.js"></script>

<script type="text/javascript" src="../../public/js/script.js"></script> <!-- lui lai thư mục cha của thư muc views-->
