<?php
require_once "Controller.php";
class ViewController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function getIndex(){
        // if($this->accObj->checkLoggedIn() == false){
        //     getView("login", array('title' => 'Xác thực chỗ trống phòng Lab - Login'));
        // }
        // else{
            getView("home", array('title' => 'VNews'));
        // }
    }

    public function getRegister(){
        getView("register", array('title' => 'Đăng ký'));
    }

    public function getPosts(){
        getView("posts", array('title' => "Tin báo"));
    }

<<<<<<< HEAD
    public function getLogin(){
        getView("login", array('title' => 'Đăng nhập'));
    }

    public function getForgotPass(){
        getView("forgot_pass", array('title' => 'Quên mật khẩu'));
    }

=======
    public function getSearch(){
        getView("search", array('title' => "Duyệt tin"));
    }
>>>>>>> 63c59e168f4e1725ba52d75615680ed92c0c4691
}
?>