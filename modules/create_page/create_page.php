<?php
/**
 * Date: 27-Jan-15
 * Time: 1:46 AM
 */

function create_page($args)
{

    $content .=  " create_page With $args";
    $content .= something($args);
    content($content);
}

function something($args) {

    return  "<br>I am called with args: ".$args." and ".__FUNCTION__;

}

