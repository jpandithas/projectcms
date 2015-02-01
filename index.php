<?php
/**
 * Created by PhpStorm.
 * User: Ioannis
 * Date: 19-Jan-15
 * Time: 8:56 PM
 */


require_once("includes/bootstrap.php");
boot();


//var_dump($url->GetUrlComponents(True));
//echo $url->build_Path(array('action'=>"create",'type'=>"page"));
//echo "<br>".$url->build_Link("mylink", "My Link Text", array('action'=>"create",'type'=>"page") );

    $url= new URL();
    $url->writeURL(array('action'=>"add",'type'=>null,'id'=>null));
Redirection::Redirect($url);
?>