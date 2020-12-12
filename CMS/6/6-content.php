<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module6">
	<div class="wpb_wrapper">
    	<div class="col-md-12 text-center intro-padding">
        	<div class="winter-shop" data-background="" style="background: url('./images/md6.jpg') center center / cover no-repeat;">
            	<div href="#"><div class="bordered white1">
                	<h3 class="white1 alt"><b>10% OFF</b></h3>
            	</div></div><hr>
            <h4 class="alt white1">DELICIOUS FOOD</h4>
        </div>
    </div>
	</div>
</div>