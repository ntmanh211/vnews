<?php
require_once "functions.php";
require_once "DB.php";
class Account extends DB{

    public function __construct(){
        parent::__construct();
    }

    private function genID(){
        $id = randString(20);
        while(true){
            $query = $this->select("account", "acc_id", "acc_id='$id'");
            if(count($query) == 0) break;
            else $id = randString(20);
        }
        return $id;
    }
    
    public function register($regData){
        #echo json_encode($regData);
        $name = $regData['name'];
        $email = $regData['email'];
        $birthday = $regData['birthday'];
        $password = $regData['password'];
        $password1 = $regData['password1'];
        $gender = $regData['gender'];
        #$role = $regData['role'];

        $care = $regData['care'];

        if(strlen($password) < 8){
            echo "Mật khẩu yếu. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        }
        if($password != $password1){
            echo "Mật khẩu không trùng khớp. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit();
        }
        if (!$password || !$email || !$name || !$birthday || !$gender || !$password1 || !$care){
            echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)){
            echo "Email không hợp lệ. Vui lòng nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
              
        //Kiểm tra email đã có người dùng chưa
        // $checkEmail = $this->select("account", "*", "email='$email");
        // if (mysqli_num_rows($checkEmail) > 0){
        //     while($row =  mysqli_fetch_assoc($checkEmail)):
        //         echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        //     exit;
        // }
        //Kiểm tra dạng nhập vào của ngày sinh
        // if (!ereg("^[0-9]+/[0-9]+/[0-9]{2,4}", $birthday)){
        //         echo "Ngày tháng năm sinh không hợp lệ. Vui long nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        //         exit;
        //     }
        
        try {
            $this->insert("account", array('acc_id' => $this->genID(),
                                        'name' => $name,
                                        'email' => $email,
                                        'password' => _hash($password),
                                        'gender' => $gender,
                                        'birthday' => $birthday));
        
            echo "Đăng ký thành công. <a href='?link=home'>Về trang chủ</a>";
        }
        catch(Exception $e){
            echo "Lỗi đăng ký. Vui lòng nhập lại.";
        }
    }

    public function login($email, $password){
        sessionInit();
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $password; // hashed password
    }

    public function checkLoggedIn(){
        sessionInit();
        if(!isset($_SESSION['email']) || !isset($_SESSION['pass'])) return false;
        $check = $this->select("account", "*", "email='{$_SESSION['email']}' AND password='{$_SESSION['pass']}'");
        if(count($check) == 1) return true;
        else return false;
    }

    public function logout(){
        sessionInit();
        unset($_SESSION['email']);
        unset($_SESSION['pass']);
    }

    public function getUserInfo($uid){
        //.
    }
}
?>