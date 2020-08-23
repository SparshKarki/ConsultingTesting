<?php /* Template Name: Coming Soon Template */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="<?php echo esc_attr(apply_filters('consulting_main_container_class', 'container')); ?>">
        <?php the_content(); ?>
    </div>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>