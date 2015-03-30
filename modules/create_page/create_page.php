<?php
/**
 * Date: 27-Jan-15
 * Time: 1:46 AM
 */

function create_page($args)
{
    $user = new User();
    if ($user->user_session_exists()) {
        append_content("<h2> Add Page </h2>");
        if (isset($_POST['submit']) and ($_POST['submit']=="AddPage"))
        {
           if (empty($_POST['title']) or empty($_POST['content']) or empty($_POST['alias']))
           {
               append_content("<h4> There are some errors !</h4>");
               show_form();
           }
            else
            {
                $query = new dBQuery();
                $sql = "INSERT INTO web_page VALUES (?, ?, ?, ?)";
                $args = array (NULL, $_POST['title'], $_POST['content'], $_POST['alias']);
                $id = $query->insert_data($sql, $args);
                append_content("Page Created! ID is: $id");
                $page_data = "<h2>".$_POST['title']."</h2>".$_POST['content']."<br> With alias: ".$_POST['alias'];
                append_content("<hr> <i>Preview Page</i> <hr>".$page_data);
            }

        }
        else
        {
            show_form();
        }


    }
    else
    {
        append_content("You need to login first");
        $newurl = new URL();
        $link = $newurl->build_Link("login_link", "HERE", array("action"=>"login"));
        append_content("<br>Login $link");
    }

}

function show_form()
{
    $add_page_form  = new Webform("","POST","create_page");
    $add_page_form->insert_textbox("TITLE  ", "title");
    $add_page_form->add_textarea("CONTENT : ", "4", "40", "content", "Add Content..");
    $add_page_form->insert_textbox("ALIAS ", "alias");
    $add_page_form->insert_submit("AddPage");
    append_content($add_page_form->getForm());
}

?>