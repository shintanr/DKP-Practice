<?php

echo "Daftar Anggota Kelompok 22";
echo "Masukkana nama Depan Anda dalam huruf kapital: ";
$nama = strtoupper(trim(fgets(STDIN))); 

if ($nama == "SALSABILA"){
    echo "Nama Anda termasuk anggota kelommpok 22. Silakan konfirmasi menggunakan NIM Anda.";
    echo "Masukkan NIM Anda: ";
    $nim = trim(fgets(STDIN));
    if ($nim == "21120121130042"){
        echo "Anda adalah " . $nama . ". Anda termasuk anggota kelompok 22";

        } else {
        echo "NIM yang Anda masukkan salah. Jangan bersedih,, kami akan mengkonfirmasi sekali lagi menggunakan Jurusan";
        echo "Masukkan jurusan Anda: ";
        $jurusan = trim(fgets(STDIN));
        if($jurusan == "KOMPUTER"){
            echo "selamat! Anda adalah ". $nama . ". Anda termasuk anggota kelompok 22";
        }else {
            echo "Kami ragu Anda merupakan kelompok 22. Silakan coba lagi.";
        }
    }
}else if ($nama == "LINA"){
    echo "Nama Anda termasuk anggota kelommpok 22. Silakan konfirmasi menggunakan NIM Anda.";
    echo "Masukkan NIM Anda: ";
    $nim = trim(fgets(STDIN));
    if ($nim == "21120121120027"){
        echo "Anda adalah " . $nama . ". Anda termasuk anggota kelompok 22";
    }else {
        echo "NIM yang Anda masukkan salah. Jansgan bersedih,, kami akan mengkonfirmasi sekali lagi menggunakan Jurusan";
        echo "Masukkan jurusan Anda: ";
        $jurusan = trim(fgets(STDIN));
        if($jurusan == "KOMPUTER"){
            echo "selamat! Anda adalah ". $nama . ". Anda termasuk anggota kelompok 22";
        }else {
            echo "Kami ragu Anda merupakan kelompok 22. Silakan coba lagi.";
        }
        }
} else if ($nama == "SHINTA"){
    echo "Nama Anda termasuk anggota kelommpok 22. Silakan konfirmasi menggunakan NIM Anda.";
    echo "Masukkan NIM Anda: ";
    $nim = trim(fgets(STDIN));
    if ($nim == "21120121140093"){
        echo "Anda adalah " . $nama . ". Anda termasuk anggota kelompok 22";
    }else {
        echo "NIM yang Anda masukkan salah. Jansgan bersedih,, kami akan mengkonfirmasi sekali lagi menggunakan Jurusan";
        echo "Masukkan jurusan Anda: ";
        $jurusan = trim(fgets(STDIN));
        if($jurusan == "KOMPUTER"){
            echo "selamat! Anda adalah ". $nama . ". Anda termasuk anggota kelompok 22";
        }else {
            echo "Kami ragu Anda merupakan kelompok 22. Silakan coba lagi.";
        }
    }
} else if ($nama == "HAMDI"){
    echo "Nama Anda termasuk anggota kelommpok 22. Silakan konfirmasi menggunakan NIM Anda.";
    echo "Masukkan NIM Anda: ";
    $nim = trim(fgets(STDIN));
    if ($nim == "2112012010025"){
        echo "Anda adalah " . $nama . ". Anda termasuk anggota kelompok 22";
    }else {
        echo "NIM yang Anda masukkan salah. Jansgan bersedih,, kami akan mengkonfirmasi sekali lagi menggunakan Jurusan";
        echo "Masukkan jurusan Anda: ";
        $jurusan = trim(fgets(STDIN));
        if($jurusan == "KOMPUTER"){
            echo "selamat! Anda adalah ". $nama . ". Anda termasuk anggota kelompok 22";
        }else {
            echo "Kami ragu Anda merupakan kelompok 22. Silakan coba lagi.";
        }
        }
    } else{
        echo "Anda bukan anggota kelompok 22, suh wkwk";
    }
