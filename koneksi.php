 <?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "Tiket_Travel";

$kon = mysqli_connect($host, $user, $pass);
if (!$kon) 
die("GagalKoneksi...!!!"); 

$hasil = mysqli_select_db($kon,$dbname);
if(!$hasil){
	$hasil = mysqli_query($kon, "Create Database $dbname");
	if (!$hasil) 
	die ("Gagal Membuat Databese");
else
$hasil = mysqli_select_db($kon, $dbname);
if(!$hasil) die ("GagalKonek Database...!!");
}

$sqlTabelPendaftaran = "create table if not exists pendafatar (
						telepon varchar(20) not null primary key,
						nama varchar (40) not null,
						jk enum ('P','W'),
						umur int not null,
						email varchar (30) not null,
						alamat text not null,
						nick varchar (20) not null,
						password varchar (30) not null
					)";

$sqlTabelPelanggan = "create table if not exists pelanggan (
					nick_user int auto_increment not null primary key,
					pass_user varchar(40) not null,
					nama varchar(40) not null,
					alamat varchar(40) not null,
					jk varchar(10) not null,
					umur int not null,
					email varchar(50) not null,
					notelp varchar(20) not null
					)";

$sqlTabelPemesanan = "create table if not exists pemesanan (
					kdpesan int auto_increment not null primary key,
					jum int (5) not null,
					nama varchar (20) not null,
					email varchar (20) not null,
					telepon int (14) not null
					)";

mysqli_query ($kon, $sqlTabelPendaftaran) or die("Gagal Buat Tabel Pendaftaran");
mysqli_query ($kon, $sqlTabelPelanggan) or die("Gagal Buat Tabel pelanggan");
mysqli_query ($kon, $sqlTabelPemesanan) or die("Gagal Buat Tabel Pemesanan");

?>