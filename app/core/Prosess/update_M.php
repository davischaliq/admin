<?php
require_once '../db.php';
if (isset($_POST['submit'])) {
  // code...
  $id = $_GET['id_M'];
  $title = $_POST['judul'];
  $produser = $_POST['produser'];
  $sutradara = $_POST['sutradara'];
  $gendre = $_POST['gendre'];
  $realised = $_POST['realised'];
  $cast = $_POST['cast'];
  $yt = $_POST['YT'];
  $content = $_POST['content'];

  $satuN = $_FILES['file']['name'];
  $satuE = $_FILES['file']['error'];
  $satuT = $_FILES['file']['tmp_name'];
  $satuS = $_FILES['file']['size'];
if (isset($_FILES)) {

  switch ($_FILES['file']['error']) {
    case $_FILES['file']['error'] = 0:
      // Read the file
      $fp   = fopen($satuT, 'r');
      $data = fread($fp, filesize($satuT));
      $data = addslashes($data);
      fclose($fp);

      $qr  = "UPDATE movie SET judul = '$title', img = '$data', produser = '$produser', sutradara = '$sutradara',
      gendre = '$gendre', realised = '$realised', cast = '$cast', linkYT = '$yt', sinopsis ='$content' WHERE id_post = '$id'";

      $result = mysqli_query($conn, $qr);
      if ($result) {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('data movie berhasil di update');
              window.location.href='".BASEURL."/Dashboard/movie_D.php';
              </script>");
      } else {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('data movie gagal di update'". mysqli_error($conn) .");
              window.location.href='".BASEURL."/Dashboard/movie_D.php';
              </script>");
      return false;
    }
      break;

    case $_FILES['file']['error'] = 4 :
      // code...
      $title = mysqli_escape_string($conn, $title);
      $content = mysqli_escape_string($conn, $content);

      $qr  = "UPDATE movie SET judul = '$title', produser = '$produser', sutradara = '$sutradara',
      gendre = '$gendre', realised = '$realised', cast = '$cast', linkYT = '$yt', sinopsis ='$content' WHERE id_post = '$id'";

      $result = mysqli_query($conn, $qr);
      if ($result) {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('data movie berhasil di update');
              window.location.href='".BASEURL."/Dashboard/movie_D.php';
              </script>");
      } else {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('data movie gagal di update'". mysqli_error($conn) .");
              window.location.href='".BASEURL."/Dashboard/movie_D.php';
              </script>");
      return false;
    }
      break;
    }
  }
}
