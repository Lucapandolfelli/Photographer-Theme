<?php 
    
    $options = get_theme_mod('photographer_settings');

    if(! empty($options['socialmedia_section_title'])){
        $socialmedia_section_title = $options['socialmedia_section_title'];
    }

    if(! empty($options['socialmedia_section_twitter'])){
        $socialmedia_section_twitter = $options['socialmedia_section_twitter'];
    }

    if(! empty($options['socialmedia_section_instagram'])){
        $socialmedia_section_instagram = $options['socialmedia_section_instagram'];
    }

    if(! empty($options['socialmedia_section_pinterest'])){
        $socialmedia_section_pinterest = $options['socialmedia_section_pinterest'];
    }

    if(! empty($options['socialmedia_section_facebook'])){
        $socialmedia_section_facebook = $options['socialmedia_section_facebook'];
    }

    if(isset($options['show_socialmedia_section'])){
        $show_socialmedia_section = $options['show_socialmedia_section'];
    } else {
        $show_socialmedia_section = false;
    }

?>

<!-- Social Media Buttons -->
<?php if($show_socialmedia_section == true): ?>
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <?php if(isset($socialmedia_section_title)): ?>
                    <h6 class="social-title"><?php echo $socialmedia_section_title; ?></h6>
                <?php else: ?>
                    <h6 class="social-title">Please share this</h6>
                <?php endif; ?>
                <div class="social-menu">
                    <ul>
                        <?php if(isset($socialmedia_section_twitter)): ?>
                            <li><a href="<?php echo $socialmedia_section_twitter; ?>"><i class="fab fa-twitter"></i></a></li>
                        <?php else: ?>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <?php endif; ?>

                        <?php if(isset($socialmedia_section_instagram)): ?>
                            <li><a href="<?php echo $socialmedia_section_instagram; ?>"><i class="fab fa-instagram"></i></i></a></li>
                        <?php else: ?>
                            <li><a href="#"><i class="fab fa-instagram"></i></i></a></li>
                        <?php endif; ?>

                        <?php if(isset($socialmedia_section_pinterest)): ?>
                            <li><a href="<?php echo $socialmedia_section_pinterest; ?>"><i class="fab fa-pinterest"></i></a></li>
                        <?php else: ?>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <?php endif; ?>

                        <?php if(isset($socialmedia_section_facebook)): ?>
                            <li><a href="<?php echo $socialmedia_section_facebook; ?>"><i class="fab fa-facebook"></i></a></li>
                        <?php else: ?>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>