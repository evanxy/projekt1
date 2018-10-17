<?php include_once "config.php" ?>

<!DOCTYPE html>

<html class="no-js" lang="en" dir="ltr">
	
<head>
	<?php include_once "template/head.php" ?>
</head>

<body>
	<?php include_once "template/header.php" ?>

	<div class="fullscreen-image-slider">
	  <div class="orbit" role="region" aria-label="FullScreen Pictures" data-orbit>
		<img class="orbit-image" src="https://cdn.pixabay.com/photo/2016/11/19/17/20/athlete-1840437_960_720.jpg" alt="Space">
		<figcaption class="orbit-caption">
			<h1>Lorem ipsum dolor sit amet, <br>consectetur adipisicing elit.</h1>
		</figcaption>
	  </div>
	</div>

	<div class="full-width-testimonial">
	  <div class="full-width-testimonial-section">
		<div class="full-width-testimonial-icon text-center">
		  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="41px" height="34px" viewBox="-235 240 41 34" style="enable-background:new -235 240 41 34;" xml:space="preserve">
			  <path class="quote-path" d="M-231.3,260.4c0-5,1.3-8.8,3.7-11.7c2.4-2.8,6-4.6,10.5-5.5v5c-3.5,1-6,2.8-7.1,5.5c-0.7,1.4-0.9,2.8-0.8,4
				h8.1v12.8h-14.4V260.4z"/>
			  <path class="quote-path" d="M-212,260.4c0-5,1.3-8.8,3.7-11.7c2.4-2.8,6-4.6,10.5-5.5v5c-3.5,1-6,2.8-7.1,5.5c-0.7,1.4-0.9,2.8-0.8,4h8.1
				v12.8H-212V260.4z"/>
		  </svg>
		</div>
		<div class="full-width-testimonial-content">
		  <h5 class="full-width-testimonial-text">Lake Tahoe is the most beautiful place I have ever been to. I have traveled several places in the world, and there might be more beautiful places out there, but none that I have seen. I loved it!
		  </h5>
		  <p class="full-width-testimonial-source">Gavin Newman</p>
		  <span class="full-width-testimonial-source-context">Traveled from San Francisco to Lake Tahoe</span>
		</div>
	  </div>
	</div>

	<?php include_once "template/footer.php" ?>
	<?php include_once "template/scripts.php" ?>
</body>
</html>