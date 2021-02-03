<?php
// untuk proses keluar
require_once '../app/init.php';
session_start();
if (isset($_SESSION)) {
  // code...
  session_destroy();
  header("location:" . BASEURL);
}

 ?>
