<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="title">
        <hr>
        <h4>OUR AWESOME SERVICES</h4><br>
    </div>
    
<div class="container">
 <div class="row">
    <div class="col-md-4">
        <div class="row">
        <div class="col-md-3">
            <div class="fa fa-camera" style="font-size:60px"></div>
        </div>
        <div class="col-md-9">
            <div class="t1">SAGITTIS</div><br>
            <div class="t2">OUR SERVICES</div>
        </div>
        </div><br>
        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system
    </div>
    <div class="col-md-4">
        <div class="row">
        <div class="col-md-3">
            <div class="fa fa-desktop" style="font-size:60px"></div>
        </div>
        <div class="col-md-9">
            <div class="t1">BEING AVAILABLE</div><br>
            <div class="t2">MOTO SERVICES</div>
        </div>
        </div><br>
        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system
    </div>
    <div class="col-md-4">
        <div class="row">
        <div class="col-md-3">
            <div class="fa fa-book" style="font-size:60px"></div>
        </div>
        <div class="col-md-9">
            <div class="t1">BEING AVAILABLE</div><br>
            <div class="t2">MOTO SERVICES</div>
        </div>
        </div><br>
        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system
    </div>
 </div>
 </div>