<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tbg_contact
 */

get_header();
?>

        <div id="content" class="site-content">
<?php while ( have_posts()): the_post(); ?>
            <div id="<?php echo $post->post_name; ?>" class="content-area">
                <h1 class="title" data-aos="fade"><?php the_title(); ?></h1>
                <section id="post-<?php the_ID(); ?>" <?php post_class('common'); ?> data-aos="fade">
<?php the_content(); ?>
                </section>
                <!-- #main -->
            </div>
                <!-- #primary -->
<?php endwhile; ?>

        </div><!-- #content -->

<?php
//get_sidebar();
get_footer();
