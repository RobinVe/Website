<?php

function current_link()
{
    $dir =  dirname($_SERVER['PHP_SELF']);
    $dirs = explode("/", $dir);

    return "http://$_SERVER[HTTP_HOST]/$dirs[1]/";
}
