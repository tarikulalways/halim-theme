<?php 
   // Template Name: Gallery Template
   get_header();
?>
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

<section class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <?php 
                $args = array(
                    'post_type' => 'galleries',
                    'posts_per_page' => -1,
                    'order' => 'asc'
                );
                $query = new WP_Query($args);
                while($query->have_posts()): $query->the_post();
            ?>
            <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php esc_attr(the_field('small_image')); ?>" alt="">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php esc_attr(the_field('big_image')); ?>" class="gallery"><i class="fa fa-plus"></i> <?php the_title(); ?></a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
 <!-- CTA Area Start -->
 <?php get_footer(); ?>