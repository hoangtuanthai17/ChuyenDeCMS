<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module4">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="module4-title">
					<h4>WHY CHOOSE US?</h4>
				</div>
				<div class="module4-content">
				<p>Sed laoreet gravida tortor malesuada rutrum. Praesent sit amet lobortis dui, eu cursus lorem. In hac habitasse platea dictumst. Nam euismod massa ac mauris scelerisque tincidunt. Pellentesque vitae nisl non ipsum fermentum pulvinar. Duis ut iaculis lacus. Nunc rutrum neque rutrum, tristique turpis ac, lacinia tellus. Praesent consequat viverra felis, sit amet aliquam elit aliquam sit amet.Nunc eleifend aliquam nisl nec gravida. Pellentesque at pellentesque lacus. In ut auctor sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum a sapien imperdiet, placerat mauris a, finibus urna.</p>
				</div>
				<div class="module4-signature">
					<img src="./images/sign.png" alt="sign">
					<h5 class="muted">CEO/FOUNDER</h5>
				</div>
			</div>
			<div class="col-md-6">
			</div>
		</div>
	</div>
</div>