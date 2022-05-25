<?php
$warnaFavorit = "merah";

switch ($warnaFavorit) {
  case "merah":
    echo "Warna favoritmu merah!";
    break;
  case "biru":
    echo "Warna fvoritmu biru!";
    break;
  default:
    echo "Warna favoritmu bukan merah atau biru!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$makanan = ["1. pecel lele", "2. Nasi goreng", "3. Kwetiau", "4. Mie ayam"];

foreach ($makanan as $mkn){
    echo $mkn;
    echo "<br/>";
}



?>