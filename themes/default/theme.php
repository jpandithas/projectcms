<?php
/**
 * Date: 19-Jan-15
 * Time: 8:36 PM
 */
?>
<html>
<head>
    <link rel="stylesheet" href="themes/default/style.css">
    <title>My CMS</title>
</head>
<body>
<div id="wrapper-site">
    <div id = "header"><?php print_header(); ?></div>
   <div id="inner">
    <div id = "sidebar-left"><?php print_sidebar();?></div>
    <div id = "content-main"><?php print_content();?></div>
   </div>
    <div id = "footer"><?php print_footer(); ?></div>
    </div>

</body>


</html>