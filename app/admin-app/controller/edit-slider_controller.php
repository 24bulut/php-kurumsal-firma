<?php


$sliderObj = new Slider();

if (isset($_POST["edit-slider"])) {
    $sliderObj->setTitle($_POST["title"]);
    $sliderObj->setContent($_POST["content"]);
    $sliderObj->setId($_GET["id"]);
    if ($sliderObj->editSlider()) {
        $adminPageMessage = "Düzenleme işlemi başarılı";
    }else{
        $adminPageMessage = "Düzenleme işlemi başarısız";
    }
}

if (isset($_GET["id"])) {
    $sliderObj->setId($_GET["id"]);
    $sliderDetails=$sliderObj->getSliderById();
    
    if (isset($_GET["remove"])) {
        $sliderObj->setId($_GET["id"]);
        $sliderImage=$sliderObj->getSliderById();
        $image=array_shift($sliderImage);
        unlink(publicPath("img/slider/".$image["image_url"]));
        if ($sliderObj->removeImage()) {
            Header("Location:".adminUrl("slider?status=ok"));
        }else{
            Header("Location:".adminUrl("slider?status=no"));
        }
    }



}
else{
    header("Location:".adminUrl("slider"));
    exit;
}
$sliderDetails=array_shift($sliderDetails);


