<?php
/**
 * Template part for displaying before/after image slider
 * 
 * @package MobileBlastGuy
 * 
 * Variables that can be passed to this template:
 * $before_image - URL to the before image
 * $after_image - URL to the after image
 * $before_alt - Alt text for before image
 * $after_alt - Alt text for after image
 */

// Set default values if not provided
$before_image = $before_image ?? get_template_directory_uri() . '/assets/img/default_before.png';
$after_image = $after_image ?? get_template_directory_uri() . '/assets/img/default_after.png';
$before_alt = $before_alt ?? 'Before image';
$after_alt = $after_alt ?? 'After image';
?>

<div class="slider">
    <div class="slider-container">
        <div class="before">
            <img src="<?php echo esc_url($before_image); ?>" alt="<?php echo esc_attr($before_alt); ?>" />
        </div>
        <div class="after">
            <img src="<?php echo esc_url($after_image); ?>" alt="<?php echo esc_attr($after_alt); ?>" />
        </div>
    </div>
    <input type="range" min="0" max="100" value="50" class="slider-control"
        aria-label="Percentage of before/after photo shown." />
</div>
