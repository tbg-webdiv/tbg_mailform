<?php
/**
 * Template Name: WPCF7
 */

get_header();
?>

        <div id="content" class="site-content">
<?php while ( have_posts()): the_post(); ?>
            <div id="<?php echo $post->post_name; ?>" class="content-area form">
                <h1 class="title" data-aos="fade"><?php the_title(); ?></h1>
                <section id="post-<?php the_ID(); ?>" <?php post_class('common'); ?> data-aos="fade">
<?php the_content(); ?>
                <?php if(is_page( 'complete' )): ?><div class="btn" style="margin:2em 0 0"><a href="../">入力フォームに戻る</a></div><?php endif; ?>
                </section>
                <!-- #main -->
            </div>
                <!-- #primary -->
<?php endwhile; ?>

        </div><!-- #content -->

<?php
//get_sidebar();
get_footer();
