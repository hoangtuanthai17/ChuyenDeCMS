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
				<div class="sort">
				<form action="/32-content.php" id="sorting">
					<select name="sort" id="sort">
						<option value="sort1">Default sorting</option>
						<option value="sort2">Sort by popularity</option>
						<option value="sort3">Sort by average rating</option>
						<option value="sort4">Sort by latest</option>
						<option value="sort5">Sort by price: low to high</option>
						<option value="sort6">Sort by price: high to low</option>
					</select>
					<select name="item" id="item" style=>
						<option value="item1">4 item</option>
						<option value="item2">8 item</option>
						<option value="item3">16 item</option>
						<option value="item4">32 item</option>
					</select>
				</form>
				</div>
				<div class="row" >
					<div class="col-md-4">
						<div class="list">
							<img src="./images/shop1.png" alt="1">
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
						<div class="list">
							<img src="./images/shop4.png" alt="1">
							<h5 class="price">
								<del>
									<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>22.00</span>
								</del>
								<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>19.00</span></ins>
							</h5>			
							<a href="#" class="add-to-cart">
								<i class="fa fa-shopping-cart"></i>
								Add to cart
							</a>
						</div>
						<div class="list">
							<img src="./images/shop7.png" alt="1">
							<h5 class="price">
								<del>
									<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>32.00</span>
								</del>
								<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>30.00</span></ins>
							</h5>			
							<a href="#" class="add-to-cart">
								<i class="fa fa-shopping-cart"></i>
								Add to cart
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="list">
							<img src="./images/shop2.png" alt="1">
							<h5 class="price">
								<del>
									<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>22.00</span>
								</del>
								<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>19.00</span></ins>
							</h5>			
							<a href="#" class="add-to-cart">
								<i class="fa fa-shopping-cart"></i>
								Add to cart
							</a>
						</div>
						<div class="list">
							<img src="./images/shop5.png" alt="1">
							<h5 class="price">
								<del>
									<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>35.00</span>
								</del>
								<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>32.00</span></ins>
							</h5>			
							<a href="#" class="add-to-cart">
								<i class="fa fa-shopping-cart"></i>
								Add to cart
							</a>
						</div>
						<div class="list">
							<img src="./images/shop8.png" alt="1">
							<h5 class="price">
								<del>
									<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>25.00</span>
								</del>
								<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>23.00</span></ins>
							</h5>			
							<a href="#" class="add-to-cart">
								<i class="fa fa-shopping-cart"></i>
								Add to cart
							</a>
						</div>						
					</div>
					<div class="col-md-4">
						<div class="list">
							<img src="./images/shop3.png" alt="1">
							<h5 class="price">
								<del>
									<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>28.00</span>
								</del>
								<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>23.00</span></ins>
							</h5>			
							<a href="#" class="add-to-cart">
								<i class="fa fa-shopping-cart"></i>
								Add to cart
							</a>
						</div>
						<div class="list">
							<img src="./images/shop6.png" alt="1">
							<h5 class="price">
								<del>
									<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>37.00</span>
								</del>
								<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>35.00</span></ins>
							</h5>			
							<a href="#" class="add-to-cart">
								<i class="fa fa-shopping-cart"></i>
								Add to cart
							</a>
						</div>
						<div class="list">
							<img src="./images/shop9.png" alt="1">
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
				</div>
			</div>
			<div class="col-md-4">
				<div class="search-box">
					<hr>
					<h4>SEARCH</h4>
					<input type="text" value class="form-search" placeholder="search for something" name="s">
				</div>
				<div class="RecentPostS">
					<hr>
					<h4>PRODUCT CATEGORIES</h4>
					<ul>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/hello-world/">Uncategorized</a></li>
					</ul>
				</div>
				<div class="RECENT-COMMENTS">
					<hr>
					<h4>LATEST FROM OUR BLOGS</h4>
					<ul>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/brussels-sprouts-with-ham/#comment-3">HELLO WORLD!</a></li>
						<li><a href="http://kamleshyadav.in/wp/fishing/">GRILLED LOBSTER TAIL</a></li>
						<li><a href="http://kamleshyadav.in/wp/fishing/">BRUSSELS SPROUTS WITH HAM</a></li>
						<li><a href="http://kamleshyadav.in/wp/fishing/">SURPRISING FOOD THAT SPIKE YOUR BLOOD SUGAR LEVEL</a></li>
						<li><a href="http://kamleshyadav.in/wp/fishing/">SEAFOOD PAELLA WITH CHICKEN AND PRAWNS</a></li>
					</ul>
				</div>
				<div class="RECENT-COMMENTS">
					<hr>
					<h4>CART</h4>
					<ul>
						<li><a href="http://kamleshyadav.com/wp/fishing/seafood/brussels-sprouts-with-ham/#comment-3">NO PRODUCTS IN THE CART.</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>