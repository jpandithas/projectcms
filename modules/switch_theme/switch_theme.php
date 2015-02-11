<?php
/**
 * Date: 10-Feb-15
 * Time: 8:28 PM
 */

function switch_theme($args)
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