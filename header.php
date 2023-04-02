<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="nav-wrapper">
    <div class="container-fluid" id="customContainer">
        <div class="menu-here" id="mynav"> 
            <nav class="navbar navbar-expand-lg navbar-light navbar-center wfixed" id="mynavv">
                <a class="logo_header" style="list-style: none;" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php dynamic_sidebar('widget-1');?> 
                </a> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <div id="wrapper">
                        <div class="circle icon">
                            <span class="line top"></span>
                            <span class="line middle"></span>
                            <span class="line bottom"></span>
                        </div>
                    </div>
                </button>
                <?php wp_nav_menu(
                    array(
                    'theme_location'    => 'primary',
                    'menu_class'        => 'navbar-nav ml-auto w-100',
                    'container_class'  => 'collapse navbar-collapse overlay-full',
                    'container_id'    => 'navbarNav',
                    )); 
                ?>
            </nav>
        </div>
    </div>
</div>