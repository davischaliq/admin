<!-- untuk bagian head -->
<?php include_once ('../app/views/head.php'); ?>

<?php
$params = $_GET['id_N'];
$qr = "SELECT * FROM news WHERE id_post = '$params'";
$ex = mysqli_query($conn, $qr);
$result = mysqli_fetch_assoc($ex);
 ?>
<body class="nav-md">
  <!-- awal contaiqiner -->
  <div class="container body">
    <div class="main_container">

      <!-- menu samping -->
      <?php include_once ('../app/views/header.php'); ?>

      <!-- awal isi halaman -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Content News</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <!-- untuk bagian tabel dan awal row tabel -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Post Your Content</h2>
                  <div class="clearfix"></div>
                </div>
              <div class="x_content">
                <a class="btn btn-primary" href="<?= BASEURL; ?>Dashboard/image-views.php?id_N=<?= $result['id_post']; ?>" role="button" target="_blank">View image</a>
            <form method="post" action="<?= BASEURL; ?>app/core/Prosess/update_N.php?id_N=<?= $result['id_post']; ?>" enctype="multipart/form-data">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
              <input type="text" name="judul" class="form-control" value="<?= $result['judul']; ?>" id="inputEmail3" required>
                  </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Content</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"><?= $result['content']; ?></textarea>
              </div>
            <div class="form-group">
          <label for="exampleFormControlFile1">Upload Your Poster</label>
        <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
      <small id="emailHelp" class="form-text text-muted">Berat file maksimal 1MB</small>
        </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" name="submit" class="btn btn-primary">Post</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    <!-- akhir row tabel -->
      <!-- footer -->
      <?php include_once ('../app/views/footer.php'); ?>

    </div>
  </div>
  <!-- akhir container -->

<!-- untuk bagian foot -->
<?php include_once ('../app/views/foot.php'); ?>
