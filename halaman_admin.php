<html lang="en">
<!DOCTYPE html>
<html>
<head>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="http://www.secilmainan.com">
    <title>Secilmainan | Poster</title>
    <meta name="description" content="Toko Resmi Media Pembelajaran Anak Usia Dini dari Solite Kids">

    
    <link rel="stylesheet" href="http://www.secilmainan.com/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://www.secilmainan.com/css/style.css">
    <link rel="stylesheet" href="http://www.secilmainan.com/css/lightslider.min.css">
    <link rel="stylesheet" href="http://www.secilmainan.com/css/lightgallery.min.css">
    

    <link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://www.secilmainan.com/fonts/fontawesome/css/fontawesome-all.min.css">

  <style>
      body{
          overflow-x: hidden;
      }
  </style>
</head>
	<title>Halaman admin - www.malasngoding.com</title>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['status']==""){
		header("location:index.php?pesan=gagal");
	}
 
    ?>
    <!-- Image and text -->
    <nav class="navbar header shadow-sm navbar-light bg-light fixed-top navbar-expand-lg">
        <a href="/" aria-current="page" target="_self" class="navbar-brand nuxt-link-exact-active nuxt-link-active">
    <img src="gambar/icon/logosecil.png" height="32"></a>
    </nav>
 

<body>
    <main role="main">
        <section class="py-5">
            <div class="container">
            <div class="row pt-1">
            <div class="col-md-6 col-lg-5 px-3">
                <div class="clearfix">
                    <div class="lSSlideOuter noPager">
                    <div class="lSAction" style="display: none;">
                        <a class="lSPrev"></a>
                        <a class="lSNext"></a>
                    </div>
                    </div>
                    <ul class="lSPager lSGallery" style="margin-top: 5px; transition-duration: 400ms; width: 51.1px; transform: translate3d(0px, 0px, 0px);"></ul>
                </div>
            </div>
            </div>
				<nav>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Deskripsi</a>
						<a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Review</a>	
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['status']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
                    </div>
					<div class="tab-pane" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <ul class="list-unstyled">
                            <li class="media">
                              <div class="media-body">
                              <?php 
                        require 'koneksi.php';

                            $ambil = "SELECT * FROM komentar";
                            $query2 = mysqli_query ($conn,$ambil);

                                while ($data = mysqli_fetch_assoc($query2)){
                                            
                            ?>
                        <ul class="list-unstyled">
                            <li class="media">  
                            <img src="gambar/icon/logouser.png" class="mr-3" alt="..." style="width: 80px">
                <div class="media-body">
                    <h5 class="mt-0 mb-1"><?php echo $data['nama']; ?></h5>
                    <p> 
                        <?php echo $data['isi_komentar']; ?>
                    </p>
                </div>
                        </li>
                <?php
                        }
                            ?>
                                <form action="proses/tambahkomentar.php " method="post">
                           
                                      <input type="hidden" class="form-control" name="nama" id="inputAddress" value="<?php echo $_SESSION['username']; ?> - Admin Secil Mainan" placeholder="Tulis Nama Anda disini">
                                   

                                    <div class="col-6">
                                      <label for="inputAddress" class="form-label">Balas Komentar disini</label>
                                      <input type="text" class="form-control" name="isi_komentar" id="inputAddress" placeholder="Tulis Komentar disini">
                                    </div>
                                <div class="col-10">
                                <button type="submit" name="simpan" class="btn btn-primary">Kirim</button>
                                        </form>
                                </div>
                                </li>
                                </ul>
                    </div>		
				</div>
				
			</div>
    
        </section>
          
</main>

    <footer class="fixed-bottom bg-light">
        <div class="container">
            <p class="m-0 text-center text-dark">Copyright &copy; 2020 Solite Kids</p>
        </div>
    </footer>
    <script src="http://www.secilmainan.com/js/jquery.min.js"></script>
    <script src="http://www.secilmainan.com/js/bootstrap.bundle.min.js"></script>
    <script src="http://www.secilmainan.com/js/lightslider.min.js"></script>
    <script src="http://www.secilmainan.com/js/lightgallery.min.js"></script>
    <script src="http://www.secilmainan.com/js/lg-thumbnail.min.js"></script>
    

  
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


<script>
        
        $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    $(".navbar").addClass("shrink");
                } else {
                    $(".navbar").removeClass("shrink");
                }                
            });

            $('.cat-wrap').each(function(index, el) {
                $('.cat-item:gt(7)', this).hide();
                $('.show-more').show();
            });

            $('.show-more').on('click', function(e) {
                e.preventDefault();
                var $item = $(this).parents('.cat-wrap').find('.cat-item:gt(7)');
                $item.slideToggle();
                $('.show-more-text', this).text() === 'more' ? $('.show-more-text', this).text('less') : $('.show-more-text', this).text('more');
            });
            // lightGallery(document.getElementById('image-gallery'));

    
            $(document).ready(function() {
                $("#content-slider").lightSlider({
                    loop:true,
                    keyPress:true
                });
                $('#image-gallery').lightSlider({
                    gallery:true,
                    item:1,
                    loop:true,
                    // thumbItem:9,
                    // vertical:true,
                    
                    slideMargin: 0,                
                    auto:false,                
                    enableDrag: false,
                    onSliderLoad: function() {
                        $('#image-gallery').removeClass('cS-hidden');
                    }  
                });
                $("#image-gallery").lightGallery({
                    selector: '.lightgallery-item',
                    thumbnail: false,
                    counter: false,
                });
            });
    </script> 

<script>
    // var name=localStorage.getItem("firstname");
    // console.log(name);
    // window.onload = alert(localStorage.getItem("storageName"));
</script> 
    </div>

</body>
</html>