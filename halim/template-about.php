<?php 
   // Template Name: About Template
   get_header(); 
   
?>
   <!-- theme options -->
   <?php $config = get_option('halim_option'); ?>

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

<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <div class="about">
               <div class="page-title">
                  <h4><?php echo $config['about_left_con_title'] ?></h4>
               </div>
               <p><?php echo $config['about_left_content']; ?></p>
               <a href="<?php echo esc_url($config['about_left_btn_link']); ?>" class="box-btn"><?php echo $config['about_left_btn_text']; ?> <i class="fa fa-angle-double-right"></i></a>
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
 <!-- CTA Area Start -->
 <?php get_footer(); ?>