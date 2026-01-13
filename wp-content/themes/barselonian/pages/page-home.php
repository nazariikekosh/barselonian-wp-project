<?php

/**
 * Template Name: Home Page
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package barselonian
 */

get_header();

?>
<?php get_template_part('template-parts/home/section-hero'); ?>
<?php get_template_part('template-parts/home/section-page_description'); ?>
<?php get_template_part('template-parts/home/section-page_title'); ?>
<?php get_template_part('template-parts/home/section-travel_content'); ?>
<?php get_template_part('template-parts/home/section-contact_form'); ?>

<?php
get_footer();
