<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module12">
	<div class = "container">
		<div class="title-module12">
			<hr>
			<h4>OUR TEAM</h4>
		</div>
		<div class="row">
			<div class="col-md-4 text-center">
				<img src="http://kamleshyadav.com/wp/fishing/seafood/wp-content/uploads/sites/4/2016/09/team1.jpg" alt="team1">
				<h5 class="name-team">AYYNE VALENCIA</h5>
				<h5 class="muted">EXPERT</h5>
			</div>
			<div class="col-md-4 text-center">
				<img src="http://kamleshyadav.com/wp/fishing/seafood/wp-content/uploads/sites/4/2016/09/team2.jpg" alt="team2">
				<h5 class="name-team">JELF WITTERS</h5>
				<h5 class="muted">EXPERT</h5>
			</div>
			<div class="col-md-4 text-center">
				<img src="http://kamleshyadav.com/wp/fishing/seafood/wp-content/uploads/sites/4/2016/09/team3.jpg" alt="team">
				<h5 class="name-team">JOHN LUIS</h5>
				<h5 class="muted">EXPERT</h5>
			</div>
		</div>
	</div>
</div>