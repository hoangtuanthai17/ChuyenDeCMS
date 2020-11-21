<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/demo.less', 'css/demo.css');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/swiper.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/swiper.min.js" type="text/javascript"></script>

    <link href="css/demo.css" rel="stylesheet"/>
    <script src="js/demo.js" type="text/javascript"></script>

    <title>Demo</title>
</head>

<body>
    <div class="wpb_wrapper">
    <div class="row facts white">
        <div class="container invo_auto_width">
        <div class="col-md-3 col-sm-6 fact text-center">
            <h1>250+</h1>
            <hr class="white">
            <h5>STAFF</h5>
        </div>
        <div class="col-md-3 col-sm-6 fact text-center">
            <h1>300</h1>
            <hr class="white">
            <h5>REGULAR CUSTOMERS</h5>
        </div>
        <div class="col-md-3 col-sm-6 fact text-center">
            <h1>20</h1>
            <hr class="white">
            <h5>SUBLINGS</h5>
        </div>
        <div class="col-md-3 col-sm-6 fact text-center">
            <h1>5</h1>
            <hr class="white">
            <h5>STAR RATING</h5>
        </div>
    </div>
    </div>
    </div>
</body>