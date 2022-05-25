<!doctype html>
<html lang="en">
  <head>
  <title>Tugas Modul 8</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"> <i class="bi bi-bag-fill"></i> TOKOIKAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#variasi">Variasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#beli">Beli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
     <!-- Akhir Navbar -->


      <!-- Jumbotron -->
    <section id="beranda" class="jumbotron text-center">
        <img src="img/logo-ikan1.jpg" alt="Gambar Profile" width="200" class="rounded-circle img-thumbnail">
        <h1 class="display-4">Selamat Datang di TOKOIKAN</h1>
        <p >Tersedia Berbagai Jenis Ikan Hias</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,64L34.3,74.7C68.6,85,137,107,206,144C274.3,181,343,235,411,250.7C480,267,549,245,617,218.7C685.7,192,754,160,823,133.3C891.4,107,960,85,1029,112C1097.1,139,1166,213,1234,229.3C1302.9,245,1371,203,1406,181.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir Jumbotron -->


    <!-- Beli -->
   <section id="pemesanan">
       <div class="container">
           <div class="row text-center" mb-3>
               <div class="col">
                   <h2>Pemesanan Ikan</h2>
               </div>
           </div>
           <div class="row justify-content-center">
               <div class="col md-5">
               <form action="hasil.php" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>      
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
            <?php
                    if(isset($_GET['errnama'])) {
                        $err1 = $_GET['errnama'];
                        echo $err1;
                    }
                ?>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>      
            <input type="text"  class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat">
            <?php
                    if(isset($_GET['erralamat'])) {
                        $err2 = $_GET['erralamat'];
                        echo $err2;
                    }
                ?>
        </div>   
        <div class="mb-3">
            <label for="saldo" class="form-label">Total Saldo</label>      
            <input type="number" class="form-control" name="saldo" id="saldo"placeholder="Masukkan Saldo">
            <?php
                    if(isset($_GET['errsaldo'])) {
                        $err3 = $_GET['errsaldo'];
                        echo $err3;
                    }
            ?>
        </div>
        <div class="mb-3"> 
        <label for="jk" class="form-label">Jenis Kelamin</label>
        <select name="jk" class="form-control" id="jk">
            <option value=' Jantan'>Jantan</option>
            <option value=' Betina'>Betina</option>
        </select> 
        </div>
        
        </div>
        <div class="mb-3"> 
        <label for="pesanan" class="form-label">Pesanan Anda</label>
        <select name="pesanan" class="form-control" id="pesanan">
            <option selected>Pilih Jenis</option>
            <option value='Ikan Cupang'>Ikan Cupang - Rp 1.000</option>
                <option value='Ikan Guppy'>Ikan Guppy - Rp 1.500</option>
                <option value='Ikan Mas Koki'>Ikan Mas Koki - Rp 10.000</option>
                <option value='Ikan Koi'>Ikan Koi - Rp 20.000</option>
                <option value='Ikan Discus'>Ikan Discus - Rp 75.000</option>
                <option value='Ikan Arwana'>Ikan Arwana - Rp 200.000</option>
        </select> 
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label" >Jumlah</label>      
            <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Masukkan Jumlah">
            <?php 
                    if(isset($_GET["errjumlah"])) {
                        $err4 = $_GET["errjumlah"];
                            echo $err4;
                            }
            ?>
        </div>  
        </div>

        <div class="row justify-content-left">
        <div class="col-4">
        <input class="btn btn-primary" type="submit" nama="Pesan" value="Pesan Sekarang">
        </div>
        
        <div class="col-4">
        <input class="btn btn-primary" type="reset" value="Pesan Ulang">
        </div>
    </div>
   
    </form>
               </div>
           </div>
       </div>
   </section>
    <!-- Akhir Beli -->

   
    
</body>
<br>
<br>
<br>
</html>
