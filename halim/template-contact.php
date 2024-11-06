<?php 
   // Template Name: Contact Template
   get_header();
?>
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

<!-- Contact Us Area End -->
<section class="contact-area pb-100 pt-100" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-10 mx-auto">
                  <div class="row text-center">
                     <?php 
                        if($config['content_lists']):
                        foreach($config['content_lists'] as $item):
                     ?>
                     <div class="col-md-4">
                        <div class="contact-address">
                           <i class="<?php echo $item['contact_icon']; ?>"></i>
                           <h4><?php echo $item['contact_title']; ?> <span><?php echo $item['contact_sub_title']; ?></span></h4>
                        </div>
                     </div>
                     <?php endforeach; endif; ?>
                  </div>
                  <div class="row">
                     <div class="col-md-7">
                        <div class="contact-form">
                           <?php echo do_shortcode('[contact-form-7 id="4f00685" title="halim-contact"]'); ?>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="google-map">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5785846.583418618!2d<?php echo $config['contact_map']['longitude']; ?>!3d<?php echo $config['contact_map']['latitude']; ?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d4caa3dc7ca0411%3A0x97dd48597a62c9b3!2sMichigan%2C+USA!5e0!3m2!1sen!2sbd!4v1540614431885"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Us Area End -->
 <!-- CTA Area Start -->
 <?php get_footer(); ?>