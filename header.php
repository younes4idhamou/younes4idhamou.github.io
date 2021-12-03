<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */

?>
<?php
$metaGeneratorContent = 'Nicepage 4.0.3, nicepage.com';
$meta_generator = '';
if ($metaGeneratorContent) {
    remove_action('wp_head', 'wp_generator');
    $meta_generator = '<meta name="generator" content="' . $metaGeneratorContent . '" />' . "\n";
    $GLOBALS['meta_generator'] = true;
}
$hideHeader = false; // default header is visible
global $hideFooter;
$hideFooter = false; // default footer is visible
$pageBlog = is_home();
$pagePost = is_single();
$page404 = is_404();
$pageLogin = is_wplogin();
$pageProducts = theme_woocommerce_enabled() ? is_shop() || is_product_category() : false;
$pageProduct = theme_woocommerce_enabled() ? is_product() : false;
$pageCart = theme_woocommerce_enabled() ? is_cart() : false;
$defaultPath = $pageProducts || $pageProduct || $pageCart ? '/woocommerce' : '';
if ($pageBlog) {
    $template = 'blog';
}
if ($pagePost) {
    $template = 'post';
}
if ($page404) {
    $template = 'page404';
}
if ($pageLogin) {
    $template = 'pageLogin';
}
if ($pageProducts) {
    $template = 'products';
}
if ($pageProduct) {
    $template = 'product';
}
if ($pageCart) {
    $template = 'cart';
}
$wpCustomTemplate = false;
global $isWpCustomTemplate, $blog_custom_template, $post_custom_template;
if ($isWpCustomTemplate) {
    $template = $blog_custom_template ? $blog_custom_template : $post_custom_template;
    if ($template) {
        $wpCustomTemplate = true;
    }
}
if ($pageBlog || $pagePost || $page404 || $pageLogin || $pageProducts || $pageProduct || $pageCart || $wpCustomTemplate) {
    $defaultName = $pageCart ? '‌shoppingCart' : $template;
    global ${$template . "_custom_template"};
    ${$template . "_custom_template"} = ${$template . "_custom_template"} ? ${$template . "_custom_template"} : $defaultName . 'Template';
    $customPath = $wpCustomTemplate ? $template : ${$template . "_custom_template"};
    $fileWithOptions = get_template_directory() . $defaultPath . '/template-parts/' . $customPath . '/custom-template-options.php';
    if ( file_exists( $fileWithOptions ) ) {
        include_once $fileWithOptions;
    }
} ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" style="font-size:<?php echo apply_filters('theme_base_font_size', '16'); ?>px">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $meta_generator; ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    
    
    
</head>

<body <?php body_class(); ?><?php body_style_attribute(); ?> <?php body_data_attributes(); ?>>
<?php if (version_compare( $wp_version, '5.2', '>=' )) { wp_body_open(); } ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'mido' ); ?></a>
    <?php if (!$hideHeader) { ?>
    <header class="u-align-center u-clearfix u-header u-palette-1-light-3 u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-header" id="sec-5f5a">
  <div class="u-clearfix u-sheet u-sheet-1">
    <img class="u-image u-image-default u-opacity u-opacity-15 u-image-1" src="<?php
                                $header_image = get_header_image();
                                if ($header_image) {
                                    echo esc_url($header_image);
                                } else {
                                    ?><?php echo get_template_directory_uri(); ?>/images/logo3.png<?php
                                }
                            ?>" alt="" data-image-width="781" data-image-height="360">
    <?php $logo = theme_get_logo(array(
            'default_src' => "/images/logo.png",
            'default_url' => "https://nicepage.com"
        )); $url = stripos($logo['url'], 'http') === 0 ? esc_url($logo['url']) : $logo['url']; ?><a <?php if (is_customize_preview()) echo 'data-default-src="' . esc_url($logo['default_src']) . '" '; ?>href="<?php echo $url; ?>" class="u-align-center u-image u-image-default u-logo u-image-2 custom-logo-link" data-image-width="788" data-image-height="788">
      <img <?php if ($logo['svg']) { echo 'style="width:'.$logo['width'].'px"'; } ?>src="<?php echo esc_url($logo['src']); ?>" class="u-logo-image u-logo-image-1">
    </a>
    <p class="u-text u-text-1">
      <span style="font-weight: 700;">
        <span class="u-text-palette-1-light-1">SDAD</span>
      </span>Club 
    </p>
    <?php
            ob_start();
            ?><nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
      <div class="menu-collapse">
        <a class="u-button-style u-custom-color u-nav-link" href="#">
          <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
        </a>
      </div>
      <div class="u-custom-menu u-nav-container">
        {menu}
      </div>
      <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-inner-container-layout u-sidenav-overflow">
            <div class="u-menu-close"></div>
            {responsive_menu}
          </div>
        </div>
        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
      </div>
    </nav><?php
            $menu_template = ob_get_clean();
            echo Theme_NavMenu::getMenuHtml(array(
                'container_class' => 'u-menu u-menu-dropdown u-offcanvas u-menu-1',
                'menu' => array(
                    'menu_class' => 'u-nav u-unstyled',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-button-style u-nav-link u-palette-1-base',
                    'link_style' => 'padding: 10px 46px;',
                    'submenu_class' => 'u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-block-9512-34',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link u-white',
                    'submenu_link_style' => '',
                ),
                'responsive_menu' => array(
                    'menu_class' => 'u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-button-style u-nav-link',
                    'link_style' => 'padding: 10px 46px;',
                    'submenu_class' => 'u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-block-9512-35',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link',
                    'submenu_link_style' => '',
                ),
                'theme_location' => 'primary-navigation-1',
                'template' => $menu_template,
            )); ?>
  </div>
</header>
    
    <?php } ?>
    <div id="content">
