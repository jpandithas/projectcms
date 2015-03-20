<?php
/**
 * Date: 20-Mar-15
 * Time: 1:42 PM
 */

function logout()
{
  session_destroy();
    $newurl = new URL();
    $newurl->writeURL(array("action"=>"login"));
    Redirection::Redirect($newurl);
}

?>