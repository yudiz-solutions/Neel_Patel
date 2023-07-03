<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>My - EASI</title>
    <?php wp_head(); ?>
</head>

<body>
    <!--******************* Header Section Start *********************-->
    <header>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand default-logo" href="index.html"><img
                            src="<?php echo get_template_directory_uri() ?>/images/logo-white.png" alt="logo"></a>
                    <a class="navbar-brand sticky-logo" href="index.html"><img
                            src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'Navigation Menu',
                            'menu_class' => 'nav navbar-nav navbar-right',
                            'container' => 'ul'
                        )
                    );
                    ?>
                </div>
            </div>
        </nav>
    </header>