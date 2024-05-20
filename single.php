<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tbg_contact
 */

get_header();
?>

        <div id="content" class="site-content">
<?php while ( have_posts() ): the_post(); ?>
<?php
    get_template_part( 'template-parts/content', 'content' );
    ?>
<?php endwhile; // End of the loop.?>
        </div><!-- #content -->
<?php
//get_sidebar();
get_footer();
