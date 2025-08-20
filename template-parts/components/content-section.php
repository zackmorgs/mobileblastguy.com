<?php
/**
 * Template part for displaying a content section with optional background
 * 
 * @package MobileBlastGuy
 * 
 * Variables that can be passed to this template:
 * $section_id - CSS ID for the section
 * $section_class - Additional CSS classes
 * $background_image - Background image URL
 * $content - HTML content for the section
 */

// Set defaults
$section_id = $section_id ?? '';
$section_class = $section_class ?? '';
$background_image = $background_image ?? '';
$content = $content ?? '';

// Build section attributes
$section_attributes = '';
if ($section_id) {
    $section_attributes .= ' id="' . esc_attr($section_id) . '"';
}

$section_classes = 'content-section';
if ($section_class) {
    $section_classes .= ' ' . esc_attr($section_class);
}

$section_style = '';
if ($background_image) {
    $section_style = ' style="background-image: url(' . esc_url($background_image) . ');"';
}
?>

<section class="<?php echo $section_classes; ?>"<?php echo $section_attributes; ?><?php echo $section_style; ?>>
    <div class="content">
        <?php echo $content; ?>
    </div>
</section>
