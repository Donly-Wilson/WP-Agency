<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?php wp_title() ?></title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Get right location for WP css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css?counter=<?php echo time(); ?>">

    <!-- import axios into project -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- input wordpress admin header navebar-->
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <header>
        <?php
        //Function to create an arconym from site name
        function arconym($str, $as_space = array('-'))
        {
            $str = str_replace($as_space, ' ', trim($str));
            $ret = '';
            foreach (explode(' ', $str) as $word) {
                $ret .= strtoupper($word[0]);
            }
            return $ret;
        }
        ?>
        <div class="logo">
            <a href="/" class="name"><?php echo arconym(get_bloginfo('name')); ?>
                <span class="dot"></span>
        </div>
        </div>
        <div class="header-menu">
            <li class="menu-link">
                <a href="/" data-text="Home">Home</a>
                <ul class=subMenu-link>
                    <li><a href="/#services-section" data-text="Services">Services</a></li>
                    <li><a href="/#portfolio-section" data-text="Portfolio">Portfolio</a></li>
                    <li><a href="/#experience-section" data-text="Experience">Experience</a></li>
                    <li><a href="/#testimonials-section" data-text="Testimonials">Testimonials</a></li>
                </ul>
            </li>
            <li class="menu-link"><a href="/#blog-section" data-text="Blog">Blog</a></li>
            <li class="menu-link"><a href="/about" data-text="about">about</a></li>
        </div>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </header>
    <div class="mobile-menu">
        <div class="mobile-menu-options">
            <a href="/">Home</a>
            <a href="/#services-section">Services</a>
            <a href="/#portfolio-section">Portfolio</a>
            <a href="/#experience-section">Experience</a>
            <a href="/#blog-section">Blog</a>
            <a href="/#testimonials-section">Testimonials</a>
            <a href="/about">About</a>
        </div>
        <div class="menu-btn"></div>
    </div>