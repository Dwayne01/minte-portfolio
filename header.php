<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head( ); ?>
</head>
<body <?php body_class(); ?>>

  <div class="container">
    <div class="row">
        <div class="sidebar">
            <a href="<?php  echo home_url(); ?>" class="logo">
              Mt
            </a>

            <div class="nav">
                <?php wp_nav_menu(array(
                    'theme_location' => 'menu-main',
                    'container' => 'nav',
                    'container_class' => 'menu-container',
                    'menu_class' => 'main-menu'
                )); ?>
            </div>
            <div>
            </div>
        </div>

        <div class="container-box">