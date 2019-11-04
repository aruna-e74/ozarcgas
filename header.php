<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage ozarc_gas
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'ozarcgas' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrap">
			<div class="header-area-wrapper">
				<div class="row">
					<div class="col-6">
						<div class="logo-wrapper">
							<a href="<?php bloginfo('url') ?>"> <img src="<?php the_field('logo', 'option') ?>" alt=""> </a>
						</div>
					</div>
					<div class="col-6">
						<div class="top-menu-wrapper">
							<div class="top-nav-wrapper">
								<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-menu-wrapper">
			<div class="main-nav-wrapper">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'main' ); ?>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<?php if ( is_front_page() ) : ?>
	<section id="home-sider-section">
		<div class="wrap">
			<?php if ( have_rows('home_slider') ) : $num = 0;?>
			<div id="home-carousel" class="carousel slide carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
				<?php while( have_rows('home_slider') ) : the_row();
					$image = get_sub_field('slider_image');
				?>
					<?php if ( $num == 0 ) : ?>
					<div class="carousel-item active">
					<?php else : ?>
					<div class="carousel-item">
					<?php endif; ?>
						<div class="slider-image-wrapper" style="background:url(<?php echo $image; ?>) no-repeat;"></div>
					</div>
				<?php $num++; endwhile; ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</section>
	<?php endif; ?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
