<?php
require_once '../app/init.php';
    switch (isset($_GET)) {
      case isset($_GET['id_M']):
        if (isset($_GET['id_M'])) {
          $id = $_GET['id_M'];
          $id = mysqli_escape_string($conn, $id);
          $qr = "SELECT id_post FROM movie WHERE id_post = '$id'";
          $cek = mysqli_query($conn, $qr);
          $result = mysqli_fetch_assoc($cek);
          if (isset($id) == $result) {
            $params = $id;
          }else {
            require_once '../app/errorpage.php';
            return false;
          }
        }else {
          require_once '../app/errorpage.php';
          return false;
        }
        break;

        case isset($_GET['id_N']):
          if (isset($_GET['id_N'])) {
            $id = $_GET['id_N'];
            $id = mysqli_escape_string($conn, $id);
            $qr = "SELECT id_post FROM news WHERE id_post = '$id'";
            $cek = mysqli_query($conn, $qr);
            $result = mysqli_fetch_assoc($cek);
            if (isset($id) == $result) {
              $params = $id;
            }else {
              require_once '../app/errorpage.php';
              return false;
            }
          }else {
            require_once '../app/errorpage.php';
            return false;
          }
        break;

        case isset($_GET['id_MO']):
          if (isset($_GET['id_MO'])) {
            $id = $_GET['id_MO'];
            $id = mysqli_escape_string($conn, $id);
            $qr = "SELECT id FROM movieoncoming WHERE id = '$id'";
            $cek = mysqli_query($conn, $qr);
            $result = mysqli_fetch_assoc($cek);
            if (isset($id) == $result) {
              $params = $id;
            }else {
              require_once '../app/errorpage.php';
              return false;
            }
          }else {
            require_once '../app/errorpage.php';
            return false;
          }
        break;

      default:
        require_once '../app/errorpage.php';
        return false;
      break;
    }
 ?>
 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <title>Image Views</title>
     <style media="screen">
     body{
       background-color: #000;
     }
     h1, h2, h3, h4, h5, h6{
       color: #FFF;
     }
     </style>
   </head>
   <body>
     <div class="container">
       <?php if (isset($_GET['id_M'])){ ?>
       <img src="<?= BASEURL; ?>app/core/view_image.php?id_M=<?= $params; ?>" class="img-fluid mt-5" alt="Responsive image">
     <?php }else{?>
     <?php if (isset($_GET['id_N'])){ ?>
       <img src="<?= BASEURL; ?>app/core/view_image.php?id_N=<?= $params; ?>" class="img-fluid mt-5" alt="Responsive image">
     <?php }?>
     <?php if (isset($_GET['id_MO'])){ ?>
       <img src="<?= BASEURL; ?>app/core/view_image.php?id_MO=<?= $params; ?>" class="img-fluid mt-5" alt="Responsive image">
     <?php }?>
   <?php } ?>
     </div>

     <!-- Optional JavaScript; choose one of the two! -->

     <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

     <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
     -->
   </body>
 </html>
