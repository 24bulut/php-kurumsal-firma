<?php

if (isset($_POST["save-contact"])) {

  
    $configObj = new Config();
    $configObj->setPhone1($_POST["phone1"]);
    $configObj->setPhone2($_POST["phone2"]);
    $configObj->setEmail($_POST["email"]);
    $configObj->setGoogleMapsCode($_POST["google_maps_code"]);
    if ($configObj->editContact()) {
        $adminPageMessage = "işlem başarılı";
    }else{
        $adminPageMessage = "işlem başarısız";
    }

}

$config = new Config();
$cfg=$config->getConfig();