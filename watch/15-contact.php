
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
    <div class="content">
   <div class="col-md-8 col-md-offset-2 invo_blog_centre main-blog">
                            <div id="post-1" class="row blog-post post-1 post type-post status-publish format-standard hentry category-uncategorized">
<div class="fs_blog">
    <h6 class="accent">Posted on <a href="http://kamleshyadav.com/wp/fishing/seafood/hello-world/" rel="bookmark"><time class="entry-date published updated" datetime="2016-10-04T06:17:19+00:00">October 4, 2016</time></a></h6><a href="http://kamleshyadav.com/wp/fishing/seafood/hello-world/"><h4 class="no-transform">Hello world!</h4></a><h6 class="muted">BY: <a href="http://kamleshyadav.com/wp/fishing/seafood/author/vivekkiran/">FISHINGCLUB</a> / 1 COMMENTS / CATEGORIES: Uncategorized</h6><p>Welcome to <a href="http://kamleshyadav.in/wp/fishing/">Fishing Club Sites</a>. This is your first post. Edit or delete it, then start blogging!</p>
<a href="#" class="btn btn-default pull-right">Read More <i class="fa fa-long-arrow-right"></i></a></div>
</div>
        </div>    
        </div>            
</body>