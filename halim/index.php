<?php get_header(); ?>
      <!-- Header Area Start -->

   <?php 
      get_template_part('template-parts/breadcumb', 'breadcumb')
   ?>

<section class="blog-area pb-100 pt-100" id="blog">
   <div class="container">
      <div class="row">
         <?php 
            $args = array(
               'post_type' => 'post',
               'posts_per_page' => -1
            );

            $query = new WP_Query($args);

               while($query->have_posts()): $query->the_post();
         ?>
         <div class="col-md-4">
            <div class="single-blog">
               <?php the_post_thumbnail(); ?>
               <div class="post-content">
                  <div class="post-title">
                     <h4><a href="<?php esc_url(the_permalink());?>"><?php the_title(); ?></a></h4>
                  </div>
                  <div class="pots-meta">
                     <ul>
                        <li><a href="#"><?php echo get_the_date('d, M, Y'); ?></a></li>
                        <li><a href="#"><?php the_author_posts_link(); ?></a></li>
                        <li><a href="#"><?php the_category('/'); ?></a></li>
                     </ul>
                  </div>
                  <p><?php the_excerpt(5); ?></p>
                  <a href="<?php esc_url(the_permalink());?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
               </div>
            </div>
         </div>
         
         <?php 
            endwhile;
         ?>
          <?php wp_link_pages( $args ); ?>
      </div>
   </div>
</section>
      <!-- Latest News Area End -->
 <!-- CTA Area Start -->
 <?php get_footer(); ?>