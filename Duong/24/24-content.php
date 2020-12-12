<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<body>
    <div class="container">
        <hr>
	<div class="row comments">

     <div class="comment-respond">
        
         <h3 class="comment-reply-title">
             POST A COMMENT
         </h3>
         <form action="#" class="comment-form" novalidate="">
            <div class="col-md-6 left_spacer">
                <textarea rows="7" class="form-control default" name="comment" placeholder="COMMENT">
                </textarea>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control default" name="author" placeholder="NAME" value="" aria-required="true">
                <input type="text" class="form-control default" value="" aria-required="true" placeholder="EMAIL" name="email">
                <input type="text" class="form-control default" value="" aria-required="true" placeholder="SUBJECT" name="subject">
            </div>
        </form> 
     </div>  
    </div>
    <div class="sent">
                <p class="comment-form-cookies-consent">
                    <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                     <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
        </div>
    </div>
                <p class="form-submit">
                    <button name="submit" type="submit" id="submit" class="submit" value="" class="submit"> POST COMMENT <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                    </button>
                </p>
</body>

