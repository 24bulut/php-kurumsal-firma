<?php

if (isset($_POST["save-site-config"])) {

    $configObj = new Config();
    $configObj->setSiteTitle($_POST["site_title"]);
    $configObj->setCompanyName($_POST["company_name"]);
    $configObj->setSiteKeywords($_POST["site_keywords"]);
    $configObj->setSiteDescription($_POST["site_description"]);

    if ($configObj->editSiteConfig()) {
        $adminPageMessage = "işlem başarılı";
    } else {
        $adminPageMessage = "işlem başarısız";
    }


    if (isset($_FILES["logo"]["size"]) && $_FILES["logo"]["size"]>1) {
       
        if ($_FILES["logo"]["type"] == "image/png") {
            $configObj->setFileName("logo.png");
            $configObj->setPath(publicPath("img"));
            $configObj->setFileTmpName($_FILES["logo"]["tmp_name"]);
            if ($configObj->upload()) {
                $adminPageMessage = "işlem başarılı";
            } else {
                $adminPageMessage = "işlem başarısız";
            }
        } else {
            $adminPageMessage = "işlem başarısız. Lütfen uzantısı .Png Olan bir dosya yükleyiniz.";
        }
    }
}

$config = new Config();
$cfg = $config->getConfig();
