<?php
if(isset($_COOKIE['user_name']) && isset($_COOKIE['password'])) {	
    setcookie('user_name','',time()-1314000,"/");
    setcookie('password','',time()-1314000,"/");
}
header('Location:../../index.php');
?>