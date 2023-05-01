<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Nunito+Sans:wght@600&family=Poppins:wght@400;500&family=Rubik:wght@600&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <section class="header sidePadding">


        <div class="logoContainer">
            <a href="<?php  echo get_site_url( ); ?>" class="navLogo">
                <?php
                    $logoURL = get_header_image();
                ?>
                <img src="<?php echo $logoURL  ?>" alt="logo" />
            </a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>

        <div class="main-menu-container" id="myTopnav">
            <?php
                $args = [
                    'theme_location'  =>  'main-menu',
                    'menu_class' => 'navbar_menu',
                    "menu_id" => 'mynav',
                    "link_before" => '<p>',
                    "link_after" => '</p><div class="navLinkDot"></div>',
                    'container' => 'none',
                ];
                wp_nav_menu( $args );
            ?>
            <button class=" navBtn btnLight subText1 navLink">
                Sign in
            </button>
            <button class="navBtn btnLight subText1 navLink">
                Login
            </button>
        </div>

    </section>