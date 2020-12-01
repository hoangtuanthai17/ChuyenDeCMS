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

			</div>
			<div class="col-md-8">
				<div class="bog-right">
					<div class="img-blog-right">
						<img src="http://kamleshyadav.com/wp/fishing/seafood/wp-content/uploads/sites/4/2016/09/p4.jpg" alt="img-blog-right">
					</div>
					<h6 class="accent">POSTED ON
						<a class="date-time">September 26, 2016</a>
					</h6>
					<h4 class="title-blog-right">BRUSSELS SPROUTS WITH HAM</h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
					<span>Posted in </span>
				</div>
				
			</div>
		</div>
	</div>
</div>