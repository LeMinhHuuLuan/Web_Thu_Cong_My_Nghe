<?php
require_once (__DIR__."/../../database/connect.php") ;
class Auth{
    public static function checkExist($field,$value){
        global $conn;
        $sql = "select * from User where $field='$value'";
        $run = mysqli_query($conn,$sql);
        if($run->num_rows > 0){
            echo '<script>alert("'.$field.' đã tồn tại")</script>';
            return false;
        }
        return true;
    }
    public static function register($username, $fullname, $email, $phonenumber, $address, $password){
        global $conn;
        $hashedPassword = md5($password);
        if(Auth::checkExist("user_name",$username) && Auth::checkExist("email",$email) && Auth::checkExist("phone_number",$username)){ 
                $sql = "insert into User(user_name, full_name, email, phone_number, address, password, role_id)".
            " values('$username', '$fullname', '$email', '$phonenumber', '$address', '$hashedPassword', 0)";
            $run = mysqli_query($conn,$sql);
            echo '<script>alert("Đăng ký thành công!");
            window.location.href="./login.php";</script>';
        }
    }
    public static function login($username,$password){
        $run = Auth::findOneByUsernameAndPassword($username,md5($password));
        if($run){
            setcookie("user_name",$run['user_name'],time()+1314000,"/");
            setcookie("password",$run['password'],time()+1314000,"/");
            return true;
        }
        return false;
    }
    public static function findOneByUsernameAndPassword($username,$password){
        global $conn;
        $sql="select * from User where user_name = '$username' and password = '$password'";
        $run = mysqli_query($conn,$sql)->fetch_assoc();
        return $run;
    }
    public static function loginWithCookie(){
        if(isset($_COOKIE['user_name']) && isset($_COOKIE['password'])) {	
            $username= $_COOKIE['user_name'];
            $password= $_COOKIE['password'];
            $run = Auth::findOneByUsernameAndPassword($username,$password);
            return $run ? $run : null;
        }
        return null;
    }
}