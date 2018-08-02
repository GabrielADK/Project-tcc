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
                    <li><a href="hal_awal.php">Home</a></li>
                  <!--  <li><a href="#band">Profil</a></li> -->
                    <li><a href="tempat_wisata.php">Paket Wisata</a></li>
                    <li><a href="index.php">LogOut</a></li>
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

	<div class="container-fluid">

	  <h1>Daftar Tempat Wisata</h1>
	  
	  <table class="table table-bordered">
		  <tr>
			<td><img src="images/borobudur.jpg" class="rounded" alt="Cinque Terre" width="380" height="236"> <br /><br />
			<b> Keterangan : </b> <p> Borobudur adalah sebuah candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah, Indonesia. Candi ini berlokasi di kurang lebih 100 km di sebelah barat daya Semarang, 86 km di sebelah barat Surakarta, dan 40 km di sebelah barat laut Yogyakarta. </p><br />
			Harga : Rp 2.000.000 <br /> <br /> 
			<a href="form-pesan.php" class="btn btn-success">Pesan</button> <br />
			</td>

		  

			<td><img src="images/prambanan.jpg" class="rounded" alt="Cinque Terre" width="390" height="236"> <br /><br />
			<b> Keterangan : </b> <p> Candi Prambanan / Candi Roro Jonggrang adalah candi Hindu terbesar di Indonesia yang dibangun pada abad ke-9 masehi. Candi ini dipersembahkan untuk Trimurti, tiga dewa utama Hindu yaitu Brahma sebagai dewa pencipta, Wishnu sebagai dewa pemelihara, dan Siwa sebagai dewa pemusnah. </p> <br />
			Harga : Rp 2.000.000 <br /> <br /> 
			<a href="form-pesan.php" class="btn btn-success">Pesan</button> <br />
			</td>
	
		  
		
			<td><img src="images/pinus.jpg" class="rounded" alt="Cinque Terre" width="400" height="236"> <br /><br />
			<b> Keterangan : </b> <p> Keberadaan hutan pinus memang mudah sekali dijumpai karena memang tidak terlepas dari banyaknya perbukitan serta pegunungan yang berada di Jawa Tengah. Belakangan ini, pesona keindahan hutan pinus memang lagi hits banget nih dikalangan pecinta fotografi. </p><br />
			Harga : Rp 2.000.000 <br /> <br /> 
			<a href="form-pesan.php" class="btn btn-success">Pesan</button>
			</td>
		  </tr>
	  </table>
	</div>
</form>
    </table>
   </body>
  </div> <hr />
    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p>Website by <a href="">www.ticketstravel.com</a></p>
    </footer>
</body>
</html>
