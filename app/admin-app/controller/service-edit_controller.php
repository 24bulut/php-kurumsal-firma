<?php
if (isset($_POST["edit-service"])) {

    $services = new Services();
    $services->setTitle($_POST["title"]);
    $services->setContent($_POST["content"]);
    $services->setServiceId($_GET["id"]);
    if ($services->editServices()) {
        $adminPageMessage = "İşlem Başarılı";
    }else {
        $adminPageMessage = "İşlem Başarısız !";
    }
}
if (isset($_GET["remove"]) && isset($_GET["id"])) {
    $services = new Services();
    $services->setServiceId($_GET["id"]);
    if ($services->removeService()) {
        header("Location:".adminUrl("services?remove=true"));
    }else {
        header("Location:".adminUrl("services?remove=false"));
   }
}

if (isset($_GET["id"])) {
    $services = new Services();
    $services->setServiceId($_GET["id"]);
    $service = $services->getServiceById();
}else{
    header("Location:".adminUrl());
}
