<?php
/*
Template Name: QckTheme
*/
global $qckConfig;
?><!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic" rel="stylesheet">

    <link href="<?php echo bloginfo('template_url'); ?>/assets/lib/easy-social-buttons/jquery.easy-social-buttons.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url'); ?>/assets/css/style.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="inner clearfix">
        <?php if ($qckConfig['avatar']): ?>
        <a href="<?php echo bloginfo('url'); ?>">
            <img class="avatar" src="<?php echo $qckConfig['avatar']; ?>" alt=""/>
        </a>
        <?php endif; ?>
        <h1 class="clearfix">
            <a class="title <?php if (!$qckConfig['avatar']) { echo 'slim'; } ?>" href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a>
            <p class="description"><?php echo bloginfo('description'); ?></p>
        </h1>
    </div>
</header>
