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
//    include("theme_engine.php");
//    include("url_class.php");
//    include("pdo_class.php");

    $includes = glob ("includes/*");
    foreach ($includes as $file )
    {
       if (is_readable($file) && !is_uploaded_file($file))
       {
           include_once($file);
       }
    }

    include("themes/theme.php");
}
?>