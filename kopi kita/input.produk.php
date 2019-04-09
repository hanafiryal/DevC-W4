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
              <a class="nav-link text-uppercase text-expanded" href="transaksi.php"> Transaksi Pembeli</a>
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
      <a class="nav-link active" href="products.php"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Read Record" style="background-color: #321b13; border-color: #cba5a9" >
        Read Record
      </button></a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="input.produk.php"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Input Record" style="background-color: #321b13; border-color: #cba5a9">
        Input Record
      </button></a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="update.php"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Update Record" style="background-color: #321b13; border-color: #cba5a9">
        Update Record
      </button></a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="menu.delete.php"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Delete Record" style="background-color: #321b13; border-color: #cba5a9">
        Delete Record
      </button></a>
    </li>
  </ul>
  <!-- End Menubar -->

<!-- container -->
    <div class="container pt-4">
      <h3 class="mb-4">Input Record Menu</h3>
        <form action="menu.input.php" method="post">
          <table border="0">
            <tr>
              <td style="background-color: #e7e0dd">Kode Menu</td>
              <td>: <input name="kd_menu" type="text" size="10" maxlength="10" value="k00"></td>
            </tr>
            <tr>
              <td style="background-color: #e7e0dd">Nama Menu</td>
              <td>: <input name="nama_menu" type="text" size="20" maxlength="20"></td>
            </tr>
            <tr> 
              <td style="background-color: #e7e0dd"> ID Supplier</td>
              <td>: <input name="id_supplier" type="text" size="10" maxlength="10" value="s00"></td>
            </tr>
            <tr>
              <td style="background-color: #e7e0dd">Harga</td>
              <td>: <input name="Harga" type="text" size="15" maxlength="15"></td>
            </tr>
          </table><br>
          <input class="btn btn-primary" name="btnsubmit" type="submit" value="Input Data">
        </form>
    </div> 
</section>

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
