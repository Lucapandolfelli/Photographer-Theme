<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="page">
            <div class="row mt-5 mb-3">
                <div class="col-12">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="row page-content">
                <div class="page-text mb-4">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>