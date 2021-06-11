<?php $option = get_theme_mod('photographer_settings'); 

    if(! empty($option['navbar_color'])){
      $navbar_color = $option['navbar_color'];
    }

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="author" content="Luca Pandolfelli" />
  <?php wp_head(); ?>
</head>

<body>
  <!-- NavBar -->
  <?php if(isset($navbar_color)):?>
    <nav class="navbar navbar-expand-lg p-md-3" style="background: <?php echo $navbar_color; ?>;">
  <?php endif; ?>
      <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

          <?php
            wp_nav_menu( array(
                'theme_location'    => 'main-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse text-white',
                'container_id'      => 'navbarSupportedContent',
                'menu_class'        => 'nav ms-auto navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
          ?>

      </div>
    </nav>