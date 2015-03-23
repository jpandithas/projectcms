<?php
/**
 * Date: 17-Mar-15
 * Time: 8:56 PM
 */
function login()
{

    append_content("<h3>Login</h3>");

    if (isset($_POST['submit']) and ($_POST['submit']=="Login"))
    {
       if (empty($_POST['username']) or empty($_POST['password']))
       {
           append_content("<h4>Empty Fields!</h4>");
           show_login_form();
       }
        else
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if (authenticate($username, $password))
            {
                $_SESSION['user'] = $_POST['username'];
                append_content("Welcome user".$_SESSION['user']);
            }
            else
            {
                append_content("<h4>User not found!</h4>");
                show_login_form();
            }
        }
    }
    else
    {
        show_login_form();
    }

}


/**
 *
 */
function show_login_form()
{
    $form = new Webform("", "POST", "login");
    $form->login_form();
    append_content($form->getForm());
}

/**
 * @param $username
 * @param $password
 * @return bool
 */
function authenticate($username, $password)
{
  $sql = new dBQuery();
    return $sql->userExists($username, $password);
}
?>