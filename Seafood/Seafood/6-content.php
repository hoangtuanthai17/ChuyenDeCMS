<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<body>
	<div class="container">
 <div class="row">
 	<div class="wpb_column vc_column_container col-md-4">
 		<div class="vc_column-inner ">
 			<div class="wpb_wrapper">
 				<div class="">
 					<div class="row no-margin small-feature">
 						<span class="fa fa-mobile icon"></span>
 						<div class="content">
 							<div class="heading">
 								ONLINE BOOKING
 							</div>
 							<br>
 							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
 						</div>
 					</div>
 					<div class="row no-margin small-feature">
 						<span class="fa fa-clipboard icon"></span>
 						<div class="content">
 							<div class="heading">
 								ACCESSBILITY
 							</div>
 							<br>
 							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
 						</div>
 					</div>
 					<div class="row no-margin small-feature">
 						<span class="fa fa-folder-o icon"></span>
 						<div class="content">
 							<div class="heading">
 								PUBLISH YOUR MENU
 							</div>
 							<br>
 							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
 						</div>
 					</div>
 					<div class="row no-margin small-feature">
 						<span class="fa fa-search-plus icon"></span>
 						<div class="content">
 							<div class="heading">
 								GET FOUND
 							</div>
 							<br>
 							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	<div class="wpb_column vc_column_container col-md-4">
 		<div class="vc_column-inner ">
 			<div class="wpb_wrapper">
 				<img width="340" height="499" src="./images/cogai.png" class="vc_single_image-img attachment-full" alt="" sizes="(max-width: 300px) 100vw, 460px">
 			</div>
 		</div>
 	</div>
 	<div class="wpb_column vc_column_container col-md-4">
 		<div class="vc_column-inner ">
 			<div class="wpb_wrapper">
 				<div class="">
 					<div class="row no-margin small-feature">
 						<span class="fa fa-suitcase icon"></span>
 						<div class="content">
 							<div class="heading">
 								ONLINE BOOKING
 							</div>
 							<br>
 							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
 						</div>
 					</div>
 					<div class="row no-margin small-feature">
 						<span class="fa fa-cogs icon"></span>
 						<div class="content">
 							<div class="heading">
 								ONLINE BOOKING
 							</div>
 							<br>
 							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
 						</div>
 					</div>
 					<div class="row no-margin small-feature">
 						<span class="fa fa-futbol-o icon"></span>
 						<div class="content">
 							<div class="heading">
 								ONLINE BOOKING
 							</div>
 							<br>
 							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
 						</div>
 					</div>
 					<div class="row no-margin small-feature">
 						<span class="fa fa-calculator icon"></span>
 						<div class="content">
 							<div class="heading">
 								ONLINE BOOKING
 							</div>
 							<br>
 							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 </div>
</body>

