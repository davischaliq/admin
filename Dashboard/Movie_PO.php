<!-- untuk bagian head -->
<?php include_once ('../app/views/head.php'); ?>
<body class="nav-md">
  <!-- awal container -->
  <div class="container body">
    <div class="main_container">

      <!-- menu samping -->
      <?php include_once ('../app/views/header.php'); ?>

      <!-- awal isi halaman -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Content Movie</h3>
            </div>
          </div>
          <!-- untuk bagian tabel dan awal row tabel -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Post Your Content</h2>
                  <div class="clearfix"></div>
                </div>
              <div class="x_content">
            <form method="post" action="<?= BASEURL; ?>app/core/Prosess/post.php?Movie_O" enctype="multipart/form-data">
          <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
          <input type="text" name="judul" class="form-control" id="inputEmail3" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Pemilik ide</label>
              <input type="text" name="pemilik" class="form-control" id="inputEmail3" required>
            </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Category</label>
              <input type="text" name="category" class="form-control" id="inputEmail3" required>
            </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Penonton</label>
              <input type="text" name="penonton" class="form-control" id="inputEmail3" required>
            </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Total Anggaran</label>
              <input type="text" name="total" class="form-control" id="inputEmail3" required>
              <small id="emailHelp" class="form-text text-muted">Inputkan Angka Nominal Saja Tanpa Titik</small>
            </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Sinopsis</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            <div class="form-group">
          <label for="exampleFormControlFile1">Upload Your Poster</label>
        <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
      <small id="emailHelp" class="form-text text-muted">Photo ukuran 1920px x 1080px ukuran maksimal 1MB</small>
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
      </div>
        </div>
      <!-- akhir isi halaman -->
    <!-- footer -->
  <?php include_once ('../app/views/footer.php'); ?>
    </div>
      </div>
        <!-- akhir container -->
          <!-- untuk bagian foot -->
          <?php include_once ('../app/views/foot.php'); ?>
