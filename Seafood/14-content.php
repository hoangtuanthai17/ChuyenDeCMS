<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<body>
  <div class="row">
    <div class="wpb_column vc_column_container vc_col-sm-12">
      <div class="vc_column-inner ">
          <div class="wpb_wrapper">
            <section class="yellow-bg">
              <div class="container invo_auto_width">
                <div class="row facts white">
                  <div class="col-md-3 col-sm-6 fact text-center">
                    <h1>250+</h1>
                    <hr class="white">
                    <h5><strong>STAFF</strong></h5>
                  </div>
                   <div class="col-md-3 col-sm-6 fact text-center">
                    <h1>300</h1>
                    <hr class="white">
                    <h5><strong>REGULAR CUSTOMERS</strong</h5>
                  </div>
                   <div class="col-md-3 col-sm-6 fact text-center">
                    <h1>20</h1>
                    <hr class="white">
                    <h5><strong>SUBLINGS</strong></h5>
                  </div>
                   <div class="col-md-3 col-sm-6 fact text-center">
                    <h1>5</h1>
                    <hr class="white">
                    <h5><strong>STAR RATING</strong></h5>
                  </div>
                </div>
              </div>
            </section>
          </div>
      </div>
    </div>
    </div>
</body>

