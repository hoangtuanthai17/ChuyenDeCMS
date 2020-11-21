<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-31">
				<div class="swiper-container">
					<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="http://kamleshyadav.in/wp/fishing/seafood/wp-content/uploads/sites/4/revslider/seafood/slide3.jpg" alt="Relax1">
					</div>
					<div class="swiper-slide">
						<img src="http://kamleshyadav.in/wp/fishing/seafood/wp-content/uploads/sites/4/revslider/seafood/slide1.jpg" alt="Relax2">
					</div>
					<div class="swiper-slide">
						<img src="http://kamleshyadav.in/wp/fishing/seafood/wp-content/uploads/sites/4/revslider/seafood/slide2.jpg" alt="Relax3">
					</div>
	
					</div>
					<!-- Add Arrows -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
</div>