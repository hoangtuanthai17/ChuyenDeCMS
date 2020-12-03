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
					<ul>
						<li>POSTED ON/<a href="http://kamleshyadav.com/wp/fishing/seafood/hello-world/">OCTOBER 4.2016</a></li>
						<H4>Hello world!</H4>
						<li><a >BY:FISHINGCLUB/1COMMENTS/CATEGORY:UNCATEGORIZED</a></li>
					
						<li>Welcome to<a href="http://kamleshyadav.com/wp/fishing/seafood/hello-world/">Fishing Club Sites.</a>This is your first post Edit or delete it, then start blogging!</li>
						<button>READ MORE-></a></button>
					</ul>
				</div>	
		</div>
		<div class="col-md-8">
				
		</div>
		</div>
	</div>
</div>