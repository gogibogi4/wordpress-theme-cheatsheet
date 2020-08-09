        <footer>
            <p>This is my footer</p>
        
            <?php 
                //Print out the programmaticly created secondary menu
                wp_nav_menu(
                    array(
                        'theme_location' => 'secondary'
                    )
                );
            ?>
        </footer>

        <?php 
            //Include the JS footer
            wp_footer() 
        ?>
    </body>
</html>