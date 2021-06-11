<?php get_header(); ?> 

<?php 

    $args=array(  
        'post_type'=>'portfolio',                 
        //'post__not_in' => array(get_the_ID()),
        'posts_per_page'=> 30, 
        //'caller_get_posts'=>1,//handle sticky post but not in first
    );

    $taxonomies = get_the_terms( get_the_ID(),'album' );

    if ($taxonomies){   
        $taxonomy_ids = array();         
        foreach($taxonomies as $taxonomy){
            $taxonomy_ids[] = $taxonomy->term_id; 
            $name = $taxonomy->name;
            $description = $taxonomy->description;
        }
        if(!empty($taxonomy_ids))
        {

            $args['tax_query']= array(
                array(
                    'taxonomy' => 'album',
                    'field'    => 'term_id',
                    'terms'    => $taxonomy_ids,
                ),
            );
        }
    }

    $portfolio = new WP_Query($args);

    //echo '<prev>';
    //print_r($taxonomies);
    //wp_die();
?>

    <!-- Gallery -->
    <section>
        
            <div class="container">
                <div class="row mt-5 mb-3 text-center">
                    <div class="col-12">
                        <h1 class="gallery-title"><?php echo $name; ?></h1>
                        <p class="gallery-description"><?php echo $description; ?></p>
                    </div>
                </div>
                <div class="row mb-5 wrapper">
                    <?php ?>
                    <div class="gallery">
                        <?php if($portfolio->have_posts()): while($portfolio->have_posts()): $portfolio->the_post(); ?>
                            <?php if ( has_post_thumbnail() ): ?> 
                                <div class="image"><span><?php the_post_thumbnail('portfolio-item') ;?></span></div>
                            <?php endif; ?>
                            <?php //wp_reset_postdata(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                    
                </div>
            </div>
        <?php  ?>

        <div class="preview-box">
            <div class="details">
                <span class="title">
                    Image <p class="current-img"></p> of <p class="total-img"></p>
                </span>
                <span class="icon fas fa-times"></span>
            </div>
            <div class="img-box">
                <div class="slide prev">
                    <i class="fas fa-angle-left"></i>
                </div>
                <div class="slide next">
                    <i class="fas fa-angle-right"></i>
                </div>
                <img src="" alt="">
            </div>
        </div>
        <div class="shadow-background"></div>
    </section>

<?php get_footer(); ?>