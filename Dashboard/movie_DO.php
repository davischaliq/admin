<!-- untuk bagian head -->
<?php include_once ('../app/views/head.php'); ?>

<?php
$params = $_SESSION['admin'];
$cek = mysqli_escape_string($conn, $params);
$qr = "SELECT * FROM movieoncoming";
$ex = mysqli_query($conn, $qr);
 ?>
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
          <div class="clearfix"></div>
          <!-- untuk bagian tabel dan awal row tabel -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Movie List</h2>
                  <div class="clearfix"></div>
                </div>
              <div class="x_content">

            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul Film</th>
                  <th scope="col">Pemilik</th>
                  <th scope="col">Category</th>
                  <th scope="col">Penonton</th>
                  <th scope="col">Total Anggaran</th>
                  <th scope="col">Sinopsis</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <?php
              $no = 0;
              while ($result = mysqli_fetch_assoc($ex)) {
                $no++;
                ?>
            <tbody>
              <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $result['judul']; ?> <br> <img src="<?= BASEURL; ?>app/core/view_image.php?id_MO=<?= $result['id']; ?>" alt="..." class="img-thumbnail"></td>
                <td></td>
                <td><?= $result['pemilik']; ?></td>
                <td><?= $result['category']; ?></td>
                <td><?= $result['penonton']; ?></td>
                <td><?= $result['T_anggaran']; ?></td>
                <td><?= $result['sinopsis']; ?></td>
                <td>
                  <a class="btn btn-success" href="https://www.testingmidtrans.pfn.co.id/Movie/D_Oncoming?Set_One=<?php echo $result['id']; ?>" target="_blank"><i class="far fa-eye"></i></a>
                  <a class="btn btn-primary" href="MovieO_PU.php?id_MO=<?php echo $result['id']; ?>"><i class="fa fa-edit"></i> </a>
                  <a class="btn btn-danger" href="javascript:;" data-id="<?php echo $result['id']; ?>" data-toggle="modal" data-target="#modal-konfirmasihapusbarang"><i class="fa fa-trash"></i> </a>
                </td>
              </tr>
             </tbody>
           <?php } ?>
          </table>
        </div>
      </div>
    </div>
  </div>
          <!-- akhir row tabel -->

          <!--Modal konfirmasi menggunakan bootstrap 3.3.7-->
          <div class="modal fade" id="modal-konfirmasihapusbarang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title">Konfirmasi</h4>
                      </div>
                      <div class="modal-body">
                          Apakah Anda Yakin Ingin Menghapus Data Barang Ini ?
                      </div>
                      <div class="modal-footer">
                        <a href="javascript:;" id="hapus-data-barang" class="btn btn-danger">Hapus</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                      </div>
                  </div>
              </div>
          </div>

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

<!-- koding hapus -->
<script type="text/javascript">
  $(document).ready(function () {

    $('#modal-konfirmasihapusbarang').on('show.bs.modal',
    function (event)
    {
      var div   = $(event.relatedTarget);
      var id    = div.data('id');
      var modal = $(this);
      modal.find('#hapus-data-barang').attr("href","../app/core/Prosess/hapus.php?id_MO="+id);
    })
  });
</script>
