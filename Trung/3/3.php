<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
	$less->compileFile('less/3.less', 'css/3.css');
?>
<!DOCTYPE html>

<html lang="en-US">

    <head>
        <title>module 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/3.css" rel="stylesheet" type="text/css" />
        <link href="plugin/swiper/package/css/swiper.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
       <?php include $dir_block.'/3-content.php'; ?>
    </body>
    <script src="plugin/swiper/package/js/swiper.min.js"></script>
    <script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        dymamicBullets: true
      },
    });
  </script>
</html>