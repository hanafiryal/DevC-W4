<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CAFE KOPI KITA</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="table.css">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">CAFE</span>
      <span class="site-heading-lower">KOPI KITA</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.php">KOPI KITA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products.php">Products</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="transaksi.php"> Transaksi</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="store.html">Store</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <<section class="page-section about-heading">
      <div class="container">
        <img class="fluid rounded about-heading- mb-3 mb-lg-0" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
               <div class="container pt-4">
    
     <!-- Menubar -->
    <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link active" href="transaksi.php"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Read Record" style="background-color: #321b13; border-color: #cba5a9" >
        Read Record
      </button></a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="input.about.php"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Input Record" style="background-color: #321b13; border-color: #cba5a9">
        Input Record
      </button></a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="update.transaksi.php"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Update Record" style="background-color: #321b13; border-color: #cba5a9">
        Update Record
      </button></a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="hapus.transaksi.php"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Delete Record" style="background-color: #321b13; border-color: #cba5a9">
        Delete Record
      </button></a>
    </li>
  </ul>
  <!-- End Menubar -->

   <!-- container -->
    <div class="container pt-4">
      <h3 class="mb-4">Form Update Record Transaksi</h3>
      <?php
      include "koneksi.php";
        $sql = mysqli_query($connection, "SELECT * FROM transaksi WHERE kd_transaksi='$_GET[kd]'");
        while($data = mysqli_fetch_array($sql)){
        ?>
        <form action="prosesupdate.transaksi.php" method="post">
          <table border="0">
            <tr>
              <td>Kode Transaksi</td>
              <td>: <input name="kd_transaksi" type="text" size="10" maxlength="10" value="<?php echo $data['kd_transaksi']; ?>"></td>
            </tr>
            <tr>
              <td>Tanggal Beli</td>
              <td>: <input name="tgl_beli" type="text" size="20" maxlength="20" value="<?php echo $data['tgl_beli']; ?>"></td>
            </tr>
            <tr>
              <td>ID Karyawan</td>
              <td>: <input name="id_karyawan" type="text" size="13" maxlength="13" value="<?php echo $data['id_karyawan']; ?>"></td>
            </tr>
            <tr>
              <td>Kode Pembeli</td>
              <td>: <input name="kd_pembeli" type="text" size="10" maxlength="10" value="<?php echo $data['kd_pembeli']; ?>"></td>
            </tr>
            <tr>
              <td>Kode Menu</td>
              <td>: <input name="kd_menu" type="text" size="10" maxlength="10" value="<?php echo $data['kd_menu']; ?>"></td>
            </tr>
            <tr>
              <td>Nama Menu</td>
              <td>: <input name="nama_menu" type="text" size="20" maxlength="20" value="<?php echo $data['nama_menu']; ?>"></td>
            </tr>
            <tr>
              <td>Jumlah Beli</td>
              <td>: <input name="jumlah_beli" type="text" size="10" maxlength="10" value="<?php echo $data['jumlah_beli']; ?>"></td>
            </tr>
            <tr>
              <td>Total Bayar</td>
              <td>: <input name="total_bayar" type="text" size="10" maxlength="10" value="<?php echo $data['total_bayar']; ?>"></td>
            </tr>
            <tr>
          </table><br>
          <input class="btn btn-primary" name="btnsubmit" type="submit" value="Input Data">
        </form>
        <?php } ?>
    </div> 
    </section>
    <!-- end container -->

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; CAFE KOPI KITA 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>