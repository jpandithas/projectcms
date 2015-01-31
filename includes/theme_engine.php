<?php
/**
 * Date: 19-Jan-15
 * Time: 8:44 PM
 */

function print_content()
{
    global $content;
    ob_start();
    if (!isset($content))
    {
       $content .= "No Content to display";
    }
    print($content);
    ob_end_flush();
}

function print_header()
{
    echo "<h1>Simple CMS</h1>";
}

function print_sidebar()
{
    echo "<h3>Sidebar</h3>";
}

function print_footer()
{
    echo "Footer";
}

?>