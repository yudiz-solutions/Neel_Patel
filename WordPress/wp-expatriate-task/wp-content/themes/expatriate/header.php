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
    <!--========= HEADER SECTION STARTS =========-->
    <header>
        <?php
        $sticky_icon = get_field('sticky_icon', 'option');
        ?>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand default-logo" href="<?= site_url(); ?>">
                        <!-- Light Icon -->
                        <?= the_custom_logo(); ?>
                    </a>

                    <a class="navbar-brand sticky-logo" href="<?= site_url(); ?>">
                        <!-- Dark Icon -->
                        <img src="<?= get_theme_mod('transparent_logo'); ?>" alt="Dark Icon">
                    </a>
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
    <!--========= HEADER SECTION ENDS =========-->