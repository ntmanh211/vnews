<?php
require_once "Controller.php";
class ActionController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function registerAction($regData){
        $this->accObj->register(array('username' => $regData['username'],
                                        'password' => $regData['password']));
    }

    public function login($loginData){
        $this->accObj->login($loginData['sl_username'], _hash($loginData['sl_password']));
        nextpage("./.");
    }
    public function logout(){
        $this->accObj->logout();
        nextpage("./.");
    }
}
?>