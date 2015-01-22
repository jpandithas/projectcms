<?php
/**
 * Created by PhpStorm.
 * User: Ioannis
 * Date: 19-Jan-15
 * Time: 8:44 PM
 */

function print_content()
{
    global $content;
    if (!isset($content))
    {
       $content .= "No Content to display";
    }
    print($content);
}

?>