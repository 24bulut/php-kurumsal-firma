<?php
  #url get değeri .htaccess dosyası ile gizlendi
  if(isset($_GET["url"]) && $_GET["url"] != null && $_GET["url"] != ""){
    $url = explode("/",$_GET["url"]);
    $page = trim($url[0]);
    switch ($page) {
      case 'uyelik':
        view('uyelik');
        break;
      case 'kayit-basarili':
        view("kayit_basarili");
        break;
      case 'admin':
          if(count($url) > 1){
            if ($url[1]=="site-config") adminView('site-config');
            elseif ($url[1]=="contact") adminView('contact');
            elseif ($url[1]=="auth") adminView('auth');
            elseif ($url[1]=="slider") adminView('slider');
            elseif ($url[1]=="edit-slider") adminView('edit-slider');

            elseif ($url[1]=="galery") adminView('galery');

            elseif ($url[1]=="services") adminView('services');
            elseif ($url[1]=="service-edit") adminView('service-edit');
            elseif ($url[1]=="service-add") adminView('service-add');

            elseif ($url[1]=="about-us") adminView('about-us');

            else adminView('site-config');
          }
          else adminView('site-config');
          break;
      default:
        view("index");
        break;
    }
  }
  else{

    view("index");
  }

?>
