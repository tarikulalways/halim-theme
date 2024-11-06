<?php 
   // Template Name: Protfolio Template
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

<!-- projectss Area Start -->
<section class="projects-area pb-100 pt-100" id="projects">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="portfolio-menu mb-40 text-center">
                     <button class="active" data-filter="*">ALL</button>
                     <?php 
                        $categories = get_terms('prot_category');
                        foreach($categories as $category):
                     ?>
                     <button data-filter=".<?php echo $category->slug;?>" class=""><?php echo $category->name; ?></button>
                     <?php endforeach; ?>
                  </div>
               </div>
            </div>
            <div class="row grid no-gutters">
               <?php 
                  $args = array(
                     'post_type' => 'protfolios',
                     'posts_per_page' => -1,
                     'order' => 'asc'
                  );
                  $query = new WP_Query($args);
                  while($query->have_posts()): $query->the_post();
               ?>
               <div class="col-md-4 grid-item 
                  <?php
                     $category_items = get_the_terms(get_the_ID(), 'prot_category');
                     foreach($category_items as $item){
                        echo $item->slug.' ';
                     }
                  ?>
               ">
                  <div class="single-portfolio">
                     <?php the_post_thumbnail(); ?>
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="<?php the_permalink(); ?>" class=""><i class="fa fa-link"></i> <?php the_title(); ?> <span><?php echo $item->slug; ?></span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endwhile; ?>
            </div>
         </div>
      </section>
      <!-- projectss Area End -->
 <!-- CTA Area Start -->
 <?php get_footer(); ?>