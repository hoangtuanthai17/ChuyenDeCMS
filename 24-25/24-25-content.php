<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="row">
    <div class="col-md-4 sidebar">
        <div id="secondary" class="widget-area" role="complementary">
            <div id="search-2" class="row no-margin widget widget_search">
                <form class="search-form" method="get" action="#">
                    <div class="search-box">
                        <input type="text" value="" class="form-control search" placeholder="search for something"
                            name="s">
                        <a class="search"><span class="iconify" data-icon="et-magnifying-glass"
                                data-inline="false"></span></i></a>
                    </div>
                </form>
            </div>
            <div id="recent-posts-2" class="row no-margin widget widget_recent_entries">
                <hr>
                <h4>Recent Posts</h4>
                <ul>
                    <li>
                        <a href="#">Hello world!</a>
                    </li>
                    <li>
                        <a href="#">GRILLED LOBSTER
                            TAIL</a>
                    </li>
                    <li>
                        <a href="#">BRUSSELS SPROUTS
                            WITH HAM</a>
                    </li>
                    <li>
                        <a href="#">SURPRISING
                            FOOD THAT SPIKE YOUR BLOOD SUGAR LEVEL</a>
                    </li>
                    <li>
                        <a href="h#">SEAFOOD
                            PAELLA WITH CHICKEN AND PRAWNS</a>
                    </li>
                </ul>
            </div>




        </div>
    </div>
    <div class="col-md-8 main-blog">
        <div id="post-1"
            class="row blog-post post-1 post type-post status-publish format-standard hentry category-uncategorized">
            <div class="fs_blog">
                <h6 class="accent">Posted on <a href="#" rel="bookmark"><time class="entry-date published updated"
                            datetime="2016-10-04T06:17:19+00:00">October 4, 2016</time></a></h6><a href="#">
                    <h4 class="no-transform">Hello world!</h4>
                </a>
                <h6 class="muted">BY: <a href="#">fishingclub</a> / 1 COMMENTS /
                    CATEGORIES: Uncategorized</h6>
                <p>Welcome to <a href="#">Fishing Club Sites</a>. This is your first post.
                    Edit or delete it, then start blogging!</p>
                <a href="#" class="btn btn-default pull-right">Read
                    More <i class="fa fa-long-arrow-right"></i></a>

            </div>
        </div>
        <div id="post-120"
            class="row blog-post post-120 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
            <div class="fs_blog">
                <img src="./images/P1.jpg"
                    class="blog-header" alt="">
                <h6 class="accent">Posted on <a href="#"
                        rel="bookmark"><time class="entry-date published updated"
                            datetime="2016-09-26T13:13:13+00:00">September 26, 2016</time></a></h6><a
                    href="#">
                    <h4 class="no-transform">GRILLED LOBSTER TAIL</h4>
                </a>
                <h6 class="muted">BY: <a
                        href="#">fishingclub</a> / 0
                    COMMENTS / CATEGORIES: Uncategorized</h6>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
                <a href="#"
                    class="btn btn-default pull-right">Read More <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>