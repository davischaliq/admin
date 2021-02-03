<?php
require_once '../db.php';
if (isset($_POST['submit'])) {
  // code...
  $title = htmlspecialchars($_POST['judul']);
  $content = htmlspecialchars($_POST['content']);
  $id = htmlspecialchars($_GET['id_N']);

  $satuN = $_FILES['file']['name'];
  $satuE = $_FILES['file']['error'];
  $satuT = $_FILES['file']['tmp_name'];
  $satuS = $_FILES['file']['size'];

  $id_post = mysqli_escape_string($conn, $id);
  $title_judul = mysqli_escape_string($conn, $title);
  $content_isi = mysqli_escape_string($conn, $content);

if (isset($_FILES)) {
  switch ($_FILES['file']['error']) {
    case $_FILES['file']['error'] = 0:
      // Read the file
      $fp   = fopen($satuT, 'r');
      $data = fread($fp, filesize($satuT));
      $data = addslashes($data);
      fclose($fp);

      $qr  = "UPDATE news SET img = '$data', judul = '$title_judul', content = '$content_isi' WHERE id_post = '$id_post'";
      $result = mysqli_query($conn, $qr);
      if ($result) {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('Berita Berhasil Di Update');
              window.location.href='".BASEURL."/Dashboard/news_D.php';
              </script>");
      } else {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('Berita Gagal Di Update".mysqli_error($conn)."');
              window.location.href='".BASEURL."/Dashboard/news_D.php';
              </script>");
        return false;
      }
      break;

    case $_FILES['file']['error'] = 4 :
      $qr  = "UPDATE news SET judul = '$title_judul', content = '$content_isi' WHERE id_post = '$id_post'";
      $result = mysqli_query($conn, $qr);
      if ($result) {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('Berita Berhasil Di Update');
              window.location.href='".BASEURL."/Dashboard/news_D.php';
              </script>");
      } else {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('Berita Gagal Di Update".mysqli_error($conn)."');
              window.location.href='".BASEURL."/Dashboard/news_D.php';
              </script>");
        return false;
      }
      break;
    }
  }
}
