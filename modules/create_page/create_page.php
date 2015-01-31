<?php
/**
 * Date: 27-Jan-15
 * Time: 1:46 AM
 */

function create_page($args)
{
    global $content;
    $content .=  "create_page With $args";
    $content .= something($args);
}

function something($args) {

    return  "<br>I am called with args".$args." and ".__FUNCTION__;

}

