<?php $option = get_theme_mod('photographer_settings'); 

    if(! empty($option['footer_color'])){
      $footer_color = $option['footer_color'];
    }
    if(! empty($option['footer_media_title'])){
      $footer_media_title = $option['footer_media_title'];
    }
    if(! empty($option['footer_instagram_link_1'])){
      $footer_link_1 = $option['footer_instagram_link_1'];
    }
    if(! empty($option['footer_instagram_link_2'])){
      $footer_link_2 = $option['footer_instagram_link_2'];
    }
    if(! empty($option['footer_instagram_link_3'])){
      $footer_link_3 = $option['footer_instagram_link_3'];
    }
    if(! empty($option['footer_instagram_link_4'])){
      $footer_link_4 = $option['footer_instagram_link_4'];
    }
    if(! empty($option['footer_instagram_link_5'])){
      $footer_link_5 = $option['footer_instagram_link_5'];
    }
    if(! empty($option['footer_media_photo_1'])){
      $footer_media_1 = $option['footer_media_photo_1'];
    }
    if(! empty($option['footer_media_photo_2'])){
      $footer_media_2 = $option['footer_media_photo_2'];
    }
    if(! empty($option['footer_media_photo_3'])){
      $footer_media_3 = $option['footer_media_photo_3'];
    }
    if(! empty($option['footer_media_photo_4'])){
      $footer_media_4 = $option['footer_media_photo_4'];
    }
    if(! empty($option['footer_media_photo_5'])){
      $footer_media_5 = $option['footer_media_photo_5'];
    }
    if(! empty($option['footer_media_photo_5'])){
      $footer_media_5 = $option['footer_media_photo_5'];
    }
    if(! empty($option['footer_copyright_city'])){
      $footer_copyright_city = $option['footer_copyright_city'];
    }
    if(! empty($option['footer_copyright_mail'])){
      $footer_copyright_mail = $option['footer_copyright_mail'];
    }

?>
<!-- Footer -->
<?php if(isset($footer_color)):?>
  <footer class="text-white pt-5 pb-4" style="background: <?php echo $footer_color; ?>;">
<?php endif; ?>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-4">
          <?php if(isset($footer_media_title)):?>
            <h4 class="text-uppercase footer-title"><?php echo esc_attr($footer_media_title); ?></h4>
          <?php endif; ?>
        </div>
      </div>
      <div class="row mb-3 grid-container">

        <?php if(isset($footer_media_1) and isset($footer_link_1)):?>
          <div class="instagram-post">
            <a href="<?php echo esc_url($footer_link_1); ?>" class="instagram-post"><img src="<?php echo esc_url($footer_media_1); ?>" class="instagram-post"></a>
          </div>
        <?php else: ?>
          <div class="instagram-post">
            <a href="#" class="instagram-post"><img src="<?php echo get_template_directory_uri()."/assets/images/card1.jpg"?>" class="instagram-post"></a>
          </div>
        <?php endif; ?>

        <?php if(isset($footer_media_2) and isset($footer_link_2)):?>
          <div class="instagram-post">
            <a href="<?php echo esc_url($footer_link_2); ?>" class="instagram-post"><img src="<?php echo esc_url($footer_media_2); ?>" class="instagram-post"></a>
          </div>
        <?php else: ?>
          <div class="instagram-post">
            <a href="#" class="instagram-post"><img src="<?php echo get_template_directory_uri()."/assets/images/card3.jpg"?>" class="instagram-post"></a>
          </div>
        <?php endif; ?>

        <?php if(isset($footer_media_3) and isset($footer_link_3)):?>
          <div class="instagram-post">
            <a href="<?php echo esc_url($footer_link_3); ?>" class="instagram-post"><img src="<?php echo esc_url($footer_media_3); ?>" class="instagram-post"></a>
          </div>
        <?php else: ?>
          <div class="instagram-post">
            <a href="#" class="instagram-post"><img src="<?php echo get_template_directory_uri()."/assets/images/card4.jpg"?>" class="instagram-post"></a>
          </div>
        <?php endif; ?>

        <?php if(isset($footer_media_4) and isset($footer_link_4)):?>
          <div class="instagram-post">
            <a href="<?php echo esc_url($footer_link_4); ?>" class="instagram-post"><img src="<?php echo esc_url($footer_media_4); ?>" class="instagram-post"></a>
          </div>
        <?php else: ?>
          <div class="instagram-post">
            <a href="#" class="instagram-post"><img src="<?php echo get_template_directory_uri()."/assets/images/card5.jpg"?>" class="instagram-post"></a>
          </div>
        <?php endif; ?>

        <?php if(isset($footer_media_5) and isset($footer_link_5)):?>
          <div class="instagram-post">
            <a href="<?php echo esc_url($footer_link_5); ?>" class="instagram-post"><img src="<?php echo esc_url($footer_media_5); ?>" class="instagram-post"></a>
          </div>
        <?php else: ?>
          <div class="instagram-post">
            <a href="#" class="instagram-post"><img src="<?php echo get_template_directory_uri()."/assets/images/card6.jpg"?>" class="instagram-post"></a>
          </div>
        <?php endif; ?>

      </div>
      <div class="row my-3">
        <div class="col-12 text-center mt-3">
          <h6 class="page-info">
            © <?php bloginfo('name'); ?> <?php the_time('Y'); ?> 
            | <?php if(isset($footer_copyright_city)):?><?php echo $footer_copyright_city; ?><?php endif;?> 
            | <?php if(isset($footer_copyright_mail)):?><?php echo $footer_copyright_mail; ?><?php else: ?><?php bloginfo('admin_email'); ?><?php endif; ?> 
            | Site by <a href="#" class="designer-website">Luca Pandolfelli</a>
          </h6>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>

</body>
</html>