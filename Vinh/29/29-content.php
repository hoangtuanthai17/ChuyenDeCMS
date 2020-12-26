<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module29">
	<div class="container">
		<div class="row no-margin text-center">  
			<hr>
			<h4 class="invo_heading">GALLERY 3 COLUMN</h4>
			<div class="portfolio-filter">
				<a href="#" class="btn btn-default " data-filter=".all">All</a>
				<a href="#" class="btn btn-default" data-filter=".cicero">Cicero</a>
				<a href="#" class="btn btn-default" data-filter=".malorum">Malorum</a>
				<a href="#" class="btn btn-default" data-filter=".renaissance">Renaissance</a>
			</div>
		</div>
	</div>
	<div class="image29">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<img src="./images/galleryn1.jpg" alt="galleryn1">
					<img src="./images/galleryn5.jpg" alt="galleryn4">
				</div>
				<div class="col-md-3">
					<img src="./images/galleryn2.jpg" alt="galleryn2">
					<img src="./images/galleryn6.jpg" alt="galleryn5">
				</div>
				<div class="col-md-3">
					<img src="./images/galleryn3.jpg" alt="galleryn3">
					<img src="./images/galleryn7.jpg" alt="galleryn6">
				</div>
				<div class="col-md-3">
					<img src="./images/galleryn4.jpg" alt="galleryn3">
					<img src="./images/galleryn8.jpg" alt="galleryn6">
				</div>
			</div>
		</div>
	</div>
</div>


