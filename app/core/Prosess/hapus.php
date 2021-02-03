<?php
require_once '../db.php';
switch (isset($_GET)) {
  case isset($_GET['id_M']):
    // code...
    $id = $_GET['id_M'];
    $id = mysqli_escape_string($conn, $id);
    $qr   = "DELETE FROM movie WHERE id_post = '$id'";
    $result = mysqli_query($conn, $qr);
    if ($result) {
    // flash::setFlash('success', 'Your profile updated', 'Success');
    header("location:" . BASEURL . 'Dashboard/');
    } else {
    echo "data berhasil di hapus. " . mysqli_error($conn);
    return false;
  }
    break;

  case isset($_GET['id_N']):
    // code...
    $id = $_GET['id_N'];
    $id = mysqli_escape_string($conn, $id);
    $qr   = "DELETE FROM news WHERE id_post = '$id'";
    $result = mysqli_query($conn, $qr);
    if ($result) {
    // flash::setFlash('success', 'Your profile updated', 'Success');
    header("location:" . BASEURL . 'Dashboard/');
    } else {
    echo "data berhasil di hapus. " . mysqli_error($conn);
    return false;
  }
    break;
    case isset($_GET['id_MO']):
      // code...
      $id = $_GET['id_MO'];
      $id = mysqli_escape_string($conn, $id);
      $qr   = "DELETE FROM movieoncoming WHERE id = '$id'";
      $result = mysqli_query($conn, $qr);
      if ($result) {
      // flash::setFlash('success', 'Your profile updated', 'Success');
      header("location:" . BASEURL . 'Dashboard/');
      } else {
      echo "data berhasil di hapus. " . mysqli_error($conn);
      return false;
    }
      break;
}
