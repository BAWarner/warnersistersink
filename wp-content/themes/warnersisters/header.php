<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php if(get_field('favicon', 'options')):
			$favicon = get_field('favicon', 'options');
		?>
			<link rel="shortcut icon" href="<?php echo $favicon['url']; ?>" />
		<?php else:?>
			<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/wsi_mark.png" />
		<?php endif;?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
		<div class="title-bar-left">
			<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
			<span class="site-mobile-title title-bar-title">
				<?php if(get_field('logo', 'options')):
					$logo = get_field('logo', 'options');
				?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="logo header" src="<?php echo $logo['url'];?>"/>
					</a>
				<?php else:?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="logo header" src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/wsi_logo.png"/>
					</a>
				<?php endif;?>
			</span>
		</div>
	</div>
	<div class="top-bar-right">
		<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
			<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
		<?php endif; ?>
	</div>
	<?php if(get_field('enable_featured_slider', 'options') == 'true' && is_front_page()):
		$slides = get_field('slide_options', 'options');
	?>
		<div id="featured-slider" class="height-85vh relative js-owl owl-carousel dots">
			<?php foreach($slides as $slide):
				$background_image = $slide['slide_background_image']['url'];
				$background_size = $slide['slide_image_size'];
				$slide_header = $slide['slide_header'];
				$header_color = $slide['slide_header_color'];
				$slide_sub_header = $slide['slide_sub_header'];
				$sub_header_color = $slide['slide_sub_header_color'];
				$slide_cta = $slide['slide_cta'];
				$content_alignment = $slide['slide_content_alignment'];
				$content_vertical_alignment = $slide['slide_content_vertical_alignment'];
				if($content_alignment != ''){
					$content_alignment = $slide['slide_content_alignment'];
				}else{
					$content_alignment = 'center';
				}
				if($content_vertical_alignment != ''){
					$content_vertical_alignment = $slide['slide_content_vertical_alignment'];
				}else{
					$content_vertical_alignment = 'center';
				}
			?>
				<div class="slide height-100-p relative item pad-55 row expanded align-<?php echo $content_alignment;?> align-<?php echo $content_vertical_alignment;?>" style="background-image: url(<?php echo $background_image;?>); background-size: <?php echo $background_size;?>;">
					<div class="column large-4 small-12">
						<h3 class="header" style="color: <?php echo $header_color;?>;"><?php echo $slide_header;?></h3>
						<span class="sub-header" style="color: <?php echo $sub_header_color;?>;"><?php echo $slide_sub_header;?></span>
						<?php
							foreach($slide_cta as $cta):
								$cta_url = $cta['cta_link']['url'];
								$cta_title = $cta['cta_link']['title'];
								$cta_target = $cta['cta_link']['target'];
								$cta_background_color = $cta['cta_background_color'];
								$cta_font_color = $cta['cta_color'];
						?>
							<button class="cta">
								<a href="<?php echo $cta_url;?>" target="<?php echo $cta_target;?>" style="color:<?php echo $cta_font_color;?>;background-color: <?php echo $cta_background_color;?>">
									<?php echo $cta_title;?>
								</a>
							</button>
						<?php endforeach;?>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	<?php endif;?>
	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>
	<header>
		<div class="custom-header">
			<div class="left-menu">
				<?php wp_nav_menu( 
						$args = array(
							'menu'	=> 'Left Menu',
						)
					);
				
				?>

			</div>
			<div class="center-menu">
				<?php if(get_field('logo', 'options')):
					$logo = get_field('logo', 'options');
				?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="logo header" src="<?php echo $logo['url'];?>"/>
					</a>
				<?php else:?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="logo header" src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/wsi_logo.png"/>
					</a>
				<?php endif;?>
			</div>
			<div class="right-menu">
				<?php foundationpress_top_bar_r(); ?>
			</div>
		</div>
	</header>
