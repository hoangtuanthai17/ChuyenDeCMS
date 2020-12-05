<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module17">
	<div class = "container">
		<div class="row">
			<div class="col-md-4">
				<div class="RECENT-COMMENTS">
				<h4>META</h4>
					<ul>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/wp-login.php">LOG IN</a></li>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/feed/">ENTRIES FEED</a></li>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/comments/feed/">COMMENTS FEED</a></li>
						<li><a href="https://wordpress.org/">WORDPRESS.ORG</a></li>
					</ul>
				</div>	
		</div>
		<div class="col-md-8">
				
		</div>
		</div>
	</div>
</div>