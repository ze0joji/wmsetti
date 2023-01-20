<?php  


//DUMP AND DIE
function dd($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}

// GET URL

function urlIs($url) {
    return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH) == $url;
}