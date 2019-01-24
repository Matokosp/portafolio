<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="author" content="Matias Salinas">
    <meta name="description" content="Matias Salinas, Front End / Graphic Designer Portfoio">
    <meta name="keywords"  content="design, portfolio, portfolio chile design, front end design, graphic design, ui design">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-menu' ) ); ?>
<?php } ?>