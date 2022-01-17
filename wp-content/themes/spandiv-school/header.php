<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php if(is_front_page()) : ?>
        <title><?= bloginfo('name') ?> - <?= bloginfo('description') ?></title>
    <?php else : ?>
        <title><?= Spandiv::get_title() ?> | <?= bloginfo('name') ?> - <?= bloginfo('description') ?></title>
    <?php endif; ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.1/simple-lightbox.min.css" integrity="sha512-5CXltlbBBUSagP9f7vGb78xbExT4oaXtvUGXShbcSss85Tw5wG1fz7fFBF6o1Gp2teZQYvwf70Sz2LYzvNF4Eg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Code+Latin:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= bloginfo('template_url') ?>/assets/css/all.min.css"> -->
	<!-- <link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" /> -->
	<?php wp_head(); ?>
</head>
<body <?php body_class('spandiv'); ?>>

    <?php wp_body_open(); ?>
    