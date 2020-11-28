<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<body>
 <div class="row no-margin text-center">
        
        <hr>
        <h4 class="invo_heading">GALLERY 3 COLUMN</h4>
        <div class="portfolio-filter">
            <a href="#" class="btn btn-default " data-filter=".all">All</a>
            <a href="#" class="btn btn-default" data-filter=".cicero">Cicero</a>
            <a href="#" class="btn btn-default" data-filter=".malorum">Malorum</a>
            <a href="#" class="btn btn-default" data-filter=".renaissance">Renaissance</a>
        </div>
    </div>
</body>

