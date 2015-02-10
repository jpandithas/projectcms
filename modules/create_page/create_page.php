<?php
/**
 * Date: 27-Jan-15
 * Time: 1:46 AM
 */

function create_page($args)
{

<<<<<<< HEAD
    $content =  " create_page With $args";
    $content .= something($args);
    append_content($content);
=======
    $content .=  " create_page With $args";
    $content .= something($args);
    content($content);
>>>>>>> origin/master
}

function something($args) {

    return  "<br>I am called with args: ".$args." and ".__FUNCTION__;

}

