<?php
/**
 * Date: 10-Feb-15
 * Time: 8:28 PM
 */

function switch_theme($args)
{
    $query  = new dBQuery();

    if ((!empty($_POST['submit'])) && ($_POST['submit']=="SelectTheme"))
    {
        if (!empty($_POST['theme']))
        {
            $theme_id = $_POST['theme'];
            $sql = "UPDATE themes SET enabled = 0 WHERE enabled =1";
            $query->sendpQuery($sql, array());
            $sql = "UPDATE themes SET enabled = 1 WHERE tid=$theme_id";
            $query->sendpQuery($sql, array());
            append_content("<h4>Theme Changed!</h4>");
        }
        else
        {
            append_content("<h4>Nothing Selected!</h4>");
        }
    }
    else
    {
        append_content("<h4> Select a Theme</h4>");
    }
    print_theme_form();
}

function print_theme_form()
{
    $sql = "SELECT * FROM themes";
    $query = new dBQuery();
    $themes = $query ->sendpQuery($sql, array());
    $rows = count($themes);
    $form = "<form id='form' action='' method='POST'>";
    $form .= "<table><thead><tr><td> Theme Name </td><td> Status </td><td> Select </td></tr></thead>";
    for ($i=0; $i<$rows; $i++)
    {
        $form .= "<tr><td>".$themes[$i]['theme_name']."</td>";
        if ($themes[$i]['enabled'] == 0)
        {
            $form .= "<td>Disabled</td><td><input type='radio' name='theme' value='".$themes[$i]['tid']."'</td></tr>";
        }
        else
        {
            $form .= "<td>Enabled</td><td><input type='radio' name='theme' value='".$themes[$i]['tid']."'</td> </tr>";
        }
    }
    $form .="</table><input name='submit' type='submit' value='SelectTheme'></form> ";
    append_content($form);
}

function scanfolders()
{
    $path = "themes/*";
    $folders = glob($path);
}

?>