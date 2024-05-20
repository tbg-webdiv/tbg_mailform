<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tbg_contact
 */

?>
            <div class="content-area info_main">
                <div class="title tl_07">Information<span>お知らせ</span></div>
                <h1><?php the_title(); ?><span><?php the_time('Y.m.d'); ?></span></h1>
                <section class="info_body">
<?php the_content(); ?>
<?php the_post_thumbnail(); ?>
                </section>
                <div class="btn"><a href="<?php echo home_url( '/' ); ?>information/">お知らせ一覧へ</a></div>
                <!-- #main -->
            </div>
            <!-- #primary -->

