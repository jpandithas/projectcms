<?php
/**
 * Date: 19-Jan-15
 * Time: 8:50 PM
 */


/**
 *Bootloader function
 */
function boot ()
{

    fileloader("includes/classes/*");
    fileloader("includes/misc/*");
    $url = new URL();
    if ($url->check_empty_url() and empty($_SESSION['user']))
    {
        $url->writeURL(array("action"=>"login"));
    }
    Router::execute_Module($url, null);
    Sidebar::Navigation_main();
    Theme::RenderTheme();
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