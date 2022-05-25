<!doctype html>
<html lang="en">
  <head>
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
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,64L34.3,74.7C68.6,85,137,107,206,144C274.3,181,343,235,411,250.7C480,267,549,245,617,218.7C685.7,192,754,160,823,133.3C891.4,107,960,85,1029,112C1097.1,139,1166,213,1234,229.3C1302.9,245,1371,203,1406,181.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- variasi -->
    <section id="variasi">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Variasi</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/cupang.jpg" class="card-img-top" alt="cupang">
                        <div class="card-body">
                            <div class="row">
                                <div class="col"><b>Ikan Cupang</b></div>
                                <div class="col">Rp 1000,00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/guppy.jpg" class="card-img-top" alt="guppy">
                        <div class="card-body">
                        <div class="row">
                                <div class="col"><b>Ikan Guppy</b></div>
                                <div class="col">Rp 1500,00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/ikan-mas-koki.png" class="card-img-top" alt="mas koki">
                        <div class="card-body">
                        <div class="row">
                                <div class="col"><b>Ikan Emas Koki</b></div>
                                <div class="col">Rp 10.000,00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/koi1.jpg" class="card-img-top" alt="koi">
                        <div class="card-body">
                        <div class="row">
                                <div class="col"><b>Ikan Koi</b></div>
                                <div class="col">Rp 20.000,00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/discus-ikan.jpg" class="card-img-top" alt="discus">
                        <div class="card-body">
                        <div class="row">
                                <div class="col"><b>Ikan Discus</b></div>
                                <div class="col">Rp 75.000,00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/arwana.png" class="card-img-top" alt="arwana">
                        <div class="card-body">
                        <div class="row">
                                <div class="col"><b>Ikan Arwana</b></div>
                                <div class="col">Rp 200.000,00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,128L34.3,122.7C68.6,117,137,107,206,90.7C274.3,75,343,53,411,53.3C480,53,549,75,617,96C685.7,117,754,139,823,160C891.4,181,960,203,1029,197.3C1097.1,192,1166,160,1234,128C1302.9,96,1371,64,1406,48L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir  -->

    <!-- Beli -->
    <section id="beli">
        <div class="container">
            
            <div class="row ">
                <div class="col text-center mb-3">
                    <h2>Beli</h2>
                </div>
                <div class="row">
                <form action="hasil.php" method="post">  
                    <div class="nama">
                    Nama:
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" >
                <?php
                    if(isset($_GET['errnama'])) {
                        $err1 = $_GET['errnama'];
                        echo $err1;
                    }
                ?>
                    </div>
                    <div class="alamat">
                    Alamat:
                <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat">
                <?php
                    if(isset($_GET['erralamat'])) {
                        $err2 = $_GET['erralamat'];
                        echo $err2;
                    }
                ?>
                    </div>
                
                <div class="totalSaldo">
                <label for="saldo">Total Saldo :</label>
                    <input type="number" name="saldo" id="saldo" placeholder="Masukkan Saldo">
                    <?php
                    if(isset($_GET['errsaldo'])) {
                        $err3 = $_GET['errsaldo'];
                        echo $err3;
                    }
                ?>                    
                </div>    
                <div class="jenisKelamin">

                <label for="jk">Jenis Kelamin :</label>
                        <Select name="jk" id="jk">
                        <option value=' Jantan'>Jantan</option>
                        <option value=' Betina'>Betina</option>
                        </Select><br><br>
                    <label for="pesanan">Pesanan Anda :</label>
                        <Select name="pesanan" id="pesanan">
                        <option value='Ikan Cupang'>Ikan Cupang - Rp 1.000</option>
                        <option value='Ikan Guppy'>Ikan Guppy - Rp 1.500</option>
                        <option value='Ikan Mas Koki'>Ikan Mas Koki - Rp 10.000</option>
                        <option value='Ikan Koi'>Ikan Koi - Rp 20.000</option>
                        <option value='Ikan Discus'>Ikan Discus - Rp 75.000</option>
                        <option value='Ikan Arwana'>Ikan Arwana - Rp 200.000</option>
                        </Select>
                </div>
                <div class="jumlah">
                Jumlah :
                    <input type="number" name="jumlah" placeholder="Masukkan Jumlah">
                        <?php 
                            if(isset($_GET["errjumlah"])) {
                                $err4 = $_GET["errjumlah"];
                                echo $err4;
                            }
                        ?>
                </div>
                    
        <input type="submit" name="Pesan" value="Pesan sekarang">
        <input type="reset" value="Pesan ulang">
    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Beli -->




   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>