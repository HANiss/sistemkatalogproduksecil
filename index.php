<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Toko Resmi Secil Mainan</title>
    </head>
    <body>
        <h1>Selamat Datang di Toko Resmi Secil Mainan <br/> marketplace.solitekids.com</h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert primary'></div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="">kembali</a>
			</center>
        </form>
 
</body>
		
	</div>
            
        </div>
        </div>
    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/vendor/jquery/jquery.min.js"></script>
    <script src="js/vendor/boostrap/js/boostrap.bundle.min.js"></script>
    <script>
                $(function () {
                    setTimeout(function () { $('.page-loader-wrapper').fadeOut(); }, 50);
                    }); 
    </script>
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
    <script src="/_nuxt/runtime.df197ce.js" defer=""></script>
    <script src="/_nuxt/pages/index.9ba801f.js" defer=""></script>
    <script src="/_nuxt/vendors/9390f98e.16ab78c.js" defer=""></script>
    <script src="/_nuxt/vendors/commons.2ae3593.js" defer=""></script>
    <script src="/_nuxt/app.eac16cf.js" defer=""></script>
    </script>
    </body>
</html>