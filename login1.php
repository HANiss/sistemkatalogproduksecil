<html>
    <head>
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content>
        <meta name="author" content>
        <link href="js/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://www.secilmainan.com/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://www.secilmainan.com/css/style.css">
    <link rel="stylesheet" href="http://www.secilmainan.com/css/lightslider.min.css">
    <link rel="stylesheet" href="http://www.secilmainan.com/css/lightgallery.min.css">
    <style type="text/css">.__nuxt-error-page{padding:1rem;background:#f7f8fb;color:#47494e;text-align:center;display:flex;justify-content:center;align-items:center;flex-direction:column;font-family:sans-serif;font-weight:100!important;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;-webkit-font-smoothing:antialiased;position:absolute;top:0;left:0;right:0;bottom:0}.__nuxt-error-page .error{max-width:450px}.__nuxt-error-page .title{font-size:1.5rem;margin-top:15px;color:#47494e;margin-bottom:8px}.__nuxt-error-page .description{color:#7f828b;line-height:21px;margin-bottom:10px}.__nuxt-error-page a{color:#7f828b!important;text-decoration:none}.__nuxt-error-page .logo{position:fixed;left:12px;bottom:12px}</style>
    <script charset="utf-8" src="/_nuxt/pages/hot-apps.04e6865.js"></script>
    <script charset="utf-8" src="/_nuxt/pages/new-apps.7a71739.js"></script>
    <script charset="utf-8" src="/_nuxt/pages/brand/secil.8298daa.js"></script>
    <script charset="utf-8" src="/_nuxt/pages/brand/secil.8298daa.js"></script>
    <script charset="utf-8" src="/_nuxt/pages/brand/cermat.c93e555.js"></script>
    <script charset="utf-8" src="/_nuxt/pages/brand/salak.f5e86a3.js"></script>
    <script charset="utf-8" src="/_nuxt/pages/brand/rara.061a6b0.js"></script>


    <link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://www.secilmainan.com/fonts/fontawesome/css/fontawesome-all.min.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Toko Resmi Secil Mainan</title>
    </head>
    <body> 
        <div class="container-fluid">
            <div class="row my-2 pt-1 justify-content-bentween align-items-center">
                <div class="col-xl-6 col-sm-6 col-xs-6">
                    <a href="index.php">
                        <img class="img-fluid" src="gambar/icon/back.png" alt="Poster" style="height: 50px;">
                    </a>
                <span class="align-middle" style="font-size: 1.5rem;font-weight: bold;">Login Dulu Yuk!</span>
                </div>
            <div class="col-lg-3 col-sm-3 col-6 pt-1">
                <a href="https://shopee.co.id/shop/231253526/search?shopCollecitiom=26097449" target="_BLANK">
                    <img class="img-fluid" src="gambar/icon/shopee.png">
                </a>
            </div>
            <div class="col-lg-3 col-sm-3 col-6 pt-1">
                <a href="https://www.tokopedia.com/secilmainan/etalase/poster-anak" target="_BLANK">
                    <img class="img-fluid" src="gambar/icon/tokped.png">
                </a>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center" style="padding: 1rem 3rem 0 3rem;">
                    <div class="col-xl-4 col-sm-6 col-xs-4 text-center">
                        <a href="loginadmin.php">
                            <img class="img-fluid" src="gambar/icon/Login admin.png">
                        </a>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-xs-4 text-center">
                        <a href="loginuser.php">
                            <img class="img-fluid" src="gambar/icon/login user.png">
                        </a>
                    </div>
                </div>
    <footer class="fixed-bottom bg-light">
        <div class="container">
            <p class="m-0 text-center text-dark">Copyright © 2020 Solite Kids</p>
        </div>
    </footer>



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