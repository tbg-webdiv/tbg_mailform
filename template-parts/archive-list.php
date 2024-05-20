<?php
/**
 * @package tbg_contact
 */

?>
            <div class="content-area">
                <h1 class="title tl_07">Information<span>お知らせ</span></h1>
<?php if ( have_posts() ) : ?>
                <section>
                <?php  //カテゴリと年別メニュー  ?>
                    <div class="local_menu">
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>informaion/">すべて</a></li>
                            <?php
$term_list = get_terms('post_tag');
$result_list = [];
foreach ($term_list as $term) {
$plink = (get_term_link( $term, 'post_tag' ));
echo "<li><a href='".$plink."'>".$term->name."</a></li>
                            ";} ?>
</ul>
                    </div>

                    <div class="year_menu">
                        <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
                            <?php wp_get_archives( array(
                                'type' => 'yearly',
                                'format' => 'option',
                                'after' => '年' ) ); ?>
                        </select>
                    </div>
                    <ul class="info archive_list">
<?php while ( have_posts() ): the_post(); ?>
                        <li><span><?php the_time('Y.m.d'); ?></span><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
                    </ul>
                </section>
<?php else: ?>
                <section class="common no_post">
                    <p>現在、お知らせはありません。</p>
                </section>
<?php endif; ?>
<?php
the_posts_pagination(array(
	'mid_size' => 2,
//	'prev_text' => '過去のNEWS',
//	'next_text' => '新しいNEWS',
	'screen_reader_text'=>' '
));
?>
<?php wp_reset_postdata(); ?>

                <!-- #main -->
            </div>
            <!-- #primary -->
