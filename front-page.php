<?php 
/*
Template: Home Page
*/
?>

<?php get_header('secondary'); ?>

<?php 
    
    $options = get_theme_mod('photographer_settings');

    if(! empty($options['about_section_image'])){
        $about_section_image = $options['about_section_image'];
    }

    if(! empty($options['about_section_title'])){
        $about_section_title = $options['about_section_title'];
    }

    if(! empty($options['about_section_subtitle'])){
        $about_section_subtitle = $options['about_section_subtitle'];
    }

    if(! empty($options['about_section_content'])){
        $about_section_content = $options['about_section_content'];
    }

    if(! empty($options['about_section_button'])){
        $about_section_button = $options['about_section_button'];
    }

    if(! empty($options['about_section_button_link'])){
        $about_section_button_link = $options['about_section_button_link'];
    }

    if(isset($options['show_about_section'])){
        $show_about_section = $options['show_about_section'];
    } else {
        $show_about_section = false;
    }

    if(! empty($options['portfolio_section_image_1'])){
      $portfolio_section_image_1 = $options['portfolio_section_image_1'];
    }

    if(! empty($options['portfolio_section_title_1'])){
      $portfolio_section_title_1 = $options['portfolio_section_title_1'];
    }

    if(! empty($options['portfolio_section_link_1'])){
      $portfolio_section_link_1 = $options['portfolio_section_link_1'];
    }

    if(! empty($options['portfolio_section_image_2'])){
      $portfolio_section_image_2 = $options['portfolio_section_image_2'];
    }

    if(! empty($options['portfolio_section_title_2'])){
      $portfolio_section_title_2 = $options['portfolio_section_title_2'];
    }

    if(! empty($options['portfolio_section_link_2'])){
      $portfolio_section_link_2 = $options['portfolio_section_link_2'];
    }

    if(! empty($options['portfolio_section_image_3'])){
      $portfolio_section_image_3 = $options['portfolio_section_image_3'];
    }

    if(! empty($options['portfolio_section_title_3'])){
      $portfolio_section_title_3 = $options['portfolio_section_title_3'];
    }

    if(! empty($options['portfolio_section_link_3'])){
      $portfolio_section_link_3 = $options['portfolio_section_link_3'];
    }

    if(isset($options['show_portfolio_section'])){
        $show_portfolio_section = $options['show_portfolio_section'];
    } else {
        $show_portfolio_section = false;
    }

?>

  <!-- Banner -->
  <?php if(has_post_thumbnail()): ?>
    <?php $banner_image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full'); ?>
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('<?php echo $banner_image[0]; ?>);">
  <?php else: ?>
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('<?php echo get_template_directory_uri()."/assets/images/image1.jpg"?>);">
  <?php endif; ?>
        <div class="content text-center">
          <h1 class="text-white mb-1 banner-title"><?php the_field('banner_title'); ?></h1>
          <p class="text-white banner-text"><?php the_field('banner_subtitle'); ?></p>
          <?php if (get_field('want_to_have_a_call_to_action_button') == 'Yes'): ?>
          <a href="<?php the_field('banner_link_button'); ?>" class="btn btn-outline-light"><?php the_field('banner_button_text'); ?></a>
          <?php endif; ?>
        </div>
      </div>
  <!-- Main Content Area -->
  <section class="my-5">
    <!-- About Section -->
    <?php if($show_about_section == true): ?>
      <div class="about-section">
        <div class="about-container">
          <div class="grid">
            <div class="about-img">

              <?php if(isset($about_section_image)): ?>
                <img src="<?php echo $about_section_image; ?>">
              <?php else: ?>
                <img src=<?php echo get_template_directory_uri()."/assets/images/photographer3.jpg"?>>
              <?php endif; ?>

            </div>
            <div class="about-inner">

              <?php if(isset($about_section_title)): ?>
                <h3><?php echo $about_section_title; ?></h3>
              <?php else: ?>
                <h3>Hi! I'm a photographer</h3>
              <?php endif; ?>

              <?php if(isset($about_section_subtitle)): ?>
                <h5><?php echo $about_section_subtitle; ?></h5>
              <?php else: ?>
                <h5>Professional photographer</h5>
              <?php endif; ?>

              <?php if(isset($about_section_content)): ?>
                <p><?php echo $about_section_content; ?></p>
              <?php else: ?>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat at, blanditiis atque minus aliquid
                modi, molestias recusandae culpa in praesentium cumque porro, repudiandae eos enim esse molestiae animi id
                alias.</p>
              <?php endif; ?>

              <?php if(isset($about_section_button_link) and isset($about_section_button)): ?>
                <a href="<?php echo $about_section_button_link; ?>" class="btn btn-outline-light"><?php echo $about_section_button; ?></a>
              <?php else: ?>
                <a href="#" class="btn btn-outline-light">MORE ABOUT ME</a>
              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <!-- Portfolio Section -->
    <?php if($show_portfolio_section == true): ?>
      <div class="section-cards container">
        <div class="row mt-5 cards-container">
          <div class="card-image">
            <?php if(isset($portfolio_section_image_1)): ?>
              <img src="<?php echo $portfolio_section_image_1?>">
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri()."/assets/images/card1.jpg"?>">
            <?php endif; ?>
            <div class="card-details">
              <?php if(isset($portfolio_section_title_1) and isset($portfolio_section_link_1)): ?>
                <a href="<?php echo $portfolio_section_link_1?>"><h2><?php echo $portfolio_section_title_1?></h2></a>
              <?php else: ?>
                <a href="#"><h2>Title</h2></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="card-image">
            <?php if(isset($portfolio_section_image_2)): ?>
              <img src="<?php echo $portfolio_section_image_2?>">
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri()."/assets/images/card3.jpg"?>">
            <?php endif; ?>
            <div class="card-details">
              <?php if(isset($portfolio_section_title_2) and isset($portfolio_section_link_2)): ?>
                <a href="<?php echo $portfolio_section_link_2?>"><h2><?php echo $portfolio_section_title_2?></h2></a>
              <?php else: ?>
                <a href="#"><h2>Title</h2></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="card-image">
            <?php if(isset($portfolio_section_image_3)): ?>
              <img src="<?php echo $portfolio_section_image_3?>">
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri()."/assets/images/card4.jpg"?>">
            <?php endif; ?>
            <div class="card-details">
              <?php if(isset($portfolio_section_title_3) and isset($portfolio_section_link_3)): ?>
                <a href="<?php echo $portfolio_section_link_3?>"><h2><?php echo $portfolio_section_title_3?></h2></a>
              <?php else: ?>
                <a href="#"><h2>Title</h2></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </section>

<?php get_footer(); ?>