<!DOCTYPE html>
<html>
<head>
    <title>Tugas Modul 8</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
<head>

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

        <?php 
            session_start();
            $nama=$_POST['nama']; 
            $alamat=$_POST['alamat']; 
            $jk = $_POST['jk']; 
            $saldo=$_POST['saldo'];
            $pesanan=$_POST['pesanan']; 
            $jumlah=$_POST['jumlah'];

            if (empty($nama)) {
                header("location:beli.php?errnama= * Nama belum di isi");
            }
            elseif (empty($alamat)) {
                header("location:beli.php?erralamat= * Alamat belum di isi");
            }
            elseif (empty($saldo)) {
                header("location:beli.php?errsaldo= * Saldo belum di isi");
            }
            elseif (empty($jumlah)) {
                header("location:beli.php?errjumlah= * Jumlah belum di isi");
            }
            else {

            }
        ?>
        <br><br><br><br><br>
        <table border="1" width=" 500px" cellspacing="5px" cellpadding="2px" padding="2px" align="center">
            <tr>
                <th colspan="2" align="center">Bukti pembelian</th>
            </tr>
            <tr>
                <td>Saldo Awal</td>
                <td><?php echo $saldo; ?></td>
            </tr>
            <tr>
                <td>Pesanan</td>
                <td><?php echo $pesanan; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $jk; ?></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><?php echo $jumlah; ?></td>
            </tr>
            <tr>
                <td>Sisa Saldo</td>
                <td><?php
        
            //function
            function hasil($saldo, $harga, $jumlah){
                return $saldo - $harga * $jumlah;
            }

            //harga pesanan
            if($pesanan == 'Ikan Cupang'){
                $harga = 1000;
            }
            elseif($pesanan == 'Ikan Guppy'){
                $harga = 1500;
            }
            elseif($pesanan == 'Ikan Mas Koki'){
                $harga = 10000;
            }
            elseif($pesanan == 'Ikan Koi'){
                $harga = 20000;
            }
            elseif($pesanan == 'Ikan Discus'){
                $harga = 75000;
            }
            else{
                $harga = 200000;
            }
            $hasil = hasil($saldo, $harga, $jumlah, $jk );
            echo $hasil;
        
        ?></td>
        </table> <br>
        <div class="hasil" align="center">
        <?php
        
            if($saldo<=0){
                echo "Saldo kurang, pemesanan gagal.";
                }
                elseif($jumlah<=0){
                    echo "Maaf, Anda memasukkan jumlah yang salah.";
                }
                elseif($hasil<0){
                    echo "Maaf uang Anda kurang, pemesanan gagal.";
                }
                else{
                    {
                    $welcome = 'Terima kasih telah melakukan pemesanan atas nama '.$nama;
                    }             
                    echo $welcome.". ";
                    echo "Pesanan akan dikirim ke ".$alamat.".";
                }
                
        ?>
        </div>
<br><br>

<form action="beli.php" align="center">
    <input type="submit" name="Pesan" value="Pesan lagi">
</form>
</body>
</html>
