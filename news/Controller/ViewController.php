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
            getView("home", array('title' => 'Xác thực chỗ trống phòng Lab'));
        // }
    }

    public function getRegister(){
        getView("register", array('title' => 'Đăng ký'));
    }
}
?>