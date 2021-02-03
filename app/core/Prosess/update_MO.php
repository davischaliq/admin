<?php
require_once '../db.php';
if (isset($_POST['submit'])) {
  // code...
  $id = htmlspecialchars($_GET['id_MO']);
  $title = htmlspecialchars($_POST['judul']);
  $pemilik = htmlspecialchars($_POST['pemilik']);
  $category = htmlspecialchars($_POST['category']);
  $penonton = htmlspecialchars($_POST['penonton']);
  $anggaran = htmlspecialchars($_POST['anggaran']);
  $content = htmlspecialchars($_POST['content']);

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

      $qr  = "UPDATE movieoncoming SET judul = '$title', img = '$data', pemilik = '$pemilik', category = '$category',
      penonton = '$penonton', T_anggaran = '$anggaran', sinopsis ='$content' WHERE id = '$id'";

      $result = mysqli_query($conn, $qr);
      if ($result) {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('data movie berhasil di update');
              window.location.href='".BASEURL."/Dashboard/movie_DO.php';
              </script>");
      } else {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('data movie gagal di update'". mysqli_error($conn) .");
              window.location.href='".BASEURL."/Dashboard/movie_DO.php';
              </script>");
      return false;
    }
      break;

    case $_FILES['file']['error'] = 4 :
      // code...
      $title = mysqli_escape_string($conn, $title);
      $content = mysqli_escape_string($conn, $content);

      $qr  = "UPDATE movieoncoming SET judul = '$title', pemilik = '$pemilik', category = '$category',
      penonton = '$penonton', T_anggaran = '$anggaran', sinopsis ='$content' WHERE id= '$id'";

      $result = mysqli_query($conn, $qr);
      if ($result) {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('data movie berhasil di update');
              window.location.href='".BASEURL."/Dashboard/movie_DO.php';
              </script>");
      } else {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('data movie gagal di update'". mysqli_error($conn) .");
              window.location.href='".BASEURL."/Dashboard/movie_DO.php';
              </script>");
      return false;
    }
      break;
    }
  }
}
