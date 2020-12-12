<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module18">
	<div class = "container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-8">
			<div class="blog">
						<div class="posted">
							<h6>Posted on 
								<a class="time">October 4, 2016<a>
							</h6>
						</div>
						<div class="title-blog">
							<h4>Hello world!</h4>
						</div>
						<div class="by">
							<h6>BY: fishingclub / 1 COMMENTS / CATEGORIES: Uncategorized</h6>
						</div>
						<div class="content">
							<p>Welcome to Fishing Club Sites . This is your first post. Edit or delete it, then start blogging!</p>
						</div>
						<div class="readmore">
						<a href="http://kamleshyadav.com/wp/fishing/seafood/hello-world/" class="btn">READ MORE<i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="img-blog">
					<img src="./images/img1-blog.jpg" alt="img blog">
					</div>
			</div>
		</div>
	</div>
</div>