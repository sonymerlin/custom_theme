<?php
/**
 * The Header for our theme.
 *
 * @package EMA
 */

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
        
        <?php wp_head(); ?>
        <style type="text/css">
            .ytp-impression-link-content {
                display: none !important;
            }
            .ytp-impression-link{
                display: none !important;
            }
        </style>    
       



    </head>
    <body <?php body_class(); ?>>
    <?php if(is_front_page()){ ?>
        <header>
        <div class="imageoverlay">
    <?php }else if(is_page( 12 )){ ?>
        <header class="insidebanner">
        <div class="imageoverlay">
    <?php }else if(is_archive()){ ?>
        <header class="blogbanner">
        <div class="imageoverlay">
    <?php }else{ ?>
        <header class="insidepagebanner">
    <?php }
?>
            <div class="container">
                <div class="clsHeaderLeft">
                    <div class="clsLogo"><a href="<?php bloginfo('url'); ?>"><img alt="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-2023-w-mono.png"></a></div>
                </div>
                <div class="clsHeaderRight">
                <div class="clsMenu">
                  <div class="container">
                  <nav id='cssmenu'>
                     <div id="head-mobile"></div>
                     <div class="button"></div>
                     <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
                  </nav>
                 </div>
                </div>
 			    </div>
                <div class="clearfix"></div>
                <?php if(is_front_page()){ ?>
                <div class="bannerscaption">
                <?php if( get_field('banner_caption') ): ?>
                    <h1><?php the_field("banner_caption"); ?></h1>
                <?php endif; ?>
                </div>
                <div class="clearfix"></div>
                <div class="videosec">
                
                <div class="lline">&nbsp;</div>
                <div class="bannervideo">
                    <?php echo do_shortcode('[embedyt]https://www.youtube.com/watch?v=JGhGDF4sqiA&width=640&height=360[/embedyt]'); ?>
                    </div>
                </div>
                <?php }else if(is_page( 12 )){ ?>
                    <div class="bannercaption">
                    <?php if( get_field('banner_caption') ): ?>
                    <h1><?php the_field("banner_caption"); ?></h1>
                <?php endif; ?>
                    </div>
                    <?php }else if(is_archive()){ ?>
                        <div class="bannercaption">
                        <h1> Blog</h1>
                        <h3>News and updates from EMA and the employee relations sector.</h3>
                        </div>

                <?php }else{ ?>
                    <div class="bannercaption">
                    <h1><?php if ( have_posts() ) : while ( have_posts() ) :
                    the_post();
                    the_title(); 
                    endwhile; 
                    endif;?></h1>
                </div>
                <?php } ?>
            </div>
        </header>
        <?php if(is_archive()){ ?>
        </div>
         <?php }else if(is_page( 12 )){ ?>
         </div>
        <?php }else if(is_front_page()){?>
            </div>
        <?php } ?>