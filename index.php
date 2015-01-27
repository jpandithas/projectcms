<?php
/**
 * Created by PhpStorm.
 * User: Ioannis
 * Date: 19-Jan-15
 * Time: 8:56 PM
 */

$content = "Hello World <br>";
require_once("includes/bootstrap.php");
boot();

$url = new URL();
var_dump($url->GetUrlComponents(True));
echo $url->build_Path(array('action'=>"create",'type'=>"page"));

echo "<br>".$url->build_Link("mylink", "My Link Text", array('action'=>"create",'type'=>"page") );

Router::execute_Module($url);





?>