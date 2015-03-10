<?php
/**
 * Created by PhpStorm.
 * User: Ioannis
 * Date: 20-Jan-15
 * Time: 5:10 PM
 */

include ("includes/forms.php");

$form  = new Webform("testpdo.php","GET", "form1");
$form->insert_textbox("Username ", "username");
$form->insert_passwordbox("Password ", "passwd");
$form->add_text("Select Data : ");
$form->insert_option("select_name",array("option1", "option2", "option3", "option4"));
$form->add_text("<br> This is just some text <br>");
$form->insert_submit("Login");
echo $form->getForm();

?>