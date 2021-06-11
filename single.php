<?php get_header(); ?>

<?php 
    
    $options = get_theme_mod('photographer_settings');

    if(! empty($options['related_post_section_title'])){
        $related_post_section_title = $options['related_post_section_title'];
    }

    if(isset($options['show_related_post_section'])){
        $show_related_post_section = $options['show_related_post_section'];
    } else {
        $show_related_post_section = false;
    }

?>

    <!-- Post Page -->
    <section>
        <div class="post-page">

            <?php if (have_posts()): while(have_posts()):the_post(); ?>
                <div class="post-page-image">
                    <?php 
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('post-thumbnails', array(
                                'class' => 'post-image'
                            ));
                        }
                    ?>
                </div>
                <div class="post-page-content">
                    <div class="post-meta">
                        <h1 class="post-title"><?php the_title(); ?></h1>
                        <p class="post-info"><i class="far fa-calendar-alt"></i> <?php the_time('F j, Y'); ?> - <i
                                class="far fa-folder-open"></i> <?php the_category(' / '); ?></p>
                        <hr class="post-line">
                    </div>
                    <div class="post-text mt-4 mb-5">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; endif; ?>

            <?php get_template_part('template-parts/section', 'socialMedia'); ?>
        </div>
        <!-- Related Post Section -->
        <?php if($show_related_post_section == true): ?>
            <div class="post-section mt-4 mb-5">
                <div class="container">
                    <div class="row">

                        <?php if(isset($related_post_section_title)): ?>
                            <h3 class="post-section-title"><i class="fas fa-angle-right"></i> <?php echo $related_post_section_title; ?></h3>
                        <?php else: ?>
                            <h3 class="post-section-title"><i class="fas fa-angle-right"></i> You might also like</h3>
                        <?php endif; ?>
                        
                    </div>
                    <div class="row mt-3 post-section-cards">

                    <?php
                        $related_posts = new WP_Query(array(
                            'post_type' => 'post',
                            'cat' => wp_get_post_categories(get_the_ID()),
                            'post__not_in' => array(get_the_ID()),
                            'posts_per_page' => 3,
                            'orderby' => 'date',
                        ));
                    ?>

                    <?php if ($related_posts->have_posts()): while($related_posts->have_posts()):$related_posts->the_post(); ?>
                        <div class="post-section-card">
                            <div class="post-section-card-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php 
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('related_post_image');
                                        }
                                    ?>
                                </a>
                                <div class="post-section-card-details">
                                    <a href="<?php the_permalink(); ?>">
                                        <h2><?php the_title(); ?></h2>
                                    </a>
                                    <p class="post-section-card-date"><i class="far fa-calendar-alt"></i> <?php the_time('F j, Y'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; else: ?>
                        <?php $show_related_post_section = false; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </section>

<?php get_footer(); ?>