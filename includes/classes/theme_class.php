<?php
/**
 * Date: 09-Feb-15
 * Time: 8:26 PM
 */

class Theme
{

    public static function RenderTheme()
    {
        $query = new dBQuery();
        $sql = "SELECT theme_name FROM themes WHERE enabled = 1 LIMIT 1";
        $result = $query->sendpQuery($sql, array());
        $path  = $result[0]['theme_name'];
        $theme_file = "themes/".$path."/theme.php";
        if (is_readable($theme_file))
        {

            include $theme_file;
            append_content("<h1>LOADED</h1>");
        }
        else
        {
            include "themes/default/theme.php";
        }

    }
}

?>