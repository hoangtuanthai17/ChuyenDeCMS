<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module1">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
				<div class="fishing_left">
					<ul>
						<li>
							<a href="#">
								<i class="fa fa-envelope"></i>
								support@himanshusofttech.com
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-phone" aria-hidden="true"></i>
								0123456789
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="fishing_right">
					<ul class="social">
						<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/?lang=en" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://vimeo.com/" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
						<li><a href="https://dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>		
	</div>
</div>