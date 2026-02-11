<?php
function dd($value)
{

    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function redirectIfNotFound($location = "/")
{
    http_response_code(404);
    header("location: $location", 302);
    exit();
}
