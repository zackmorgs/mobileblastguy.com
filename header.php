<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo(show: 'charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body <?php body_class(); ?>>
  <div class="container">
    <nav id="nav_main">
      <div class="nav-bar">
        <!-- <a id="logo" href="/">
          <h1>Mobile Blast Guy</h1>
        </a> -->

        <button id="nav_toggle" aria-label="Toggle navigation" aria-expanded="false">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
      <div id="nav_links">
        <ul class="nav-list">
          <li class="nav-item">
            <a href="/" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="/about/" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="/services/" class="nav-link">Services</a>
            <!-- <ul class="dropdown">
              <li><a href="/services/automotive"></a></li>
              <li><a href="/services/marine"></a></li>
              <li><a href="/services/concrete"></a></li>
              <li><a href="/services/wood"></a></li>
              <li><a href="/services/fleet-vehicles"></a></li>
              <li><a href="/services/fire-restoration"></a></li>
              <li><a href="/services/graffiti-removal"></a></li>
              <li><a href="/services/line-stripe"></a></li>
              <li><a href="/services/heavy-equipment"></a></li>
              <li><a href="/services/pools"></a></li>
              <li><a href="/services/housing"></a></li>
              <li><a href="/services/more"></a></li>
            </ul> -->
          </li>
          <li class="nav-item">
            <a href="/contact/" class="nav-link">Contact</a>
          </li>
          <li class="nav-item">
            <a href="/blog/" class="nav-link">Blog</a>
          </li>
          <li class="nav-item">
            <a href="/gallery/" class="nav-link">Gallery</a>
          </li>
          <li class="nav-item">
            <a href="/faq/" class="nav-link">FAQ</a>
          </li>
        </ul>
      </div>
    </nav>