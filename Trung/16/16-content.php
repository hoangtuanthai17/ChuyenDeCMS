<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module9">
	
<div class="title">
		<hr>
		<h4>SERVICE FORMAT ONE</h4><br>
	</div>
	
<div class="container">
 <div class="row">
 	<div class="col-md-3">
	 <div class="service"><span class="icon-camera icon accent"></span><h5>Sagittis</h5>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</div>
 	</div>
 	<div class="col-md-3">
	 <div class="service"><span class="icon-desktop icon accent"></span><h5>BEING AVAILABLE</h5>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</div>
  	</div>
 	<div class="col-md-3">
	 <div class="service"><span class="icon-notebook icon accent"></span><h5>BEING FRIENDLY</h5>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</div>
 	</div>
	 <div class="col-md-3">
	 <div class="service"><span class="icon-camera icon accent"></span><h5>BEING PROMPT</h5>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</div>
 	</div>
 </div>
 </div>
</div>