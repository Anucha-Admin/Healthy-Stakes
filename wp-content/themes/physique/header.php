 <?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Physique
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
        
<div id="header">
            <div class="header-inner">	
				<div class="logo">
					<?php physique_the_custom_logo(); ?>
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>

					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p><?php echo esc_html($description); ?></p>
					<?php endif; ?>
				</div>
                <?php
					$icon1 = get_theme_mod('icon1');
					$icon2 = get_theme_mod('icon2');
					$icon3 = get_theme_mod('icon3');
					$icon4 = get_theme_mod('icon4');
				?>
                <?php if(($icon1 || $icon2 || $icon3 || $icon4) != ''){ ?>
                  <div class="header-social">
                	<div class="header-social-wrap">
                    	<div class="social-icons">
                        	<?php if($icon1 != '') { ?>
                        		<a href="<?php echo esc_url(get_theme_mod('icon1-link',true)); ?>" target="_blank"><i class="fa fa-<?php echo esc_attr(get_theme_mod('icon1',true)); ?>"></i></a>
                            <?php } ?>
                            <?php if($icon2 != '') { ?>
                            	<a href="<?php echo esc_url(get_theme_mod('icon2-link',true)); ?>" target="_blank"><i class="fa fa-<?php echo esc_attr(get_theme_mod('icon2',true)); ?>"></i></a>
                            <?php } ?>
                            <?php if($icon3 != '') { ?>
                            	<a href="<?php echo esc_url(get_theme_mod('icon3-link',true)); ?>" target="_blank"><i class="fa fa-<?php echo esc_attr(get_theme_mod('icon3',true)); ?>"></i></a>
                            <?php } ?>
                            <?php if($icon4 != '') { ?>
                            	<a href="<?php echo esc_url(get_theme_mod('icon4-link',true)); ?>" target="_blank"><i class="fa fa-<?php echo esc_attr(get_theme_mod('icon4',true)); ?>"></i></a>
                            <?php } ?>
                        </div><!-- social-icons -->
                    </div><!-- header social wrap -->
                </div><!-- header-social -->
                <?php } ?>
				<div class="toggle">
						<a class="toggleMenu" href="#"><?php esc_html_e('Menu','physique'); ?></a>
				</div> 						
				<div class="main-nav">
						<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>							
				</div>
                						
				<div class="clear"></div>				
            </div><!-- header-inner -->               
		</div><!-- header -->