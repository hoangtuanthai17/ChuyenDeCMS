<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<body>
    <section>
        
        <div class="type-139">
    <div class="container sidebar">
           <div class="row no-margin text-center">
               <hr>
               <h4 class="invo_heading"> OUR CLIENTS</h4>
           </div>
           <div class="row">
               <div class="col-md-12">
                   <div class="owl-clients owl-carousel owl-theme" style="opacity: 1; display: block;">
                       <div class="owl-wrapper-outer">
                           <div class="owl-wrapper" style="width: auto;">
                            <div class="col-md-2" style="width: 228px;">
                                <div class="item text-center">
                                <img src="./images/logos1.png" alt="">
                            </div>
                        </div>
                        <div class="owl-wrapper" style="width: auto;">
                            <div class="col-md-2" style="width: 228px;">
                                <div class="item text-center">
                                <img src="./images/logos2.png" alt="">
                            </div>
                        </div>
                             
                        </div>
                        <div class="owl-wrapper" style="width: auto;">
                            <div class="col-md-2" style="width: 228px;">
                                <div class="item text-center">
                                <img src="./images/logos3.png" alt="">
                            </div>
                        </div>
                             
                        </div>
                        <div class="owl-wrapper" style="width: auto;">
                            <div class="col-md-2" style="width: 228px;">
                                <div class="item text-center">
                                <img src="./images/logos4.png" alt="">
                            </div>
                        </div>
                             
                        </div>
                        <div class="owl-wrapper" style="width: auto;">
                            <div class="col-md-2" style="width: 228px;">
                                <div class="item text-center">
                                <img src="./images/logos5.png" alt="">
                            </div>
                        </div>
                             
                        </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
    </div>
</div>
    </section>
    
</body>

