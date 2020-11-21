<!DOCTYPE html>
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
    $less->compileFile('less/31.less', 'css/styles.css');
?>

<html lang="en">
<head>
    <title>module3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Basic usage demo">
    <meta name="author" content="David Deutsch">
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/swiper.min.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>
    <script src="<?php echo $url_path ?>/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo $url_path ?>/js/31.js"></script>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <br>
            <h4 style="font-weight: bold;">WHY CHOOSE US?</h4><br>
            <p>Sed laoreet gravida tortor malesuada rutrum. Praesent sit amet lobortis dui, eu cursus lorem. In hac habitasse platea dictumst. Nam euismod massa ac mauris scelerisque tincidunt. Pellentesque vitae nisl non ipsum fermentum pulvinar. Duis ut iaculis lacus. Nunc rutrum neque rutrum, tristique turpis ac, lacinia tellus. Praesent consequat viverra felis, sit amet aliquam elit aliquam sit amet.Nunc eleifend aliquam nisl nec gravida. Pellentesque at pellentesque lacus. In ut auctor sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum a sapien imperdiet, placerat mauris a, finibus urna.</p>
            <img src="./images/Capture2.PNG" style="float: left;">
        </div>
        <div class="col-md-6">
            <img src="./images/Capture.PNG" style="width: 100%">
        </div>
    </div>
    </div>
</body>
</html>
