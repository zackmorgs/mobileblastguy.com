<?php
/**
 * Template part for displaying page headers
 * 
 * @package MobileBlastGuy
 * 
 * Variables that can be passed to this template:
 * $page_title - Title for the page
 * $page_subtitle - Subtitle/description
 * $background_image - Background image for header
 * $overlay_opacity - Opacity for background overlay (0-1)
 */

// Set defaults
$page_title = $page_title ?? get_the_title();
$page_subtitle = $page_subtitle ?? '';
$background_image = $background_image ?? '';
$overlay_opacity = $overlay_opacity ?? 0.7;

$header_style = '';
if ($background_image) {
    $header_style = ' style="background-image: url(' . esc_url($background_image) . ');"';
}
?>

<header class="page-header"<?php echo $header_style; ?>>
    <?php if ($background_image): ?>
        <div class="header-overlay" style="opacity: <?php echo esc_attr($overlay_opacity); ?>;"></div>
    <?php endif; ?>
    
    <div class="header-content">
        <h1 class="page-title"><?php echo esc_html($page_title); ?></h1>
        
        <?php if ($page_subtitle): ?>
            <p class="page-subtitle"><?php echo esc_html($page_subtitle); ?></p>
        <?php endif; ?>
    </div>
</header>
