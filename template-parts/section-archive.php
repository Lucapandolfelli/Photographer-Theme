<!-- Blog -->
<section>
        <div class="container">
            <div class="row"></div>
            <div class="row my-5 blog-section">

                <?php if (have_posts()): while(have_posts()):the_post(); ?>
                    <div class="card">
                        <a href="<?php the_permalink(); ?>" class="card-img-top">
                            <?php 
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('category-thumb', array(
                                        'class' => 'card-img-top'
                                    ));
                                }
                            ?>
                        </a>
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>" class="card-title"><h5 class="card-title"><?php the_title(); ?></h5></a>
                            <p class="card-info"><i class="far fa-calendar-alt"></i> <?php the_time('F j, Y'); ?> - <i
                                class="far fa-folder-open"></i> <?php the_category(' / '); ?></p>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="card-link">Continue Reading...</a>
                        </div>
                    </div>
                <?php endwhile; endif; ?>

            </div>
        </div>
    </section>