<?php
/**
 * Date: 17-Mar-15
 * Time: 8:56 PM
 */
function login()
{

    append_content("<h3>Login</h3>");
    if (isset($_POST['Login']))
    {

    }

}

function show_login_form()
{
    $form = new Webform("", "POST", "login");
    $form->login_form();
    append_content($form->getForm());
}

function authenticate($username, $password)
{

}
?>