<?php
/**
 * Date: 23-Mar-15
 * Time: 8:58 PM
 */
class Sidebar
{
    public static function Navigation_main()
    {
        $pdo = new dBQuery();
        $url_links = new URL();
        $sql  = "Select action, type, id, status, permission FROM routes";
        $rows = $pdo->sendpQuery($sql, array());
        append_sidebar("<h4>Navigation</h4>");
        append_sidebar("<ul id='sidebar-links'>");
        foreach ($rows as $lines)
        {
           $linktext = $lines['action']." ".$lines['type'];
            $url_components = array("action"=>$lines['action']);
            if (!empty($lines['type']))
            {
              $url_components['type'] = $lines['type'];
            }
            if (!empty($lines['id']))
            {
                $url_components['id'] = $lines['id'];
            }
          $link =  $url_links->build_Link("sidebar-item", $linktext, $url_components);
            append_sidebar("<li> $link </li>");
        }
        append_sidebar("</ul>");
    }



}

?>