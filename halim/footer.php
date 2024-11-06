<?php $config = get_option('halim_option'); ?>
<section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h4><?php echo $config['cta_title']; ?> <span><?php echo $config['news_sub_title']; ?></span></h4>
         </div>
         <div class="col-md-6 text-center">
            <a href="<?php echo esc_url($config['cta_btn_link']); ?>" class="box-btn"><?php echo $config['cta_btn_text']; ?> <i class="fa fa-angle-double-right"></i></a>
         </div>
      </div>
   </div>
</section>
<!-- CTA Area End -->
<!-- Footer Area End -->
<footer class="footer-area pt-50 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6">
            <div class="single-footer footer-logo">
               <h3><?php echo $config['footer_logo']; ?></h3>
               <p><?php echo $config['footer_logo_des']; ?></p>
            </div>
         </div>
         <div class="col-lg-2 col-md-6">
            <?php dynamic_sidebar('footer_1'); ?>
         </div>
         <div class="col-lg-4 col-md-6">
            <?php dynamic_sidebar('footer_2') ?>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="single-footer contact-box">
               <h4><?php echo $config['4_widget_title']; ?></h4>
               <ul>
                  <?php 
                     if($config['4_widget_details']):
                     foreach($config['4_widget_details'] as $items):
                  ?>
                  <li><i class="<?php echo $items['4_widget_icon'];?>"></i>  <?php echo $items['4_widget_location_text'];?></li>
                  <?php endforeach; endif; ?>
               </ul>
            </div>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-6">
            <p><?php echo $config['copy_right']; ?></p>
         </div>
         <div class="col-md-6 text-right">
            <ul>
               <?php 
                  if($config['footer_socials']):
                  foreach($config['footer_socials'] as $items):
               ?>
               <li><a href="<?php echo esc_url($items['footer_social_link']); ?>"><i class="<?php echo $items['footer_social_icon']; ?>"></i></a></li>
               <?php endforeach; endif;?>
            </ul>
         </div>
      </div>
   </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>