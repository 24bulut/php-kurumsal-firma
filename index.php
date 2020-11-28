
<?php

  //error_reporting(0);
  session_start();
  ob_start();

  header('Content-type: text/html; charset=utf-8');
  date_default_timezone_set('Europe/Istanbul');

  require_once("system/functions.php");

  #class ları dahil et
  loadClasses();

  require_once("router.php");

  ob_end_flush();


?>
