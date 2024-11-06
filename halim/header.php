<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset')?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Google -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
      
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
      <?php wp_body_open(); ?>

      <?php $config = get_option('halim_option'); ?>

      <?php 
         if($config['header_top_o_f']):
      ?>
	   <section class="header-top">
			<div class="container"> 
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="header-left">
							<a href=""><i class="fa fa-envelope"></i> <?php echo $config['header_top_email'] ?></a>
							<a href=""><i class="fa fa-phone"></i> <?php echo $config['header_top_number'] ?></a>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="header-social">
                     <?php
                        if($config['right_icon_lists']): 
                        foreach($config['right_icon_lists'] as $items):
                     ?>

							<a href="<?php echo esc_url($items['header_top_icon_link']); ?>"><i class="<?php echo $items['header_top_icon']; ?>"></i></a>

                     <?php endforeach; endif; ?>
						</div>
					</div>
				</div>
			</div>
	   </section>
      <?php endif; ?>
      <!-- Header Area Start -->
      <header class="header header-fixed">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <nav class="navbar navbar-expand-md navbar-light">
                     <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"><?php echo $config['header_logo']; ?></a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse ml-auto mainmenu justify-content-end" id="navbarNav">
                        <?php 
                           wp_nav_menu(array(
                              'theme_location' => 'primary-menu',
                              'menu_class' => 'navbar-nav ml-auto'
                           ));
                        ?>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>