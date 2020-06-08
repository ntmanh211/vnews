<?php
require_once "functions.php";
require_once "DB.php";
class Account extends DB{

    public function __construct(){
        parent::__construct();
    }

    public function register($regData){
        // $this->insert("account", array())
        if(isset($_POST["account"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            $password1 = $_POST["password1"];
            $name = $_POST["name"];
            $birthday = $_POST["birthday"];
            $gender = $_POST["gender"];
            $care = $_POST["care"];
        }
    }

    public function login($email, $password){
        sessionInit();
        $_SESSION['sl_email'] = $email;
        $_SESSION['sl_pass'] = $password; // hashed password
    }

    public function checkLoggedIn(){
        sessionInit();
        if(!isset($_SESSION['email']) || !isset($_SESSION['sl_pass'])) return false;
        $check = $this->select("account", "*", "username='{$_SESSION['sl_email']}' AND password='{$_SESSION['sl_pass']}'");
        if(count($check) == 1) return true;
        else return false;
    }

    public function logout(){
        sessionInit();
        unset($_SESSION['sl_email']);
        unset($_SESSION['sl_pass']);
    }

    public function getUserInfo($uid){
        //.
    }
}
?>