<?php


if (isset($_POST["edit-aboutus"])) {

    $configObj = new Config();
    $configObj->setAboutUs($_POST["about-us"]);
    if ($configObj->editAboutUs()) {
        $adminPageMessage = "İşlem Başarılı";
    }else {
        $adminPageMessage = "İşlem Başarısız !";
    }
}




$config = new Config();
$cfg=$config->getConfig();