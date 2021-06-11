<?php $option = get_theme_mod('photographer_settings'); 

    if(! empty($option['blog_header_image'])){
      $blog_header_image = $option['blog_header_image'];
    }

?>

<?php get_header('secondary'); ?>

    <?php if(isset($blog_header_image)):?>
        <div class="blog w-100 d-flex justify-content-center align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('<?php echo $blog_header_image; ?>);">
    <?php else: ?>
        <div class="blog w-100 d-flex justify-content-center align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('<?php echo get_template_directory_uri()."/assets/images/image2.jpg"?>);">
    <?php endif; ?> 
            <div class="content text-center">
                <h1 class="text-white mb-1 header-title"><?php wp_title('',true,'right'); ?></h1>
            </div>
        </div>

    <?php get_template_part('template-parts/section', 'archive'); ?>
    
    <div class="navigation d-flex justify-content-center">
        <p><?php posts_nav_link(); ?></p>
    </div>

<?php get_footer(); ?>

