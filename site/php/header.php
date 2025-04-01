<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Fashion</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/superfish.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
     
    <script src="js/gallery.js" type="text/javascript"></script>
    <script src="js/jquery.tmpl.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.elastislide.js"></script>
    
    <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">
      {{if itemsCount > 1}}
        <div class="rg-image-nav">
          <a href="#" class="rg-image-nav-prev">Prev</a>
          <a href="#" class="rg-image-nav-next">Next</a>
        </div>
      {{/if}}
      <div class="rg-image"></div>
      <div class="rg-loading"></div>
      <div class="rg-caption-wrapper">
        <div class="rg-caption"></div>
      </div>
    </script>
    <script>
        $(window).load(function() {
            $('.rg-image-wrapper').addClass('grid_6');
            $('.es-carousel').addClass('grid_6');
            $('.es-nav').addClass('clearfix');
            
            $('.es-carousel .item').click(function(){
              $('.gal_text').removeClass('show');
              $(this).find('.gal_text').addClass('show');
            })
            
            var padTop = $('.gal_text.show').height() + 25;
            $('.es-carousel').css('padding-top', padTop);
            var height1 = $('.es-carousel ul').height() + padTop;
            
            var height2 = $('.rg-image-wrapper').height();
            // alert(height2);
            if(height1 > height2) {
                $('.es-nav-prev').css('bottom', '-48px');
                $('.es-nav-next').css('bottom', '-48px');
            }
            else {
                $('.es-nav-prev').css('bottom', '72px');
                $('.es-nav-next').css('bottom', '72px');
            }
            
        })
        
        $(window).resize(function() {
            var padTop = $('.gal_text.show').height() + 25;
            $('.es-carousel').css('padding-top', padTop);
            
            var height1 = $('.es-carousel ul').height() + padTop;
            
            var height2 = $('.rg-image-wrapper').height();
            
            if(height1 > height2) {
                $('.es-nav-prev').css('bottom', '-48px');
                $('.es-nav-next').css('bottom', '-48px');
            }
            else {
                $('.es-nav-prev').css('bottom', '72px');
                $('.es-nav-next').css('bottom', '72px');
            }
        })
    </script>
    
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script src="js/html5shiv.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
     </head>
     <body>
<!--==============================header=================================-->
<header>
    <div class="toprow">
        <div class="container_12">
            <div class="grid_12">
                <h1 class="extra-wrap">
                    <a href="index.html">Fashion <br>
                        <span class="slogan extra-wrap">The latest collection this year</span>
                    </a>
                </h1>
                <nav>
                    <div class="menu">
                        <ul class="sf-menu clearfix">
                            <li><a href="index.html">Home <span>Main Page</span></a>
                                <ul>
                                    <li><a href="#"> Services List</a></li>
                                    <li><a href="#">Special Services</a></li>
                                    <li><a href="#">Professional Advice</a>
                                        <ul>
                                            <li><a href="#">New Services</a></li>
                                            <li><a href="#">Integration</a></li>
                                            <li><a href="#">Collections</a></li>
                                            <li><a href="#">Designers</a></li>
                                        </ul>
                                    </li>
                                    <li class="last"><a href="#">Client Support</a></li>
                                </ul>
                            </li>
                            <li class="current"><a href="index-1.html">Fashion <span>New Styles</span></a></li>
                            <li><a href="index-2.html">Lifestyle <span>Life &amp; Style</span></a></li>
                            <li><a href="index-3.html">People <span>Designers &amp; Models</span></a></li>
                            <li><a href="index-4.html">Accessories <span>New Collections</span></a></li>
                            <li><a href="index-5.html">Trends <span>Trends &amp; Styles</span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>