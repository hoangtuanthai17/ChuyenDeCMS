<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module10">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="menu">
					<img src="http://kamleshyadav.com/wp/fishing/seafood/wp-content/uploads/sites/4/2016/09/s4.png" alt="img1module10">
					<h5>BEEF STEW</h5>
					<h5 class="price">
						<del>
							<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>26.00</span>
						</del>
						<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>24.00</span></ins>
					</h5>			
					<a href="#" class="add-to-cart">
						<i class="fa fa-shopping-cart"></i>
						Add to cart
					</a>
				</div>
			</div>
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
</div>