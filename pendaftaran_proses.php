<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pemesanan Tiket Travel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myPage">Pemesanan Tiket Travel</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                  <!--  <li><a href="#band">Profil</a></li> -->
                    <li><a href="hal_login.php">Login</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/home.jpg" alt="" width="1200" height="700">
            </div>

            <div class="item">
                <img src="images/home1.jpg" alt="" width="1200" height="700">
            </div>

            <div class="item">
                <img src="images/home2.jpg" alt="" width="1200" height="700">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Container (The Band Section) -->
    <div id="intro" class="container text-center bg-1">
        <h4>Pemesanan Tickets Travel</h4>
<?php
	session_start();
    $nama =$_POST['nama'];
    $jk =$_POST['jk'];
    $umur =$_POST['umur'];
    $Tempat =$_POST['Tempat'];
    $Tgl =$_POST['Tgl'];
    $Bln =$_POST['Bln'];
    $Thn =$_POST['Thn'];
    $telepon =$_POST['telepon'];
    $email =$_POST['email'];
    $alamat =$_POST['alamat'];
    $nick =$_POST['nick'];
    $password =md5($_POST['password']);
	
$dataValid="YA";
if (strlen(trim($nama))==0){
echo "Nama Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($jk))==0){
echo "Jenis Kelamin Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($umur))==0){
echo "Umur Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($Tempat))==0){
echo "Tempat Tanggal Lahir Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($Tgl))==0){
echo "Tanggal Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($Bln))==0){
echo "Bulan Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($Thn))==0){
echo "Tahun Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($telepon))==0){
echo "Nomor Telepon Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($alamat))==0){
echo "Alamat Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($email))==0){
echo "Email Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($nick))==0){
echo "Nick User Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($password))==0){
echo "Password User Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if ($dataValid=="TIDAK"){
echo "Masih ada kesalahan, silakan perbaiki! </br>";
echo "<input type='button' value='Kembali'
	onClick='self.history.back()'>";
exit;
}
echo "<b>Selamat Anda Behasil Mendaftar </b></br>";
echo "Nama Lengkap              : $nama<br>";
echo "Jenis Kelamin             : $jk<br>";
echo "Umur                      : $umur<br>";
echo "Tempat dan Tanggal Lahir  : $Tempat, $Tgl/$Bln/$Thn<br>";
echo "Nomor Telepon             : $telepon<br>";
echo "Email                     : $email<br>";
echo "Alamat                    : $alamat<br>";
echo "Nick User                 : $nick<br>";
echo "Password User             : $password<br>";
echo "<h3>Dipersilahkan Anda Untuk Login</h3>";
?>
    </div>
    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p>Website by <a href="">www.ticketstravel.com</a></p>
    </footer>
</body>
</html>