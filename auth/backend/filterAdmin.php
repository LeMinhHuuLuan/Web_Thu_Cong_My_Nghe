<?php
    require_once("auth.php");
    $checkCookie = Auth::loginWithCookie();
    if($checkCookie != null){
        if($checkCookie['role_id']==0)
            header("Location: ../../index.php");
    }
    else
        header('Location: ../login.php');
?>