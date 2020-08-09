<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Learning site</title>
        <?php 
            //Include the css header
            wp_head(); 
        ?>
    </head>
    <body>
        <?php 
            //Print out the programmaticly created primary menu
            wp_nav_menu(
                array(
                    'theme_location' => 'primary'
                )
            );
        ?>