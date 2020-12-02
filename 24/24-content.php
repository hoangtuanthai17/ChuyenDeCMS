<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="col-md-6 main-blog">
    <div id="post-1"
        class="row blog-post post-1 post type-post status-publish format-standard hentry category-uncategorized">
        <div class="fs_blog">
            <h6 class="accent">Posted on <a href="#"
                    rel="bookmark"><time class="entry-date published updated"
                        datetime="2016-10-04T06:17:19+00:00">October 4, 2016</time></a></h6><a
                href="#">
                <h4 class="no-transform">Hello world!</h4>
            </a>
            <h6 class="muted">BY: <a
                    href="#">fishingclub</a> / 1 COMMENTS /
                CATEGORIES: Uncategorized</h6>
            <p>Welcome to <a href="#">Fishing Club Sites</a>. This is your first post.
                Edit or delete it, then start blogging!</p>
            <a href="#" class="btn btn-default pull-right">Read
                More <i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>