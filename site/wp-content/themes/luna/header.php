<!DOCTYPE html>
<html lang="EN">

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php wp_title();?></title>
    <!-- Customizable CSS -->
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Overpass:ital,wght@0,100..900;1,100..900&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

</head>

<body <?php body_class();?>>
<?php if(is_page_template('template-packages.php')){?>
<div class="img-about scroll-container hero-section scoll-vertical">
                            <div class="loop-container">
            <div class="scrolling-text"> Styling Packages &nbsp; </div>
            <div class="scrolling-text">  Styling Packages </div>
            </div>
                       </div>
<?php } ?>
    <!-- Header-section-end-->
    <div class="outer">
        <div class="bg-head">
            <img src="<?php bloginfo("template_url")?>/img/top-bg.svg" alt="">
        </div>
        <header>
            <div class="header-container">
            <?php if(is_front_page()){?>
            <?php } else{?>
                <div class="logo-head">
                  <a href="<?php echo home_url();?>"><img src="<?php echo get_field('site_logo','option');?>" alt="Luna Logo"></a>                 
               </div>
            <?php } ?>
           
               <?php ?>
                <div class="first-menu">
                <?php
                            $defaults = array(
                                'menu' => 'Top Menu',
                                'after' => '',
                                'items_wrap' => '<ul>%3$s</ul>',
                                'theme_location' => 'top_right',
                                'depth' => 0,
                                'container' => false,
                                'walker'    => new themeslug_walker_nav_menu
                                );
                                wp_nav_menu($defaults);
                    ?>
                </div>
                
        <div class="hamburger" id="hamburger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
    <nav id="nav-menu" class="nav-menu">
                <?php
                            $defaults = array(
                                'menu' => 'Header Menu',
                                'after' => '',
                                'items_wrap' => '<ul>%3$s</ul>',
                                'theme_location' => 'header',
                                'depth' => 0,
                                'container' => false,
                                'walker'    => new themeslug_walker_nav_menu
                                );
                                wp_nav_menu($defaults);
                    ?>
    </nav>

            </div>
        </header>
