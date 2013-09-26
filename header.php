<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php if(is_home()) : ?><?php bloginfo('name'); ?><?php else : ?><?php wp_title(''); ?><?php endif; ?></title>
        <meta name="description" content="<?php echo get_bloginfo('description'); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:700,700italic,400italic,400' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        <?php wp_head(); ?>
    </head>