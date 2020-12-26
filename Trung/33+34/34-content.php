<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<body>
	<div class="wpb_column vc_column_container vc_col-sm-12">
     <div class="vc_column-inner ">
         <div class="wpb_wrapper">
            <div class="row no-margin text-center">
                 <hr>
                 <h4 class="invo_heading1">SEAFOOOD RESTAURANT</h4>
                 
             </div>
             <div class="row no-margin text-center">
                 <hr>
                 <h4 class="invo_heading">GET IN TOUCH WITH US!</h4>
                 <p>Fill out all required fields to send a message. You have to login to your wordpress account to post any comment. Please don´t spam, thank you!</p>
             </div>
             <form class="row">
                 <div class="col-sm-6">
                     <div>
                         <h4 class="invo_sm_text">NAME</h4>
                         <input type="text" data-validation="required" class="form-control" value="" placeholder="name*" name="name">
                     </div>
                     <div>
                         <h4 class="invo_sm_text">PHONE NO</h4>
                         <input type="text" data-validation="required" class="form-control" value="" placeholder="phone no*" name="phoneno">
                     </div>
                     <div>
                         <h4 class="invo_sm_text">E-MAIL</h4>
                         <input type="text" data-validation="required" class="form-control" value="" placeholder="email*" name="email">
                     </div>
                     <div>
                         <h4 class="invo_sm_text">SUBJECT</h4>
                         <input type="text" data-validation="required" class="form-control" value="" placeholder="subject*" name="subject">
                     </div>
                 </div>
                 <div class="col-sm-6">
                     <h4 class="invo_sm_text">YOUR MESSAGE</h4>
                     <textarea name="Message" class="form-control" id="Message" data-validation="required" rows="10" placeholder="your message"></textarea>
                 </div>
                 
                      <div class="button">
            <button class="button button1">Send to Email<i class="fa fa-arrow-right"></i></button>
            
        </div>
              
             </form>
         </div>
     </div>   
    </div>
</body>

