<?php
   // Template Name: Home Template
   get_header(); 
?>
   <?php $config = get_option('halim_option'); ?>
      <!-- Header Area Start -->
      <!-- Slider Area Start -->
      <section class="slider-area" id="home">
         <div class="slider owl-carousel">
            <?php 
               $args = array(
                  'post_type' => 'slider',
                  'posts_per_page' => -1,
               );

               $query = new WP_Query($args);
               while($query->have_posts()): $query->the_post();
            ?>
            <div class="single-slide" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="slide-table">
                           <div class="slide-tablecell">
                              <?php if(get_field('sub_title')): ?>
                              <h4><?php the_field('sub_title'); ?></h4>
                              <?php endif; ?>
                              <h2><?php the_title(); ?></h2>
                              <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital design & web development services.</p>
                              <a href="<?php the_field('button_link'); ?>" class="box-btn"><?php the_field('button_text'); ?> <i class="fa fa-angle-double-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
         </div>
      </section>
      <!-- Slider Area Start -->
      <!-- About Area Start -->
      <section class="about-area pt-100 pb-100" id="about">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span><?php echo $config['about_head_sub_title']; ?></span> <?php echo $config['about_head_title']; ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $config['about_head_description']; ?> </p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="about">
                     <div class="page-title">
                        <h4><?php echo $config['about_left_con_title'] ?></h4>
                     </div>
                     <p><?php echo $config['about_left_content']; ?></p>
                     <a href="<?php echo $config['about_left_btn_link']; ?>" class="box-btn"><?php echo $config['about_left_btn_text']; ?> <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
               <div class="col-md-5">
                  <?php
                     if($config['about_right_con']):
                     foreach($config['about_right_con'] as $items):
                  ?>
                  <div class="single_about">
                     <i class="<?php echo $items['about_right_icon']; ?>"></i>
                     <h4><?php echo $items['about_right_title']; ?></h4>
                     <p><?php echo $items['about_right_des']; ?></p>
                  </div>
                  <?php endforeach; endif; ?>
               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->
      <!-- Choose Area End -->
      <section class="choose">
         <div class="container">
            <div class="row pt-100 pb-100">
               <div class="col-md-6">
                  <div class="faq">
                     <div class="page-title">
                        <h4>faq</h4>
                     </div>
                     <div class="accordion" id="accordionExample">
                        <?php 
                           $i = 0;
                           if($config['faq_content']):
                           foreach($config['faq_content'] as $skil_items):
                              $i++;
                        ?>
                        <div class="card">
                           <div class="card-header" id="heading<?php echo $i;?>">
                              <h5 class="mb-0">
                                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i;?>" aria-expanded="true" aria-controls="collapse<?php echo $i;?>">
                                 <?php echo $skil_items['faq_title']; ?> 
                                 </button>
                              </h5>
                           </div>
                           <div id="collapse<?php echo $i;?>" class="collapse <?php if($i == 1){echo 'show'; }?>" aria-labelledby="heading<?php echo $i;?>" data-parent="#accordionExample">
                              <div class="card-body">
                                 <?php echo $skil_items['faq_des']; ?>
                              </div>
                           </div>
                        </div>
                        <?php endforeach; endif; ?>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="skills">
                     <div class="page-title">
                        <h4>our skills</h4>
                     </div>
                     <?php 
                        if($config['skill_content']):
                        foreach($config['skill_content'] as $skill_items): 
                     ?>
                     <div class="single-skill">
                        <h4><?php echo $skill_items['skill_title']; ?></h4>
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $skill_items['skill_percent']; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $skill_items['skill_percent']; ?> %</div>
                     </div>
                     <?php endforeach; endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Choose Area End -->
      <!-- Services Area Start -->
      <section class="services-area pt-100 pb-50" id="services">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span><?php echo $config['s_sub_title']; ?></span> <?php echo $config['s_title']; ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $config['s_des']; ?> </p>
               </div>
            </div>
            <div class="row">
               <?php 
                  $args = array(
                     'post_type' => 'service',
                     'posts_per_page' => 6
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
      
      <!-- Counter Area End -->
      <section class="counter-area">
         <div class="container-fluid">
            <div class="row">
               <?php 
                  $args = array(
                     'post_type' => 'counters',
                     'posts_per_page' => 4,
                     'order' => 'asc'
                  ); 

                  $query = new WP_Query($args);
                  while($query->have_posts()): $query->the_post();
               ?>
               <div class="col-md-3">
                  <div class="single-counter">
                     <h4><?php the_field('counter_icon'); ?><span class="counter"><?php the_field('counter_number'); ?></span><?php the_title(); ?></span></h4>
                  </div>
               </div>
               <?php endwhile; wp_reset_postdata(); ?>
            </div>
         </div>
      </section>
      <!-- Counter Area End -->
      <!-- Team Area Start -->
      <section class="team-area pb-100 pt-100" id="team">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span><?php echo $config['t_sub_title']; ?></span> <?php echo $config['t_title']; ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $config['t_des']; ?></p>
               </div>
            </div>
            <div class="row">
               <?php 
                  $args = array(
                     'post_type' => 'teams',
                     'posts_per_page' => 3
                  );
                  $query = new WP_Query($args);
                  while($query->have_posts()): $query->the_post();
               ?>
               <div class="col-md-4">
                  <div class="single-team">
                     <?php the_post_thumbnail(); ?>
                     <div class="team-hover">
                        <div class="team-content">
                           <h4><?php the_title(); ?><span><?php the_field('designation'); ?></span></h4>
                           <ul>
                              <li><a href="<?php the_field('facebook_link'); ?>"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="<?php the_field('twitter_link'); ?>"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="<?php the_field('linkden_link'); ?>"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="<?php the_field('google_link'); ?>"><i class="fa fa-google-plus"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endwhile; wp_reset_postdata(); ?>
            </div>
         </div>
      </section>
      <!-- Team Area End -->
     
      <!-- Testimonials Area Start -->
      <section class="testimonial-area pb-100 pt-100" id="testimonials">
         <div class="container">
            <div class="row section-title white-section">
               <div class="col-md-6 text-right">
                  <h3><span><?php echo $config['test_sub_title']; ?></span> <?php echo $config['test_title']; ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $config['test_des']; ?></p>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="testimonials owl-carousel">
                     <?php 
                        $args = array(
                           'post_type' => 'testimonials',
                           'posts_per_page' => -1
                        );
                        $query = new WP_Query($args);
                        while($query->have_posts()): $query->the_post();
                     ?>
                     <div class="single-testimonial">
                        <div class="testi-img">
                           <?php the_post_thumbnail(); ?>
                        </div>
                        <p><?php the_content(); ?></p>
                        <h4><?php the_title(); ?><span><?php the_field('designation'); ?></span></h4>
                     </div>
                     <?php endwhile; wp_reset_postdata(); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonilas Area End -->
      <!-- Latest News Area Start -->
      <section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span><?php echo $config['news_sub_title']; ?></span> <?php echo $config['news_title']; ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $config['news_des']; ?></p>
               </div>
            </div>
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
                     <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                  </div>
                  <div class="pots-meta">
                     <ul>
                        <li><a href="#"><?php echo get_the_date('d, M, Y'); ?></a></li>
                        <li><a href="#"><?php the_author(); ?></a></li>
                        <li><a href="#"><?php the_category('/'); ?></a></li>
                     </ul>
                  </div>
                  <p><?php the_excerpt(); ?></p>
                  <a href="<?php the_permalink();?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
               </div>
            </div>
         </div>
         
         <?php 
            endwhile;
         ?>
      </div>
         </div>
      </section>
      <!-- Latest News Area End -->
      
 <!-- CTA Area Start -->
 <?php get_footer(); ?>