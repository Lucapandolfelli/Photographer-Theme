<?php
/* 
Template Name: About Page
*/
?>

<?php get_header(); ?>

    <!-- Main Section -->
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
        <!-- Social Media Buttons -->
        <?php get_template_part('template-parts/section', 'socialMedia'); ?>
    </section>

<?php get_footer(); ?>