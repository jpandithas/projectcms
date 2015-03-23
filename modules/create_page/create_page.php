<?php
/**
 * Date: 27-Jan-15
 * Time: 1:46 AM
 */

function create_page($args)
{
    $user = new User();
    if ($user->user_session_exists()) {
        $content = " create_page With $args";
        $content .= something($args);
        append_content($content);
    }
    else
    {
        append_content("You need to login first");
        $newurl = new URL();
        $link = $newurl->build_Link("login_link", "HERE", array("action"=>"login"));
        append_content("<br>Login $link");
    }

}

function something($args) {

    return  "<br>I am called with args: ".$args." and ".__FUNCTION__;

}

