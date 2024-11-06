<?php 
   // Template Name: Service Template
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

<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
   <div class="container">
      <div class="row">
         <?php 
            $args = array(
               'post_type' => 'service',
               'posts_per_page' => -1
            );

            $query = new WP_Query($args);
            while($query->have_posts()): $query->the_post();
         ?>
         <div class="col-lg-4 col-md-6">
            <!-- Single Service -->
            <div class="single-service">
               <?php the_field('service_icon'); ?>
               <h4><?php the_title(); ?> </h4>
               <p><?php the_content(); ?> </p>
            </div>
         </div>

         <?php endwhile; wp_reset_postdata(); ?>
      </div>
   </div>
</section>
      <!-- Services Area End -->
 <!-- CTA Area Start -->
 <?php get_footer(); ?>