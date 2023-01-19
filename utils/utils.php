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
    return $_SERVER['REQUEST_URI'] == $url;
}