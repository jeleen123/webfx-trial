<?php if( have_rows('header_flex_content') ): ?>
    <?php while( have_rows('header_flex_content') ): the_row(); ?>
        <?php if( get_row_layout() == 'covid_message_container' ):
    	// get Covid Message details
			$covid_message_backgroundcolor = get_sub_field('covid_message_backgroundcolor');
			$covid_message_text_color = get_sub_field('covid_message_text_color');
			$covid_message_text = get_sub_field('covid_message_text');
			$covid_message_cta_link = get_sub_field('covid_message_cta_link');
			$covid_message_cta_title = get_sub_field('covid_message_cta_title');
			$covid_message_cta_link_color = get_sub_field('covid_message_cta_link_color');        
        ?>
            <div class="covid-message" style="background-color:<?php echo $covid_message_backgroundcolor; ?>;">
                <div class="container">
                    <div class="covid-text" style="color:<?php echo $covid_message_text_color; ?>"><?php echo $covid_message_text; ?></div>
                    <div class="covid-link">
                        <a class="learn-more" href="<?php echo $covid_message_cta_link; ?>" style="color:<?php echo $covid_message_cta_link_color; ?>"><?php echo $covid_message_cta_title; ?> <span class="icon-arrow-right"></span></a>
                    </div>
                    <a href="javascript:void(0);" class="icon-close removeit"></a>
                </div>
            </div>

		<?php elseif( get_row_layout() == 'header_content' ): 
			// get header contents layout
			$header_content = get_sub_field('header_logo'); // get header logo and link
				$logo_image = $header_content['header_logo_image'];
        ?>

        	<header id="masthead" class="header">
    			<div class="container">
    				<div class="header-wrap">
						<div class="header-logo">
							<a href="<?php echo get_home_url(); ?>">
								<img src="<?php echo $logo_image; ?>" />
							</a>
						</div>

						<?php // get Header conent details group ?>
						<?php $header_content_details = get_sub_field('header_content_details');
								$call_title = $header_content_details['call_us_title'];
								$phone_link = $header_content_details['phone_number_link'];
								$phone_text = $header_content_details['phone_number_text'];
						?>
						<div class="header-right">
							<div class="header-content">
								<div class="call-us">
									<span><?php echo $call_title; ?></span>
									<a href="<?php echo $phone_link; ?>"><?php echo $phone_text; ?></a>
								</div>

								<?php // get Online request container group ?>
								<?php $online_request_container = get_sub_field('online_request_container');
										$button1_cta = $online_request_container['button_1_cta'];
										$button1_link = $online_request_container['buttoon_1_link'];
										$button2_cta = $online_request_container['button_2_cta'];
										$button2_link = $online_request_container['button_2_link'];
								?>

								<div class="online-request">
									<a href="<?php echo $button1_link; ?>"  class="btn btn-secondary" ><?php echo $button1_cta; ?></a>
									<a href="<?php echo $button2_link; ?>" class="btn btn-primary" ><?php echo $button2_cta; ?></a>
								</div>
							</div>
							<div class="header-bottom">
								<nav class="navbar navbar-expand-lg navbar-light">
									<button class="navbar-toggler" type="button" data-toggle="collapse"
										data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
										aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon">
											<span></span>
											<span></span>
											<span></span>
										</span>
										<span class="menu-text">Menu</span>
									</button>
									<div class="collapse navbar-collapse" id="navbarSupportedContent">
										<?php wp_nav_menu( array( 
											'container_class' => 'primary-menu', 
											'theme_location' => 'menu-1',
											'menu_class' => 'navbar-nav nav-item',
											'menu_id' => 'navbar-wrap')
										); ?>
									</div>
								</nav><!-- #site-navigation -->
								<div class="header-search">
									<a href="javascript:void(0);" class="icon-search"></a>
								</div>
							</div>
						</div>
					</div><!-- header wrapper -->
				</div><!-- container -->
				<div class="searchbar">
					<div class="container">
						<div class="searchbar-inner">
							<input type="text" class="form-control" placeholder="Search here...">
							<button type="submit" class="btn search-btn icon-search"></button>
						</div>
					</div>
				</div><!-- Search bar -->
				<div class="mobile-bottom-header">
					<div class="call-us">
						<span><?php echo $call_title; ?></span>
						<a href="<?php echo $phone_link; ?>"><?php echo $phone_text; ?></a>
					</div>
				</div><!-- mobile bottom header -->
				
			</header><!-- #masthead -->



		<?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
	
	
