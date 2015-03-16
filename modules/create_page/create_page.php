<?php
/**
 * Date: 27-Jan-15
 * Time: 1:46 AM
 */

function create_page($args)
{

    $content =  " create_page With $args";
    $content .= something($args);
    append_content($content);

    $form = new Webform("", "POST", "myform");
    $form->add_text("<h3>Header</h3>");
    $form->insert_textbox("", "header");
    $formdata = $form->getForm();
    append_content($formdata);

}

function something($args) {

    return  "<br>I am called with args: ".$args." and ".__FUNCTION__;

}

