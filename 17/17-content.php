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
					<hr>
					<h4>RECENT COMMENTS</h4>
					<ul>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/brussels-sprouts-with-ham/#comment-3">BRUSSELS SPROUTS WITH HAM</a></li>
						<li><a href="http://kamleshyadav.in/wp/fishing/">A WordPress Commenter</a></li>
					</ul>
				</div>	
		</div>
		<div class="col-md-8">
				
		</div>
		</div>
	</div>
</div>