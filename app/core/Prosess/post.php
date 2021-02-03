<?php
if (isset($_POST['submit'])) {
  require_once '../db.php';
  require_once '../config.php';
  // code...
  if (isset($_GET['News_'])) {
    // code...
    $title = $_POST['judul'];
    $content = $_POST['content'];

    $satuN = $_FILES['file']['name'];
    $satuE = $_FILES['file']['error'];
    $satuT = $_FILES['file']['tmp_name'];
    $satuS = $_FILES['file']['size'];

    $valid = ['png', 'jpeg', 'jpg'];

    $string = "CONTENT_";
    $uniq = uniqid();
    $id = sha1($string . $uniq);
    $dateNow = date('Y-m-d');

    if (isset($_FILES['file'])) {
      // code...
      if ($satuE === 4) {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('Anda belum memilih gambar yang harus di upload');
              window.location.href='".BASEURL."/Dashboard/News_P.php';
              </script>");
        return false;
      }
      if ($satuS > 1000000) {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('Gambar yang di upload terlalu besar, Mohon upload gambar dengan berat file maksimal 1MB');
              window.location.href='".BASEURL."/Dashboard/News_P.php';
              </script>");
              return false;
          }else {
            $ekstensi = strtolower(pathinfo($satuN,PATHINFO_EXTENSION));
              if (in_array($ekstensi, $valid)) {
                 $image = file_get_contents(addslashes($_FILES['file']['tmp_name']));

                 $id = mysqli_escape_string($conn, $id);
                 $image = mysqli_escape_string($conn, $image);
                 $title = mysqli_escape_string($conn, $title);
                 $content = mysqli_escape_string($conn, $content);
                 $dateNow = mysqli_escape_string($conn, $dateNow);

                 $qr  = "INSERT INTO news (id, id_post, img, judul, content, tgl)
                 VALUES ('','$id', '$image', '$title', '$content', '$dateNow')";
                 $result = mysqli_query($conn, $qr);
                 if ($result) {
                   echo ("<script LANGUAGE='JavaScript'>
                         window.alert('Data berita berhasil di tambahkan');
                         window.location.href='".BASEURL."/Dashboard/news_D.php';
                         </script>");
                 } else {
                   echo ("<script LANGUAGE='JavaScript'>
                         window.alert('Data berita gagal di tambahkan'" . mysqli_error($conn) . ");
                         window.location.href='".BASEURL."/Dashboard/News_P.php';
                         </script>");
                    return false;
                 }
              }else {
                echo ("<script LANGUAGE='JavaScript'>
                      window.alert('ekstensi gambar tidak bisa di terima');
                      window.location.href='".BASEURL."/Dashboard/News_P.php';
                      </script>");
                return false;
              }
          }
        }
      }
  if (isset($_GET['Movie_'])) {
    // code...
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

    $valid = ['png', 'jpeg', 'jpg'];

    $string = "MOVIE_";
    $uniq = uniqid();
    $id = sha1($string . $uniq);

    if (isset($_FILES['file'])) {
      if ($satuE === 4) {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('Anda belum memilih gambar yang harus di upload');
              window.location.href='".BASEURL."/Dashboard/Movie_P.php';
              </script>");
        return false;
      }
      if ($satuS > 1000000) {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('Gambar yang di upload terlalu besar, Mohon upload gambar dengan berat file maksimal 1MB');
              window.location.href='".BASEURL."/Dashboard/Movie_P.php';
              </script>");
              return false;
          }else {
            $ekstensi = strtolower(pathinfo($satuN,PATHINFO_EXTENSION));
              if (in_array($ekstensi, $valid)) {
                 $image = file_get_contents(addslashes($_FILES['file']['tmp_name']));
                 $id = mysqli_escape_string($conn, $id);
                 $title = mysqli_escape_string($conn, $title);
                 $produser = mysqli_escape_string($conn, $produser);
                 $sutradara = mysqli_escape_string($conn, $sutradara);
                 $genre = mysqli_escape_string($conn, $gendre);
                 $realised = mysqli_escape_string($conn, $realised);
                 $cast = mysqli_escape_string($conn, $cast);
                 $yt = mysqli_escape_string($conn, $yt);
                 $content = mysqli_escape_string($conn, $content);
                 $image = mysqli_escape_string($conn, $image);
                 $dateNow = mysqli_escape_string($conn, $dateNow);

                 $qr  = "INSERT INTO movie (id, id_post, judul, img, produser, sutradara, gendre, realised, cast, linkYT, sinopsis)
                 VALUES ('', '$id', '$title', '$image', '$produser', '$sutradara', '$gendre', '$realised', '$cast', '$yt', '$content')";
                 $result = mysqli_query($conn, $qr);
                 if ($result) {
                   echo ("<script LANGUAGE='JavaScript'>
                         window.alert('Data Movie Berhasil Di tambahkan');
                         window.location.href='".BASEURL."/Dashboard/movie_D.php';
                         </script>");
                 } else {
                   echo ("<script LANGUAGE='JavaScript'>
                         window.alert('Data movie gagal di tambahkan'" . mysqli_error($conn) . ");
                         window.location.href='".BASEURL."/Dashboard/Movie_P.php';
                         </script>");
                 }
              }else {
                echo ("<script LANGUAGE='JavaScript'>
                      window.alert('ekstensi gambar tidak bisa di terima');
                      window.location.href='".BASEURL."/Dashboard/Movie_P.php';
                      </script>");
                return false;
              }
            }
          }
        }


        if (isset($_GET['Movie_O'])) {
          // code...
          $title = $_POST['judul'];
          $pemilik = $_POST['pemilik'];
          $category = $_POST['category'];
          $penonton = $_POST['penonton'];
          $total = $_POST['total'];
          $content = $_POST['content'];

          $satuN = $_FILES['file']['name'];
          $satuE = $_FILES['file']['error'];
          $satuT = $_FILES['file']['tmp_name'];
          $satuS = $_FILES['file']['size'];

          $valid = ['png', 'jpeg', 'jpg'];

          $string = "MOVIE_O";
          $uniq = uniqid();
          $id = sha1($string . $uniq);
          $dateNow = date('Y-m-d');
          if (isset($_FILES['file'])) {
            if ($satuE === 4) {
              echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Anda belum memilih gambar yang harus di upload');
                    window.location.href='".BASEURL."/Dashboard/Movie_PO';
                    </script>");
              return false;
            }
            if ($satuS > 1000000) {
              echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Gambar yang di upload terlalu besar, Mohon upload gambar dengan berat file maksimal 1MB');
                    window.location.href='".BASEURL."/Dashboard/Movie_PO';
                    </script>");
                    return false;
                }else {
                  $ekstensi = strtolower(pathinfo($satuN,PATHINFO_EXTENSION));
                    if (in_array($ekstensi, $valid)) {
                       $image = file_get_contents(addslashes($_FILES['file']['tmp_name']));
                       $id = mysqli_escape_string($conn, $id);
                       $title = mysqli_escape_string($conn, $title);
                       $pemilik = mysqli_escape_string($conn, $pemilik);
                       $category = mysqli_escape_string($conn, $category);
                       $penonton = mysqli_escape_string($conn, $penonton);
                       $total = mysqli_escape_string($conn, $total);
                       $content = mysqli_escape_string($conn, $content);
                       $image = mysqli_escape_string($conn, $image);

                       $qr  = "INSERT INTO movieoncoming (id, judul, img, pemilik, category, penonton, T_anggaran, anggaran_T, sinopsis, tgl)
                       VALUES ('$id', '$title', '$image', '$pemilik', '$category', '$penonton', '$total', '', '$content', '$dateNow')";
                       $result = mysqli_query($conn, $qr);
                       if ($result) {
                         echo ("<script LANGUAGE='JavaScript'>
                               window.alert('Data Movie Berhasil Di tambahkan');
                               window.location.href='".BASEURL."/Dashboard/movie_DO';
                               </script>");
                       } else {
                         echo ("<script LANGUAGE='JavaScript'>
                               window.alert('Data movie gagal di tambahkan'" . mysqli_error($conn) . ");
                               window.location.href='".BASEURL."/Dashboard/Movie_PO';
                               </script>");
                               return false;
                       }
                    }else {
                      echo ("<script LANGUAGE='JavaScript'>
                            window.alert('ekstensi gambar tidak bisa di terima');
                            window.location.href='".BASEURL."/Dashboard/Movie_PO';
                            </script>");
                      return false;
                    }
                  }
                }
              }
}




 ?>
