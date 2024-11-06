<?php get_header(); ?>
      <!-- Header Area Start -->

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_title(); ?></h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url()); ?>">Home</a></li> / 
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-single pt-100 pb-100 <?php post_class(); ?>">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php the_title(); ?></h2>
                <?php the_post_thumbnail(); ?>
                <p><?php the_content(); ?></p>
                <div class="comments">
                <?php 
                    if ( comments_open()) : 
                        comments_template();
                    endif;
                ?>
                </div>
            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

 <?php get_footer(); ?>