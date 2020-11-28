<?php

if (isset($_POST["add-service"])) {
   $services = new Services();
   $services->setTitle($_POST["title"]);
   $services->setContent($_POST["content"]);
   
   if ($services->addServices()) {
       $adminPageMessage = "İşlem Başarılı";
   }else {
        $adminPageMessage = "İşlem Başarısız !"; 
   }
}
