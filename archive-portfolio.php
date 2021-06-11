<?php 
    
    $tax = 'album';

    $types = get_terms( $tax, $args = array(
        'hide_empty'    => false,
        'post_type'     => 'portfolio',
    ) );

?>

<?php get_header(); ?>

    <!-- Portfolio -->
    <section>
        <div class="container">
            <div class="row mt-5 mb-3 text-center">
                <div class="col-12">
                    <h1 class="portfolio-title"><?php wp_title('',true,'right'); ?></h1>
                    <p class="portfolio-description"><?php the_content(); ?></p>
                </div>
            </div>
            <div class="portfolio mb-5">
                <?php foreach($types as $type) :?>
                    <div class="portfolio-image">
                        <?php
                        $term_link = get_term_link( $type );
                        $term_name = get_term( $type )->name;
                        $image = get_field('category_image', 'album_' . $type->term_id . '' );
                        ?>
                        <img src="<?php echo $image['url']; ?>" alt="">
                        <div class="portfolio-details">
                            <h2><?php echo esc_attr( $term_name ); ?></h2>
                            <div class="portfolio-gallery">
                                <a href="<?php echo esc_url( $term_link ); ?>" class="btn btn-outline-light">Open the gallery</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>