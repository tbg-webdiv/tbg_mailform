<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tbg_contact
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php if (@$_SERVER["SERVER_NAME"] === 'products.tb-group.co.jp'): ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BW7BK26ZW9"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-BW7BK26ZW9');
</script>
<?php else: ?>
<!-- No Analytics -->
<?php endif ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<?php
//canonical
if(isset($_SERVER['HTTPS'])){
    $prtcl = 'https://';
}else{
    $prtcl = 'http://';
}
$canonical_url= $prtcl . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<?php if(!(is_404())):?>
<link rel="canonical" href="<?php echo $canonical_url; ?>" />
<?php endif;?>
<?php
//robot
$custom = get_post_custom();
if( !empty( $custom['robots'][0] ) ):
    $robots = $custom['robots'][0];
elseif(is_search(  )):
    $robots = "noindex,follow";
else:
    $robots = "index";
    //$robots = "noindex,nofollow";
endif;

////////// keywords
if( !empty( $custom['keywords'][0] ) ):
    $keywords = $custom['keywords'][0];
elseif(is_home()):
    $keywords = "";
else:
    $keywords = "";
endif;

////////// description
if( !empty( $custom['description'][0] ) ):
    $description = $custom['description'][0];
elseif(is_home()):
    $description = "";
else:
    $description = "";
endif;

?>
<?php if(!is_404()): ?>
<meta name="robots" content="<?php echo $robots ?>" />
<meta name="keywords" content="<?php echo $keywords ?>">
<meta name="description" content="<?php echo $description ?>">
<?php endif; ?>

<?php wp_head(); ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body <?php
if(is_page_template('pages/contact-tbgmail.php')){
    body_class('page-mailform');
} else {
    body_class();
}
?>>
<?php wp_body_open(); ?>
