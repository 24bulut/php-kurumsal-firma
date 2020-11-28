<?php


$sliderObj = new Slider();

if (isset($_GET["status"])) {
    if ($_GET["status"]=="ok") {
        $adminPageMessage = "silme işlemi başarılı";
    }else{
        $adminPageMessage = "silme işlemi başarısız";
    }
}

if (isset($_POST["add-slider"])) {

    if (isset($_FILES["image"]["size"]) && $_FILES["image"]["size"]>1) {
        
        if ($_FILES["image"]["type"] == "image/png" || $_FILES["image"]["type"] == "image/jpg") {
            $imageName =time()."_".$_FILES["image"]["name"];
            $sliderObj->setFileName($imageName);
            $sliderObj->setPath(publicPath("img/slider"));
            $sliderObj->setFileTmpName($_FILES["image"]["tmp_name"]);
            if ($sliderObj->upload()) {
                $sliderObj->setImageUrl($imageName);
                $sliderObj->setTitle($_POST["title"]);
                $sliderObj->setContent($_POST["content"]);
                if ($sliderObj->addSlider()) {
                    $adminPageMessage = "işlem başarılı";
                }
            } else {
                $adminPageMessage = "işlem başarısız";
            }
        } else {
            $adminPageMessage = "işlem başarısız. Lütfen uzantısı .Png veya .jpg Olan bir dosya yükleyiniz.";
        }
    }
}

$sliderList= $sliderObj->getSlider();
//print_r($galeryList);


