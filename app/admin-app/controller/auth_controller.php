<?php

if (isset($_GET["logout"])) {
    unset($_SESSION["admin"]);
    unset($_SESSION["admin_username"]);
    header("Location:".adminUrl());
    exit;
}

if (isset($_POST["login"])) {
    
    $admin = new Admin();
    $admin->setUserName($_POST["username"]);
    $admin->setPassword($_POST["password"]);
    
    if ($admin->signin()) {
        header("Location:".adminUrl());
        exit;
    }else {
        $loginMessage = "Giriş Yapılamadı. Lütfen Bilgilerinizi Kontrol Ediniz.";
    }
}