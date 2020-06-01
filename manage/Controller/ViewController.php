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

    public function getManaUser(){
        getView("mana_user", array('title' => "Quản lý người dùng"));
    }

    public function getManaSource(){
        getView("mana_source", array('title' => "Quản lý nguồn tin"));
    }

    public function getManaTopic(){
        getView("mana_topic", array('title' => "Quản lý chủ đề"));
    }
}
?>