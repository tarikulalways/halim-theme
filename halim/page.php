<?php
    // Template Name: Page Template
    get_header(); 
?>
<section class="page-area pb-100 pt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>