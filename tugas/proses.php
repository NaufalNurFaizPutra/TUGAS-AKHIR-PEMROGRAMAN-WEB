<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body background="belajar.jpg">
<div class="jumbotron">

<?php
echo "<head><title>DATA BAYAR</head></title>";
$fp = fopen("databayar.txt","a+");
$nama = $_POST['nama'];
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$file = $_FILES["file"]["name"];
$tmp_name = $_FILES["file"]["tmp_name"];
move_uploaded_file($tmp_name, "img/".$file);

fputs($fp,"$nama|$nama_barang|$jumlah|$harga|$file\n");
fclose($fp);
echo " Terima Kasih Atas Partisipasi Anda Mengisi Pembayaran<br>";
echo "<a class=btn href=bukuu.html> Isi Buku Tamu </a><br>";
echo "<a class=btn href=home.html> Lihat Profile </a><br> ";
?>
</div>
</body>
</html>