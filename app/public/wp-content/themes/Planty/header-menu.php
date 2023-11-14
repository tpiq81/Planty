<?php
// header-menu.php

if (has_nav_menu('header')) {
  wp_nav_menu(array(
    'theme_location' => 'header',
    'menu_class' => 'header-menu', 
    'container' => 'nav', 
  ));
}
?>
