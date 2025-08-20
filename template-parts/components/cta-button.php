<?php
/**
 * Template part for displaying call-to-action buttons
 * 
 * @package MobileBlastGuy
 * 
 * Variables that can be passed to this template:
 * $button_text - Text for the button
 * $button_url - URL for the button link
 * $button_class - CSS classes for the button (default: 'btn btn-primary')
 * $button_target - Link target (_blank, _self, etc.)
 * $button_icon - Optional icon class or SVG
 */

// Set defaults
$button_text = $button_text ?? 'Learn More';
$button_url = $button_url ?? '#';
$button_class = $button_class ?? 'btn btn-primary';
$button_target = $button_target ?? '_self';
$button_icon = $button_icon ?? '';
?>

<a href="<?php echo esc_url($button_url); ?>" 
   class="<?php echo esc_attr($button_class); ?>" 
   target="<?php echo esc_attr($button_target); ?>">
    <?php if ($button_icon): ?>
        <span class="button-icon"><?php echo $button_icon; ?></span>
    <?php endif; ?>
    <span><?php echo esc_html($button_text); ?></span>
</a>
