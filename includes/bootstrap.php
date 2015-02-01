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
    $content = null;
    fileloader("includes/classes/*");
    fileloader("includes/misc/*");
    $url = new URL();
    Router::execute_Module($url, null);
    include("themes/theme.php");
}

    /**
     * Functiion to load files from given path
     * @param $path
     */
    function fileloader($path)
{
    $includes = glob ("$path");
    foreach ($includes as $file )
    {
        if (is_readable($file) && !is_uploaded_file($file))
        {
            include_once($file);
        }
    }
}
?>