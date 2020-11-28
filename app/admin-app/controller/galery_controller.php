<?php


$galeryObj = new Galery();

if (isset($_GET["status"])) {
    if ($_GET["status"]=="ok") {
        $adminPageMessage = "silme işlemi başarılı";
    }else{
        $adminPageMessage = "silme işlemi başarısız";
    }
}

if (isset($_GET["remove"]) && isset($_GET["id"])) {
    $galeryObj->setId($_GET["id"]);
    $galeryImage=$galeryObj->getGaleryById();
    $image=array_shift($galeryImage);
    unlink(publicPath("img/galery/".$image["image_url"]));
    if ($galeryObj->removeImage()) {
        Header("Location:".adminUrl("galery?status=ok"));
    }else{
        Header("Location:".adminUrl("galery?status=no"));
    }

}


if (isset($_POST["add-galery"])) {

    if (isset($_FILES["image"]["size"]) && $_FILES["image"]["size"]>1) {
        
        if ($_FILES["image"]["type"] == "image/png" || $_FILES["image"]["type"] == "image/jpg") {
            $imageName =time()."_".$_FILES["image"]["name"];
            $galeryObj->setFileName($imageName);
            $galeryObj->setPath(publicPath("img/galery"));
            $galeryObj->setFileTmpName($_FILES["image"]["tmp_name"]);
            if ($galeryObj->upload()) {
                $galeryObj->setImageUrl($imageName);
                if ($galeryObj->addImage()) {
                    $adminPageMessage = "işlem başarılı";
                }
            } else {
                $adminPageMessage = "işlem başarısız";
            }
        } else {
            $adminPageMessage = "işlem başarısız. Lütfen uzantısı .Png veya .jpg  Olan bir dosya yükleyiniz.";
        }
    }
}

$galeryList= $galeryObj->getGalery();
//print_r($galeryList);


