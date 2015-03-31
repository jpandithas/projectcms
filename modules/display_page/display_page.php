<?php
/**
 * Date: 31-Mar-15
 * Time: 8:34 PM
 */

function display_page($args)
{
    $durl = new URL();
    $elements = $durl->GetUrlComponents(TRUE);
    var_dump($elements);
    $pid = $elements['id'];

    if (empty($pid))
    {
        $sql = new dBQuery();
        $query  = "SELECT * FROM web_page";
        $rows = $sql->sendpQuery($query, array());
        foreach ($rows as $row_data)
        {
            append_content($row_data['title']."<br>");
        }
    }

}


function show_page_content()
{
    $sql = new dBQuery();
    $query  = "SELECT * FROM web_page WHERE pageid = ?";
    $params = array($pid);
    $page_data = $sql->sendpQuery($query, $params);

    if (empty($page_data))
    {
        append_content("<h2>404 ! Not Found </h2>");
    }
    else
    {
        $title = "<h2>".$page_data[0]['title']."</h2>";
        $content = $page_data[0]['content'];
        append_content($title.$content);
    }
}
?>