<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Get Website Title and Description -->
    <title><?php bloginfo( 'name' ) ?> <?php bloginfo( 'description' ) ?> </title>
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/css/styles.css">
    <!-- Import FontAwesome using CDNJS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Let wordpress add its own shit -->
    <?php wp_head() ?>
</head>
