<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module16">
	<div class = "container">
		<div class="row">
		<div class="col-md-8">
				<div class="blog">
				<div class="img-blog">
					<img src="./images/img1-blog.jpg" alt="img blog">
					</div>
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
					</div>
			</div>
			<div class="col-md-4">
				<div class="search-box">
				<input type="text" value class="form-search" placeholder="search for something" name="s">
				</div>
				<div class="RecentPostS">
					<hr>
					<h4>Recent PostS </h4>
					<ul>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/hello-world/">Hello world!</a></li>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/grilled-lobster-tail/">GRILLED LOBSTER TAIL</a></li>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/brussels-sprouts-with-ham/" aria-current="page">BRUSSELS SPROUTS WITH HAM</a></li>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/surprising-food-that-spike-your-blood-sugar-level/">SURPRISING FOOD THAT SPIKE YOUR BLOOD SUGAR LEVEL</a></li>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/seafood-paella-with-chicken-and-prawns/">SEAFOOD PAELLA WITH CHICKEN AND PRAWNS</a></li>
					</ul>
				</div>
				<div class="RECENT-COMMENTS">
					<hr>
					<h4>RECENT COMMENTS</h4>
					<ul>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/brussels-sprouts-with-ham/#comment-3">BRUSSELS SPROUTS WITH HAM</a></li>
						<li><a href="http://kamleshyadav.in/wp/fishing/">A WordPress Commenter</a></li>
					</ul>
				</div>
				<div class="archives">
					<hr>
					<h4>ARCHIVES</h4>
					<ul>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/2016/10/">October 2016</a></li>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/2016/09/">September 2016</a></li>
					</ul>
				</div>
				<div class="categories">
					<hr>
					<h4>ARCHIVES</h4>
					<ul>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/2016/10/">SNACK</a></li>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/2016/09/">Uncategorized</a></li>
					</ul>
				</div>
				<div class="meta">
				<hr>
					<h4>meta</h4>
					<ul>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/wp-login.php">Log in</a></li>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/feed/">Entries feed</a></li>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/comments/feed/">Comments feed</a></li>
						<li><a href="https://wordpress.org/">WordPress.org</a></li>			
					</ul>
				</div>
				
			</div>

		</div>
	</div>
</div>