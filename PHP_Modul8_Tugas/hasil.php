<!DOCTYPE html>
<html>
<head>
    <title>Tugas Akhir Praktikum DKP</title>
    <link rel="stylesheet" href="styleweb.css">
<head>

<body>
    <nav>
        <div class="wrapper">
        <div class="logo"><a href="http://localhost/TugasModul8.php">TOKO IKAN</a></div>
    </nav>
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
            else if (empty($alamat)) {
                header("location:beli.php?erralamat= * Alamat belum di isi");
            }
            else if (empty($saldo)) {
                header("location:beli.php?errsaldo= * Saldo belum di isi");
            }
            else if (empty($jumlah)) {
                header("location:beli.php?errjumlah= * Jumlah belum di isi");
            }
            else {

            }
        ?>

        <table border="1">
            <tr>
                <th colspan="2">Bukti pembelian</th>
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
<br><br>

<form action="beli.php">
    <input type="submit" name="Pesan" value="Pesan lagi">
</form>
</body>
</html>
