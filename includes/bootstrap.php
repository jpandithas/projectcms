<?php
/**
 * Date: 19-Jan-15
 * Time: 8:50 PM
 */

global $content;
/**
 *Bootloader function
 */
function boot ()
{
    global $content;
    $includes = glob ("includes/*");
    foreach ($includes as $file )
    {
       if (is_readable($file) && !is_uploaded_file($file) && $file !="includes/theme_engine.php")
       {
           include_once($file);

       }
    }
    $url = new URL();
    include "includes/theme_engine.php";
    Router::execute_Module($url, null);
    include("themes/theme.php");
}


?>