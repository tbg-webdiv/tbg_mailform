<?php
/**
 * tbg_contact functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tbg_contact
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'tbg_contact_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function tbg_contact_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on tbg_contact, use a find and replace
         * to change 'tbg_contact' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'tbg_contact', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'tbg_contact' ),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'tbg_contact_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'tbg_contact_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tbg_contact_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'tbg_contact_content_width', 640 );
}
add_action( 'after_setup_theme', 'tbg_contact_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tbg_contact_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'tbg_contact' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'tbg_contact' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'tbg_contact_widgets_init' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}


/* ////////////////////////////////////////////
    TITLE
//////////////////////////////////////////// */

/*
 * タイトルの区切り線を | にする
 *
 * @since WordPress 4.4.0
 * License: GPLv2 or later
 */

function nendebcom_title_separator( $sep ){
    $sep = '|';
    return $sep;
}
add_filter( 'document_title_separator', 'nendebcom_title_separator' );

function wp_document_title_parts( $title ) {
    unset( $title['tagline'] ); // キャッチフレーズを出力しない
    unset($title['site']);

    return $title;
}
add_filter( 'document_title_parts', 'wp_document_title_parts', 10, 1 );




/* ////////////////////////////////////////////
    META
//////////////////////////////////////////// */

// Remove head
/*
add_action( 'wp_enqueue_scripts', 'remove_block_library_style' );
function remove_block_library_style() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
}
*/
add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );
function remove_dns_prefetch( $hints, $relation_type ) {
    if ( 'dns-prefetch' === $relation_type ) {
        return array_diff( wp_dependencies_unique_hosts(), $hints );
    }
    return $hints;
}
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'qtranxf_wp_head_meta_generator' );
remove_action( 'wp_head', 'feed_links', 2);        // 1~2を消去
remove_action( 'wp_head', 'feed_links_extra', 3);  // 3~7を消去
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action( 'wp_head', 'rel_canonical');
remove_action( 'wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head','rest_output_link_wp_head');
remove_action( 'wp_head','wp_oembed_add_discovery_links');
remove_action( 'wp_head','wp_oembed_add_host_js');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'template_redirect', 'rest_output_link_header', 11 );
//remove_action('wp_head', '_wp_render_title_tag', 1);
//add_filter( 'wpcf7_load_js', '__return_false' );
//add_filter( 'wpcf7_load_css', '__return_false' );

//SVGタグを削除
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );

/* インラインスタイル削除 */
function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'remove_recent_comments_style' );

//wp-block-library-css 削除
function remove_wp_block_library_css(){
wp_dequeue_style( 'wp-block-library' );
wp_dequeue_style( 'wp-block-library-theme' );
wp_dequeue_style( 'wc-block-style' ); // REMOVE WOOCOMMERCE BLOCK CSS
wp_dequeue_style( 'global-styles' ); // REMOVE THEME.JSON
}
add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 );

// classic-theme-styles-inline-css 
add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'classic-theme-styles' );
}, 20 );



// Add CSS
function add_my_stylesheet() {
/*分岐する場合*/
    if(is_page_template('pages/contact-tbgmail.php')){
        wp_register_style('main', get_template_directory_uri() .'/assets/css/download.css');
    } else {
        wp_register_style('main', get_template_directory_uri() .'/assets/css/style.css');
    }

//    wp_register_style('main', get_template_directory_uri() .'/assets/css/style.css');
    wp_enqueue_style( 'main');
}
add_action('wp_print_styles', 'add_my_stylesheet');

// CSS updatetime
function my_update_styles( $styles ) {
    $mtime = filemtime( get_stylesheet_directory() . '/assets/css/style.css' );
    $styles->default_version = $mtime;
}
add_action( 'wp_default_styles', 'my_update_styles' );

//サイトマップ停止
add_filter( 'wp_sitemaps_enabled', '__return_false' );

//フォームのPタグ停止

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
} 
// MW WP Formで自動挿入されるp・brタグを削除
function mvwpform_autop_filter() {
    if (class_exists('MW_WP_Form_Admin')) {
      $mw_wp_form_admin = new MW_WP_Form_Admin();
      $forms = $mw_wp_form_admin->get_forms();
      foreach ($forms as $form) {
        add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
      }
    }
  }
  mvwpform_autop_filter();
  add_action('init', function() {
    remove_filter('the_content', 'wpautop');
  });


//-----------------------------------------
// 投稿・固定ページ カスタムフィールド追加
//-----------------------------------------
if (current_user_can('level_10')) {//管理者だけ
add_action('admin_menu', 'add_custom_fields');
add_action('save_post', 'save_custom_fields');
}
function add_custom_fields() {
add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'post');
add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'page');
add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'topics');
add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'product');
}
//-----------------------------------------
// カスタムフィールド表示
//-----------------------------------------
function my_custom_fields() {
global $post;
$robots = get_post_meta($post->ID,'robots',true);
$keywords = get_post_meta($post->ID,'keywords',true);
$description = get_post_meta($post->ID,'description',true);
echo '<p>検索ロボット（カンマ区切り）<br><span style="font-size:.9em">検索エンジンに登録されたくない場合に入力</span><br>';
echo '<input type="text" name="robots" value="'.esc_html($robots).'" placeholder="noindex,nofollow" size="50" /></p>';
echo '<p>キーワード（カンマ区切り）<br><span style="font-size:.9em">Google検索には効果がないので入力不要</span><br>';
echo '<input type="text" name="keywords" value="'.esc_html($keywords).'" placeholder="" size="50" /></p>';
echo '<p>ページの説明（最大120文字程度・改行不可）<br><span style="font-size:.9em">Googleの検索結果ページが更新されるには１週間以上の時間が必要になることがあります。</span><br>';
echo '<textarea name="description" rows="4" cols="70" maxlength="120">'.esc_html($description).'</textarea></p>';
}
//-----------------------------------------
// カスタムフィールドの値を保存
//-----------------------------------------
function save_custom_fields( $post_id ) {
if(!empty($_POST['robots']))
update_post_meta($post_id, 'robots', $_POST['robots'] );
else delete_post_meta($post_id, 'robots');
if(!empty($_POST['keywords']))
update_post_meta($post_id, 'keywords', $_POST['keywords'] );
else delete_post_meta($post_id, 'keywords');
if(!empty($_POST['description']))
update_post_meta($post_id, 'description', $_POST['description'] );
else delete_post_meta($post_id, 'description');
}

/* the_archive_title 余計な文字を削除 */
add_filter( 'get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('',false);
    } elseif (is_tag()) {
        $title = single_tag_title('',false);
    } elseif (is_tax()) {
        $title = single_term_title('',false);
    } elseif (is_post_type_archive() ){
        $title = post_type_archive_title('',false);
    } elseif (is_date()) {
        $title = get_the_time('Y年n月');
    } elseif (is_search()) {
        $title = '検索結果：'.esc_html( get_search_query(false) );
    } elseif (is_404()) {
        $title = '「404」ページが見つかりません';
    } else {

    }
    return $title;
});
//meta用TITLE
function meta_title() {
    global $page, $paged;
    if(is_archive()) {
        the_archive_title();
        echo ' | ';
    } else {
        wp_title( '|', true, 'right' );
    };
    bloginfo( 'name' );
};

/** 固定ページの親ページを判別して条件分岐 ex.Aページを親に持つ子ページすべてに同じものを表示させたい **/
function is_parent_slug() {
    global $post;
    if(!is_404()){
        if ($post->post_parent) {
            $post_data = get_post($post->post_parent);
            return $post_data->post_name;
        }
    }
}


/* ////////////////////////////////////////////
//カスタムタクソノミーをリンク付きで表示
//////////////////////////////////////////// */

function restaurat_name($taxname) {
    global $post;
    $terms = get_the_terms( $post->ID , $taxname ); 
    foreach( $terms as $term ) {
            $term_id = $term->term_id;
            $term_name = $term->name;
    }
    var_dump($term_id);
    $term_link = get_term_link( $term_id, $taxname );
    echo '<a href="' . $term_link . '">' . $term_name . '</a><br>';
}


/* ////////////////////////////////////////////
    画像サイズ
//////////////////////////////////////////// */

//add_image_size( 'case_thumb', 420, 300, true );
//add_image_size( 'case_main', 1000, 750, true );
//add_image_size( 'gallery_thumb', 300, 216, true );


/* ////////////////////////////////////////////
    ページ無効化
//////////////////////////////////////////// */

// 不要なページを無効化(404扱い)
function custom_handle_404() {
    // 検索ページ、作成者ページ、添付ファイルページを無効化
    if ( is_home() || is_search() || is_author() || is_attachment() ) {
    //if ( is_author() || is_attachment() ) {
            global $wp_query;
        $wp_query->set_404();
        status_header( 404 );
        nocache_headers();
    }
}
add_action( 'template_redirect', 'custom_handle_404' );

/**
 * 投稿画面にタグ一覧を表示しチェックボックス選択式にする
 */
function re_register_post_tag_taxonomy() {
    $tag_slug_args = get_taxonomy('post_tag');
    $tag_slug_args->hierarchical = true;
    $tag_slug_args->meta_box_cb = 'post_categories_meta_box';
    register_taxonomy('post_tag', 'post', (array) $tag_slug_args);
}
add_action( 'init', 're_register_post_tag_taxonomy', 1 );


/* 投稿アーカイブページの作成 */
/* 
function post_has_archive( $args, $post_type ) {

    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; //任意のスラッグ名
    }
    return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
*/


// カテゴリーのページ送りを修正して404を回避
function category_link_custom( $query = array()) {	
    if(isset($query['name']) && $query['name'] === 'page' && isset($query['page'])) {
        $paged = trim($query['page'], '/');
        if(is_numeric($paged)) {
            unset($query['name']);
            unset($query['page']);
            $query['paged'] = (int) $paged;
        }
    }
    return $query;
}
add_filter('request', 'category_link_custom');

/* 【出力カスタマイズ】タクソノミーアーカイブを順序順で表示 */
function custom_posts_per_page() {
    global $wp_query;
    if( $wp_query->is_admin ) return;
    if ( is_tax('case') ) { // タクソノミースラッグを指定
      //$wp_query->query_vars['posts_per_page'] = 100;  // アーカイブ表示件数指定
      $wp_query->query_vars['order'] = 'ASC';  // 昇順で表示
      $wp_query->query_vars['orderby'] = 'menu_order';  // 順序順で表示
    }
}
add_filter('pre_get_posts', 'custom_posts_per_page');



/* ////////////////////////////////////////////
    管理画面
//////////////////////////////////////////// */


// 使用しないメニューを非表示にする
function remove_admin_menus() {	
    //global $current_user;
    //wp_get_current_user();
    //if ( $current_user->ID != '2' ) {
    //if (!current_user_can('administrator')) {
    if (!current_user_can('level_10')) {
    global $menu;
        // unsetで非表示にするメニューを指定
        //unset($menu[2]);  // ダッシュボード
        unset($menu[5]); // 投稿
        unset($menu[10]); // メディア
        unset($menu[25]); // コメント
        //unset($menu[20]);       // 固定ページ
        unset($menu[60]);       // 外観
        unset($menu[65]);       // プラグイン
        unset($menu[70]);       // ユーザー
        unset($menu[75]);       // ツール
        unset($menu[108]);       // CPT UI
        unset($menu[109]);       // SiteGuard
        unset($menu[101]);       // UAM
        unset($menu[80]);       // 設定

        remove_menu_page('edit.php?post_type=mw-wp-form');//MW WP Form
        //remove_menu_page('wpcf7'); 
    } else {
    global $menu;
     //unset($menu[5]); // 投稿
     unset($menu[25]); // コメント
     //var_dump($menu);
    }
}
add_action('admin_menu', 'remove_admin_menus');

/*
function add_admin_menu() {
    add_menu_page( 'TOPページの編集', 'TOPページの編集', 'read', 'post.php?post=54&action=edit');
}
add_action( 'admin_menu', 'add_admin_menu',1 );
*/

//管理画面からプレビュー機能を非表示
/*
function my_admin_style() {
    if (!current_user_can('administrator')) {
        echo '<style>
        #wp-admin-bar-view,
        #edit-slug-box,
        #preview-action {
            display:none;
        }
        .subsubsub:after {
            content: "ドラッグ&ドロップで順番を変更できます。";
            margin:0.6em 0;
            display:block;
            color: #000;
            font-size: 1.2em;
        }
        </style>'.PHP_EOL;
        }
    }
add_action('admin_print_styles', 'my_admin_style');
*/

/*
function custom_page() {
    global $wp_rewrite;
    $wp_rewrite->page_structure = $wp_rewrite->root . '%pagename%.html';
    $wp_rewrite->use_trailing_slashes = false;
}
add_action( 'init', 'custom_page' );
*/

/**
* カスタムフィールドを検索対象に含めます。(「-キーワード」のようなNOT検索にも対応します)
*/
function posts_search_custom_fields( $orig_search, $query ) {
    if ( $query->is_search() && $query->is_main_query() && ! is_admin() ) {
       // 4.4のWP_Query::parse_search()の処理を流用しています。(検索語の分割処理などはすでにquery_vars上にセット済のため省きます)
        global $wpdb;
        $q = $query->query_vars;
        $n = ! empty( $q['exact'] ) ? '' : '%';
        $search = '';
        $searchand = '';
        if(isset($q['search_terms'])){
            foreach ( $q['search_terms'] as $term ) {
                $include = '-' !== substr( $term, 0, 1 );
                if ( $include ) {
                    $like_op  = 'LIKE';
                    $andor_op = 'OR';
                } else {
                    $like_op  = 'NOT LIKE';
                    $andor_op = 'AND';
                    $term     = substr( $term, 1 );
                }
                $like = $n . $wpdb->esc_like( $term ) . $n;
                // カスタムフィールド用の検索条件を追加します。
                $search .= $wpdb->prepare( "{$searchand}(($wpdb->posts.post_title $like_op %s) $andor_op ($wpdb->posts.post_content $like_op %s) $andor_op (custom.meta_value $like_op %s))", $like, $like, $like );
                $searchand = ' AND ';
            }
        }

        if ( ! empty( $search ) ) {
            $search = " AND ({$search}) ";
            if ( ! is_user_logged_in() )
                $search .= " AND ($wpdb->posts.post_password = '') ";
        }
        return $search;
    }
    else {
        return $orig_search;
    }
}
add_filter( 'posts_search', 'posts_search_custom_fields', 10, 2 );
/**
* カスタムフィールド検索用のJOINを行います。
*/
function posts_join_custom_fields( $join, $query ) {
    if ( $query->is_search() && $query->is_main_query() && ! is_admin() ) {
       // group_concat()したmeta_valueをJOINすることでレコードの重複を除きつつ検索しやすくします。
        global $wpdb;
        $join .= " INNER JOIN ( ";
        $join .= " SELECT post_id, group_concat( meta_value separator ' ') AS meta_value FROM $wpdb->postmeta ";
       // $join .= " WHERE meta_key IN ( 'test' ) ";
        $join .= " GROUP BY post_id ";
        $join .= " ) AS custom ON ($wpdb->posts.ID = custom.post_id) ";
    }
    return $join;
}
add_filter( 'posts_join', 'posts_join_custom_fields', 10, 2 );