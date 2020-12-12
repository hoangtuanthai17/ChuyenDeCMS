<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<body>
	<footer>
		<div class="container text-center">
			<div class="row">
				<div class="col-md-3 col-sm-6 text-left">
					<hr>
					<h4>ABOUT US</h4>
					<p>We will create a unique and visually pleasing logo to reflect your overall brand to be used in all areas of your marketing.</p>
					<ul class="social text-center inv_ul_margin">
						<li class="fb"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
						</li>
						<li class="tw"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li class="vimeo"><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a>
						</li>
						<li class="dri"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
						</li>
						<li class="go"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 text-left">
					<hr>
					<h4>WHY CHOOSE US ?</h4>
					<div class="textwidget">
						<h5>HIGH QUALITY SERVICES</h5>
						<p>We work with clients big and small across a range of sectors and we utilise all forms of media.</p>
					</div>
				
			</div>
			<div class="col-md-3 col-sm-6 text-left">
					<div class="flickr-gallery">
						<hr>
						<h4>PHOTO STREAM</h4>
						<div class="f-img"><img src="./images/footer1.jpg" width="88" height="88" alt="anh" class="fadein"><a class="overlay" target="_blank" href="#" data-rel="prettyPhoto" title=""></a></div>
						<div class="f-img"><img src="./images/footer2.jpg" width="88" height="88" alt="anh" class="fadein"><a class="overlay" target="_blank" href="#" data-rel="prettyPhoto" title=""></a></div>
						<div class="f-img"><img src="./images/footer3.jpg" width="88" height="88" alt="anh" class="fadein"><a class="overlay" target="_blank" href="#" data-rel="prettyPhoto" title=""></a></div>
						<div class="f-img"><img src="./images/footer4.jpg" width="88" height="88" alt="anh" class="fadein"><a class="overlay" target="_blank" href="#" data-rel="prettyPhoto" title=""></a></div>
						<div class="f-img"><img src="./images/footer5.jpg" width="88" height="88" alt="anh" class="fadein"><a class="overlay" target="_blank" href="#" data-rel="prettyPhoto" title=""></a></div>
						<div class="f-img"><img src="./images/footer6.jpg" width="88" height="88" alt="anh" class="fadein"><a class="overlay" target="_blank" href="#" data-rel="prettyPhoto" title=""></a></div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-left contact">
					<hr>
					<h4>GET IN TOUCH</h4>
					<div class="row no-margin">
					<div class="s1">
							<i class="icon fa fa-globe">
						</i>
					
						<span class="white">&nbsp;&nbsp;&nbsp;invory Business AgencyHighroad &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;141, LA CityVenice Beach 64713</p></span>
					</div>
					<div class="row no-margin s2">
						
						<p class="white">
							<i class="icon fa fa-tablet">
							
						</i>&nbsp;&nbsp;&nbsp;&nbsp;+49 123475914
					<br><span class="muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+49 123475915</span></p>
					</div>
					<div class="row no-margin s3">
						
						<p class="white"><i class="icon fa fa-envelope-o">
							
						</i>&nbsp;&nbsp;&nbsp;yourmail@email.com</p>
					</div>
				</div>
		</div>
 	
	</footer>
</body>

