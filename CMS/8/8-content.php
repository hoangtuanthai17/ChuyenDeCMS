<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module8">
	<div class="container">
		<div class="row">
		<div class="col-md-4">
			<div class="online-booking">
				<div class="icon-online-booking">
				<span class="fa fa-mobile accent icon"></span>
				</div>
				<div class="content-online-booking">
					<div class="title-online-booking">
						<h5>ONLINE BOOKING</h5><br>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
			<div class="online-booking">
				<div class="icon-online-booking">
				<span class="fa fa-clipboard accent icon"></span>
				</div>
				<div class="content-online-booking">
					<div class="title-online-booking">
						<h5>ONLINE BOOKING</h5><br>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
			<div class="online-booking">
				<div class="icon-online-booking">
				<span class="fa fa-folder-o accent icon"></span>
				</div>
				<div class="content-online-booking">
					<div class="title-online-booking">
						<h5>ONLINE BOOKING</h5><br>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
			<div class="online-booking">
				<div class="icon-online-booking">
				<span class="fa fa-search-plus accent icon"></span>
				</div>
				<div class="content-online-booking">
					<div class="title-online-booking">
						<h5>ONLINE BOOKING</h5><br>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="img-girl">
			<img src="./images/girl.png" alt="girl">
			</div>
			
		</div>
		<div class="col-md-4">
		<div class="online-booking">
				<div class="icon-online-booking">
				<span class="fa fa-suitcase accent icon"></span>
				</div>
				<div class="content-online-booking">
					<div class="title-online-booking">
						<h5>ONLINE BOOKING</h5><br>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
			<div class="online-booking">
				<div class="icon-online-booking">
				<span class="fa fa-cogs accent icon"></span>
				</div>
				<div class="content-online-booking">
					<div class="title-online-booking">
						<h5>ONLINE BOOKING</h5><br>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
			<div class="online-booking">
				<div class="icon-online-booking">
				<span class="fa fa-futbol-o accent icon"></span>
				</div>
				<div class="content-online-booking">
					<div class="title-online-booking">
						<h5>ONLINE BOOKING</h5><br>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
			<div class="online-booking">
				<div class="icon-online-booking">
				<span class="fa fa-calculator accent icon"></span>
				</div>
				<div class="content-online-booking">
					<div class="title-online-booking">
						<h5>ONLINE BOOKING</h5><br>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>