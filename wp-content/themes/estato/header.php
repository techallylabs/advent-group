<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php boldthemes_theme_data(); ?>>
<head>
	
	<?php
	
	boldthemes_set_override();
	boldthemes_header_init();
	boldthemes_header_meta();

	$body_style = '';
	
	$page_background = boldthemes_get_option( 'page_background' );
	if ( $page_background ) {
		if ( is_numeric( $page_background ) ) {
			$page_background = wp_get_attachment_image_src( $page_background, 'full' );
			$page_background = $page_background[0];
		}
		$body_style = ' style="background-image:url(' . $page_background . ')"';
	}

	$header_extra_class = ''; 

	if ( boldthemes_get_option( 'boxed_menu' ) ) {
		$header_extra_class .= 'gutter ';
	}

	wp_head(); ?>
	
</head>

<body <?php body_class(); ?> data-autoplay="<?php echo intval( boldthemes_get_option( 'autoplay_interval' ) ); ?>" <?php echo wp_kses_post( $body_style ); ?>>

<div class="grid-lines">
	<div class="container">
		<div class="row">
			<div class="col-xs-3 col"></div>
			<div class="col-xs-3 col"></div>
			<div class="col-xs-3 col"></div>
			<div class="col-xs-3 col"></div>
		</div>
	</div>
</div>

<?php echo boldthemes_preloader_html(); ?>

<div class="btPageWrap" id="top">
	
    <header class="mainHeader btClear <?php echo esc_attr( $header_extra_class ); ?>">
        <div class="port">
			<?php if ( ! boldthemes_get_option( 'top_tools_in_menu' ) ) echo boldthemes_top_bar_html( 'top' ); ?>
			<div class="btLogoArea menuHolder">
				<?php if ( has_nav_menu( 'primary' ) ) { ?>
					<span class="btVerticalMenuTrigger"></span>
					<span class="btHorizontalMenuTrigger"></span>
				<?php } ?>
				<div class="logo">
					<span>
						<?php boldthemes_logo( 'header' ); ?>
					</span>
				</div><!-- /logo -->
				<?php 
					if ( boldthemes_get_option( 'menu_type' ) == 'hLeftBelow' || boldthemes_get_option( 'menu_type' ) == 'hRightBelow' ) {
						echo boldthemes_top_bar_html( 'menu-half' );
						echo '</div><!-- /menuHolder -->';
						echo '<div class="btBelowLogoArea btClear">';
					}
				?>
				<div class="menuPort">
						<?php if ( boldthemes_get_option( 'top_tools_in_menu' ) ) echo boldthemes_top_bar_html( 'menu' ); ?>
					<nav>
						<?php boldthemes_nav_menu(); ?>
					</nav>
				</div><!-- .menuPort -->
			</div><!-- /menuHolder / btBelowLogoArea -->
		</div><!-- /port -->
    </header><!-- /.mainHeader -->
	<div class="btContentWrap btClear">
		<?php if ( EstatoTheme::$boldthemes_page_for_header_id != '' && ! is_search() ) { ?>
			<?php
				$content = get_post( EstatoTheme::$boldthemes_page_for_header_id );
				$top_content = $content->post_content;
				if ( $top_content != '' ) {
					$top_content = do_shortcode( $top_content );
				}
				echo '<div class = "btBlogHeaderContent">' . $top_content . '</div>';
			?>
		<?php } ?>
		<div class="btContentHolder">
			<?php boldthemes_header_headline(); ?>
			<div class="btContent">
			