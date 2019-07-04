<html>
<head>
	<body style="background-image:url(pantai.jpg); "></body>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<!DOCTYPE html>
<html>
<head><style>
		table{
	font-family : algerian,sans-serif;
	border-collapse: collapse;
	width :100%;
}
td,th{
	border :0.5px solid black;
	text-align: Left ;
	padding:20px;
}
tr:nth-child(even){
	background-color: red; 
}
</style>
	<title>Tugas Pemrograman Web</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css">
	<script language="javascript" src="js/javascript.js"></script>
</head>
<body>

<div class="header">
	<br><br><br>
	<CENTER><font color="#000000"width="50%"height ="50%"size="100%"behavior="alternate" direction="right" >BENGKEL ROG<B>(REPUBLIK OF GELAGAHSARI)</B></font></CENTER>

</div>
	<div class="menubar">
		<ul>
			<li><a href="home.html"><b>Home</b></a></li>
			<li><a href="index.html"><b>Biodata</b></a></li>
			<li><a href="materi.html"><b>Keterangan</a></b></li>
			<li><a href="cari.html"><b>Pencarian</b></a></li>
			<li><a href="bukuu.html"><b> Proses</b></a></li>
			<li><a href="lihat.php"><b>Lihat Data</b></a></li>
			<form name="formcari" onSubmit="cari()"><pre>
  			                                    			<input class="search" name="keyword" type="text" placeholder="Cari..." required><input class="button" type="submit" value="Cari">		
			</form></pre>
		</ul>
</div>	



<div class="menu2">
	<center>
	<br><br>
	<h2><font color="black">HALAMAN LIHAT DATA</font></h2>
	<hr width="90%">
	<div class="profil">
	<br>
	
	<br>
	</div>
	<div class="bio">

	<br>
</center>
<br><br><br><br>
	</div>

</div>





</body>
</html>

<?php
error_reporting(0);//Error_reporting adalah bagian dari sebuah fungsi php yang bertugas untuk menangani error. Dalam istilah ini sering di kenal dengan istilah  	error handling, yang artinya adalah sebuah cara pengendalian apabila error terjadi.
echo "<head><title>DATA BAYAR</title></head>";
$fp = fopen("databayar.txt","r");//untuk membuka data file Data bayar.txt sekaligus menggunakan metode append 'a+' untuk dapat di tambahkan 
echo "<table border=0>";
while ($isi = fgets($fp,80))
{
$pisah = explode("|",$isi);
echo "<tr><td>Nama Pelanggan</td><td>: $pisah[0]</td></tr>";//fungsinya untuk Menampilkan Pelanggan  
echo "<tr><td>Nama Barang </td><td>: $pisah[1]</td></tr>";//ungsinya untuk Menampilkan Nama Barang  
echo "<tr><td>Jumlah </td><td>: $pisah[2]</td></tr>";//yaitu itu untuk menampilkan Jumlah
echo "<tr><td>Harga </td><td>: $pisah[3]</td></tr>";//untuk menampilkan harga
echo "<tr><td>Total </td><td>: $pisah[4]</td></tr>";//untuk menampilkan Total
}
echo "</table>";
echo "<a class=btn href=bukuu.html> Isi Buku tamu </a>";
echo "<a class=btn href=dex.php> Profile </a>";
?>

</html>

