<div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="row">
                        <div class="col-sm-12 text-center " style="margin-top: 50px!important;">
                            <b style="font-size: 20px; ">Đăng Nhập
                        </div>
                        <form name="frmLogin">
                            <div class="row" style="margin-top: 30px;">
                                <div role="tabpanel" style="margin-left:350px">
                                   

                                    <!-- Tab panes -->
                                    <div class="tab-content">

                                        <div role="tabpanel" class="tab-pane active" id="home" style="padding-left: 20px;">
                                            <nav style="margin-top: 30px;"></nav>

                                            <div>
                                                <input type="text" id="txtEmailDN" name="txtEmailDN" placeholder="Email" style="width: 400px; height: 30px;
                                	opacity: 0.7; margin-bottom: 50px;" ng-model="txtEmailDN" required>

                                            </div>
                                            <div style="margin-left:-200px;margin-top:-55px;color:orangered">
                                               
                                            </div>

                                            <div>
                                                <input type="password" name="txtPassworDN" id="txtPasswordDN" placeholder="password" style="width: 400px; height: 30px;
                                	opacity: 0.7; margin-bottom: 30px;margin-top:30px" ng-model="txtPassworDN" required>
                                            </div>

                                            <div style="margin-left:-130px;margin-top:-25px;color:orangered">
                                                
                                            </div>
                                            <button type="button" class="btn btn-info" onclick="login()" style="width: 400px; margin-top: 30px;">

                                                Log In
                                            </button>
                                            </div >
                                            <a href="http://localhost/Linxhq_2020/LinhxHQ2020/MVC_2020/login/validate_form" style="width: 400px; margin-top: 5px;">

                                           Quên Mật Khẩu ?
</a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">

            </div>
        </div>
    </div>
