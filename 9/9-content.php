<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="anh">
                <img src="./images/1.png">
                <div class="overlay">
                    <a href="#" data-rel="prettyPhoto"></a>
                </div>
            </div>

            <br>
            <h5>BEEF STEW</h5>
            <h5>
                <span class="price">
                    <del>
                        <span class="price1">
                            <span class="woocommerce-Price-currencySymbol">£</span>
                            26.00
                        </span>
                    </del>
                    
                        <span class="price2">
                            <span class="woocommerce-Price-currencySymbol">£</span>
                            24.00
                        </span>
                    
                </span>
            </h5>
            <br>
            <!-- <button class="button button1"><i class="fa fa-shopping-cart"> ADD TO CART</button></i></button> -->
            <a href="#" class="button button1"><i
                    class="fa fa-shopping-cart"></i> Add to cart</a>
        </div>

    </div>
</div>