<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Helper
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'helper' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="site-branding">
            <?php
            the_custom_logo();
            $helper_description = get_bloginfo( 'description', 'display' );
            if ( $helper_description || is_customize_preview() ) :
                ?>
                <p class="site-description"><?php echo $helper_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
            <?php endif; ?>
        </div><!-- .site-branding -->
        
        <?php if ( is_user_logged_in() ) : ?>
            <a href="<?php echo wp_logout_url( home_url( '/' ) ); ?>" class="logout-button">Log Out</a>
        <?php endif; ?>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
