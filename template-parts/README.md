# WordPress Template Parts Guide

Template parts are reusable PHP files that help you organize your theme code and avoid duplication.

## Basic Usage

### Simple Template Part (No Variables)
```php
<?php get_template_part('template-parts/components/hero'); ?>
```

### Template Part with Variables (WordPress 5.5+)
```php
<?php 
get_template_part('template-parts/components/before-after-slider', null, array(
    'before_image' => get_template_directory_uri() . '/assets/img/before.jpg',
    'after_image' => get_template_directory_uri() . '/assets/img/after.jpg',
    'before_alt' => 'Before Image',
    'after_alt' => 'After Image'
)); 
?>
```

### Older WordPress Versions (Using set_query_var)
```php
<?php
// Set variables
set_query_var('button_text', 'Get Quote Now');
set_query_var('button_url', '/contact');
set_query_var('button_class', 'btn btn-primary');

// Load template part
get_template_part('template-parts/components/cta-button');
?>
```

## Available Template Parts

### Components

#### 1. Hero Section
**File:** `template-parts/components/hero.php`
**Usage:** 
```php
<?php get_template_part('template-parts/components/hero'); ?>
```

#### 2. Services List
**File:** `template-parts/components/services-list.php`
**Usage:** 
```php
<?php get_template_part('template-parts/components/services-list'); ?>
```

#### 3. Before/After Slider
**File:** `template-parts/components/before-after-slider.php`
**Variables:**
- `$before_image` - URL to before image
- `$after_image` - URL to after image  
- `$before_alt` - Alt text for before image
- `$after_alt` - Alt text for after image

**Usage:** 
```php
<?php 
get_template_part('template-parts/components/before-after-slider', null, array(
    'before_image' => get_template_directory_uri() . '/assets/img/car_before.jpg',
    'after_image' => get_template_directory_uri() . '/assets/img/car_after.jpg',
    'before_alt' => 'Car Before Blasting',
    'after_alt' => 'Car After Blasting'
)); 
?>
```

#### 4. CTA Button
**File:** `template-parts/components/cta-button.php`
**Variables:**
- `$button_text` - Button text (default: 'Learn More')
- `$button_url` - Button URL (default: '#')
- `$button_class` - CSS classes (default: 'btn btn-primary')
- `$button_target` - Link target (default: '_self')
- `$button_icon` - Optional icon HTML

**Usage:** 
```php
<?php 
get_template_part('template-parts/components/cta-button', null, array(
    'button_text' => 'Get Your Quote',
    'button_url' => '/contact',
    'button_class' => 'btn btn-primary large',
    'button_target' => '_self'
)); 
?>
```

#### 5. Content Section
**File:** `template-parts/components/content-section.php`
**Variables:**
- `$section_id` - CSS ID for section
- `$section_class` - Additional CSS classes
- `$background_image` - Background image URL
- `$content` - HTML content for section

**Usage:** 
```php
<?php 
$about_content = '<h2>About Us</h2><p>We are experts in dustless blasting...</p>';

get_template_part('template-parts/components/content-section', null, array(
    'section_id' => 'about',
    'section_class' => 'dark-bg',
    'background_image' => get_template_directory_uri() . '/assets/img/bg.jpg',
    'content' => $about_content
)); 
?>
```

### Layout

#### 1. Page Header
**File:** `template-parts/layout/page-header.php`
**Variables:**
- `$page_title` - Page title (default: current page title)
- `$page_subtitle` - Optional subtitle
- `$background_image` - Background image URL
- `$overlay_opacity` - Background overlay opacity (0-1, default: 0.7)

**Usage:** 
```php
<?php 
get_template_part('template-parts/layout/page-header', null, array(
    'page_title' => 'Our Services',
    'page_subtitle' => 'Professional dustless blasting solutions',
    'background_image' => get_template_directory_uri() . '/assets/img/services-bg.jpg',
    'overlay_opacity' => 0.5
)); 
?>
```

## Creating New Template Parts

### 1. Create the File
Create a new PHP file in the appropriate directory:
- `/template-parts/components/` - For reusable UI components
- `/template-parts/layout/` - For layout-specific parts
- `/template-parts/content/` - For content-specific parts

### 2. Template Structure
```php
<?php
/**
 * Template part for displaying [description]
 * 
 * @package MobileBlastGuy
 * 
 * Variables that can be passed to this template:
 * $variable_name - Description of variable
 */

// Set defaults for variables
$variable_name = $variable_name ?? 'default_value';
?>

<div class="component">
    <!-- Your HTML here -->
    <h3><?php echo esc_html($variable_name); ?></h3>
</div>
```

### 3. Best Practices
- Always escape output with `esc_html()`, `esc_attr()`, `esc_url()`
- Set default values for all variables
- Include proper documentation comments
- Use semantic HTML
- Follow WordPress coding standards

### 4. Using in Templates
```php
<?php 
get_template_part('template-parts/components/your-component', null, array(
    'variable_name' => 'Your Value'
)); 
?>
```

## Folder Structure
```
template-parts/
├── components/          # Reusable UI components
│   ├── hero.php
│   ├── services-list.php
│   ├── before-after-slider.php
│   ├── cta-button.php
│   └── content-section.php
├── layout/             # Layout-specific parts
│   └── page-header.php
└── content/            # Content-specific parts
    └── (future content parts)
```

## Tips

1. **Keep it Simple**: Template parts should do one thing well
2. **Make it Flexible**: Use variables to make parts reusable
3. **Document Everything**: Include comments explaining variables
4. **Follow Naming Conventions**: Use descriptive, hyphenated names
5. **Test Thoroughly**: Test with and without variables passed
