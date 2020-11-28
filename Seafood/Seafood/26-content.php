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
 		<div class="row no-margin text-center">
 			<hr>
 			<h4 class="invo_heading">CONTACT US</h4>
 		</div>
 		<div class="col-md-3 col-sm-6 contact-info text-center">
 			<span class="fa fa-envelope-o"style="font-size:35px;"></span>
 			<h5 class="accent lowercase">yourmail@mail.com</h5>
 		</div>
 		<div class="col-md-3 col-sm-6 contact-info text-center">
 			<span class="fa fa-twitter"style="font-size:35px;"></span>
 			<h5 class="accent lowercase">@hsoftindia</h5>
 		</div>
 		<div class="col-md-3 col-sm-6 contact-info text-center">
 			<span class="fa fa-mobile"style="font-size:35px;"></span>
 			<h5 class="accent lowercase">+44 (0) 1234 56789</h5>
 		</div>
 		<div class="col-md-3 col-sm-6 contact-info text-center">
 			<span class="fa fa-map-marker" style="font-size:35px;"></span>
 			<h5 class="accent lowercase">2141 NYC, Street Avenue 31</h5>
 		</div>
 		<div class="wpb_wrapper">
    <div class="row facts white">
        <div class="container invo_auto_width">
        <div class="col-sm-6">
            <div>
                <input type="text" data-validation="required" class="form-control valid" value="" placeholder="Name*" name="name" style="">
            </div>
            <div><input type="text" data-validation="number" class="form-control" value="" placeholder="Phone No*" name="phono"></div>
        <div><input type="text" data-validation="email" class="form-control" value="" placeholder="E-mail*" name="email"></div>
        <div><input type="text" data-validation="required" class="form-control" value="" placeholder="Subject*" name="subject"></div>
        </div>
         <div class="col-sm-6">
             <textarea name="Message" class="form-control" id="Message" data-validation="required" rows="10" placeholder="Your Message"></textarea>
         </div>
        </div>
        <div class="button">
            <button class="button button1">Send to Email<i class="fa fa-arrow-right"></i></button>
            
        </div>
        
    </div>
    </div>
 	</div>
 </div>
 <div class="invo_bottom_footer">
 	<div class="container text-center">
 		<div class="row">
 			<p class="copyright">Copyright Fishing | All rights reserved</p>
 		</div>
 	</div>
 </div>
 </footer>
</body>

