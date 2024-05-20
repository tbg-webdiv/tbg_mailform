<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package tbg_contact
 */

get_header();
?>

        <div id="content" class="site-content">
<?php get_template_part( 'template-parts/archive', 'list' ); ?>
        </div><!-- #content -->

<?php
//get_sidebar();
get_footer();
