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
		</div>
		<div class="col-md-8">
				
		</div>
		</div>
	</div>
</div>