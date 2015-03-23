<?php
/**
 * Date: 19-Jan-15
 * Time: 8:44 PM
 */

function print_content()
{
    ob_start();

    if (!isset($GLOBALS['content']))
    {
       $content = "No Content to display";
    }
    else
    {
        $content = $GLOBALS['content'];
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
    if (isset($_SESSION['user']))
    {
        $userdata = " USER: " . $_SESSION['user'];
    }
    else
    {
        $userdata = " Visitor";
    }
    if (!isset($GLOBALS['sidebar']))
    {
      $sidebar = "<h3>Sidebar</h3>  $userdata";
    }
    else
    {
      $sidebar = "<h3>Sidebar</h3>" . $userdata . $GLOBALS['sidebar'];
    }

    print($sidebar);


}

function print_footer()
{
    echo "Footer";
}

function append_content($content)

    {
        if (isset($GLOBALS['content']))
        {
            $GLOBALS['content'] .= $content;
        }
        else
        {
            $GLOBALS['content'] = $content;
        }
    }

function append_sidebar ($sidebar)
{
    if (isset($GLOBALS['sidebar']))
    {
        $GLOBALS['sidebar'] .= $sidebar;
    }
    else
    {
        $GLOBALS['sidebar'] = $sidebar;
    }
}
?>