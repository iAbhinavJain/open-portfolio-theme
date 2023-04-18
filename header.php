<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Get Website Title and Description -->
    <title>
        <?php wp_title('|', true, 'right');
        bloginfo('name') ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/styles.css">
    <!-- Import FontAwesome using CDNJS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Let wordpress add its own shit -->
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <!-- Loader Animation Start -->
    <div class="loader">
        <div class="loader-content">
            <div class="load-progress"></div>
        </div>
    </div>
    <!-- Loader Animation End -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
        <header>
            <!-- Desktop Header -->
            <div id="desktop-header">
                <!-- Logo -->
                <a href="<?php echo home_url() ?>">
                    <h2 class="logo">
                        <?php bloginfo('name') ?>
                    </h2>
                </a>
                <!-- Navigation Starts -->
                <ul class="menu right-menu">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'container_class' => 'menu right-menu')); ?>
                </ul>
                <!-- Navigation Ends -->
            </div>
            <!-- Desktop Header End -->
            <!-- Mobile Header -->
            <div id="mobile-header">
                <div class="logo-menu-icon-wrapper">
                    <a href="<?php echo home_url() ?>/">
                        <h2 class="logo">
                            <?php bloginfo('name') ?>
                        </h2>
                    </a>
                    <a class="menu-icon" onclick="toggleMenu();"><i class="fa-solid fa-bars"></i></a>
                </div>
                <!-- Reason for adding inline style to ul: Javascript's style.display only looks at inline styles  -->
                <ul style="display: none;">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'container_class' => 'menu right-menu')); ?>
                </ul>
            </div>
            <!-- Mobile Header End -->
        </header>
        <!-- Header End -->