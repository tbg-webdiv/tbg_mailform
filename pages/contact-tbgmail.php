<?php
/**
 * Template Name: TBGメールフォーム
 */

get_header();
?>

<?php while ( have_posts()): the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>

<?php
//get_sidebar();
get_footer();
