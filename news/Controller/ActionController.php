<?php
require_once "Controller.php";
class ActionController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function registerAction($regData){
        $this->accObj->register($regData);
    }

    public function login($loginData){
        $this->accObj->login($loginData['email'], _hash($loginData['pass']));
        nextpage("./.");
    }
    public function logout(){
        $this->accObj->logout();
        nextpage("./.");
    }

    public function UpdateUserInfo($uid){
        $this->accObj->UpdateUserInfo($uid);
        nextpage("./.");
    }
}
?>