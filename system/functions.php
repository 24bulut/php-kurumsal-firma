<?php
  $filePath = $_SERVER["SCRIPT_FILENAME"];
  $filePath = str_ireplace("/index.php","",$filePath);


  $subFolder = $_SERVER["SCRIPT_NAME"];
  $subFolder = str_ireplace("/index.php","",$subFolder);
  define('URL',"http://".$_SERVER["SERVER_NAME"].$subFolder);
  define('PATH',$filePath);


  function loadClasses(){
    require_once("./app/model/class.database.php");

    require_once("./app/model/class.upload.php");

    require_once("./app/model/class.galery.php");
    require_once("./app/model/class.slider.php");
    require_once("./app/model/class.admin.php");
    require_once("./app/model/class.config.php");
    require_once("./app/model/class.services.php");



  }

  function publicUrl($value=""){
    $url = URL."/app/user-app/view/public/$value";
    return $url;
  }
  function publicAdminUrl($value=""){
    $url = URL."/app/admin-app/view/public/$value";
    return $url;
  }
  function staticUrl($value=""){
    $url = "./app/user-app/view/public/static/$value";
    return $url;
  }
  function staticAdminUrl($value=""){
    $url = "./app/admin-app/view/public/static/$value";
    return $url;
  }
  function publicPath($value=""){
      $path = "./app/user-app/view/public/$value";
      return $path;
  }

  function view($page=false){
    $pageMessage = "";
    $parentPage ="";
    /*
    if (isset($_GET["url"])) {
      $url = explode('/',$_GET["url"]);
      $parentPage = trim($url[0]);
    }
    if ($parentPage=="profil" && !loginState()) {
      header("location:".url());
      exit;
    }
    
    else{*/
      include("app/user-app/controller/controller.php");//genel kontrolcü
      include("app/user-app/controller/".$page."_controller.php");
      include( staticUrl("header.php"));
      include("app/user-app/view/".$page.".php");

      include( staticUrl("footer.php"));
    
  }

  function adminView($page=false){
    $pageMessage = "";

    if($page != "auth" && !adminLoginState()){
      header("location:".url("admin/auth"));
    }
    else {

      include("app/admin-app/controller/".$page."_controller.php");

      include("app/admin-app/controller/controller.php");

      if($page != "auth") include( staticAdminUrl("header.php"));
      include("app/admin-app/view/".$page.".php");
      if($page != "auth") include( staticAdminUrl("footer.php"));


    }
  }

  function url($page=""){
    return URL."/".$page;
  }
  function adminUrl($page=""){
    return URL."/admin/".$page;
  }


  function adminLoginState(){
    return (isset($_SESSION["admin"]) && $_SESSION["admin"] == "true");
  }

  function seoUrl($s) {
   $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');
   $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');
   $s = str_replace($tr,$eng,$s);
   $s = strtolower($s);
   $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
   $s = preg_replace('/\s+/', '-', $s);
   $s = preg_replace('|-+|', '-', $s);
   $s = preg_replace('/#/', '', $s);
   $s = str_replace('.', '', $s);
   $s = trim($s, '-');
   return $s;
  }


  function kisalt($kelime, $str = 10){
    if (strlen($kelime) > $str){
      if (function_exists("mb_substr")) $kelime = mb_substr($kelime, 0, $str, "UTF-8").'...';
      else $kelime = substr($kelime, 0, $str).'...';
    }
    return $kelime;
  }


?>
