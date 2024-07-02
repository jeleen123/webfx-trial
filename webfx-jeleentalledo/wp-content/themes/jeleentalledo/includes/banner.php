<!-- Hero Content Start -->
<?php if (is_front_page() ) { ?>
	
		<?php if( have_rows('hero_content') ):
			$i = 1; // Set the increment variable

		echo '<div class="home-slider owl-carousel owl-theme">';

						// loop through the rows of data for the tab header
						while( have_rows('hero_content') ) : the_row();

							$hero_image  = get_sub_field('hero_image');
							$hero_small_title  = get_sub_field('hero_small_title');
							$hero_description  = get_sub_field('hero_description');
							$hero_link  = get_sub_field('hero_link');
							$hero_link_cta  = get_sub_field('hero_link_cta');

						?>
					<div class="item <?php if($i == 1) echo 'active';?>">
							<div class="slide-image">
								<img src="<?php echo $hero_image;?>" alt="Slide" />
							</div>
						<div class="container">
							<div class="slide-content">
								<h4 class="optinal-h4"><?php echo $hero_small_title;?></h4>
								<h3><?php echo $hero_description;?></h3>
								<a href="<?php echo $hero_link;?>" class="btn btn-primary"><?php echo $hero_link_cta;?></a>
							</div>
						</div>
					</div>
					<?php   $i++; // Increment the increment variable

						 endwhile; 
		echo '</div>';
		    
				 endif; ?>
				
	<?php } else {?>
				 <div class="non_ban">
					 <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				 </div>
 <?php }?>
<!-- Hero Content End -->

