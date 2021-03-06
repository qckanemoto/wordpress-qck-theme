<?php
/*
Template Name: TtskchTheme
*/
global $tchConfig;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic" rel="stylesheet">

    <link href="<?php bloginfo('template_url'); ?>/assets/css/style.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="inner clearfix">
        <?php if ($tchConfig['avatar']): ?>
        <a href="<?php bloginfo('url'); ?>">
            <img class="avatar" src="<?php echo $tchConfig['avatar']; ?>" alt=""/>
        </a>
        <?php endif; ?>
        <h1 class="clearfix">
            <a class="title <?php if (!$tchConfig['avatar']) { echo 'slim'; } ?>" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            <p class="description"><?php bloginfo('description'); ?></p>
        </h1>
    </div>
</header>
