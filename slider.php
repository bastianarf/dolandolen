<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Dolandulen </title>
<link rel="icon" type="images" href="images/Picture1.png">
</head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/img/seger.jpg" alt="">
					  <div class="caption">
			     	  		<div class="header-info">
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/img/komodo-islands-flores-indonesia-a-world-to-travel-56.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="">Have Fun On The Beach</a></h2>
							
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/img/pulau-padar-labuan-bajo2.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Get Away On This Weekend</a></h2>
							</div>
			          </div>
			        </li>
					<li>
			          <img src="images/img/nusa-lembongan-nusa-penida-tour-package-bali-trip-indonesia.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">OF YOUR DREAMS</a></h2>
							
							<h1><a href="#"></a></h1>
							</div>
			          </div>
			        </li>
                    <li>
			          <img src="images/img/c6f44810-2dc4-11e9-80ef-0255f1ad860b_image_hires_211847.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							
							
							<h2><a href="#">HAVE A NICE DAY </a></h2>
							<h1><a href="#"></a></h1>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->	
</body>
</html>