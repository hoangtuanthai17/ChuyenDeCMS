<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module2">
	<div class="container">
		<nav class="navbar">
				<div class="navbar-header">
				<a class="navbar-brand" href="#">
					<img src="./images/logo.png" alt="logo">
				</a>
				</div>
				<ul class="nav navbar-nav">
				<li><a href="#">HOME</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">SERVICES</a></li>
				<li><a href="#">BLOG</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">GALLERY </a>
					<ul class="dropdown-menu">
						<div class="row">
							<div class="col-md-6">
								<li><a href="#">BLOG CENTER</a></li>
								<li><a href="#">Blog With Left Sidebar</a></li>
								<li><a href="#">Blog With Right Sidebar</a></li>
							</div>
							<div class="col-md-6">
								<li><a href="#">Single Blog Center</a></li>
								<li><a href="#">Single Blog Left Sidebar</a></li>
								<li><a href="#">Single Blog Right Sidebar</a></li>
							</div>
						</div>
					</ul>
				</li>
				<li class="dropdown1"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SHOP</a>
					<ul class="dropdown-menu">
						<li><a href="#">GALLERY 3 COLUMN</a></li>
						<li><a href="#">GALLERY 4 COLUMN</a></li>
						<li><a href="#">DYNAMIC GALLERY</a></li>
					</ul>
				</li>
				<li><a href="#">CONTACT</a></li>
				<li><a href="#" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i></a></li>
				<li><a href="javascript:;" class="search-toggle"><i class="fa fa-search"></i></a></li>				
				</ul>
				
				
		
		</nav>
	</div>
</div>
