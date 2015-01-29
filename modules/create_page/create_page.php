<?php
/**
 * Date: 27-Jan-15
 * Time: 1:46 AM
 */

function create_page($args)
{
    echo "create_page With $args";
    something($args);
}

function something($args) {

    echo "<br>I am called with args".$args." and ".__FUNCTION__;

}

