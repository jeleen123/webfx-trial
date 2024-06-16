<?php if( have_rows('header_flex_content') ): ?>
    <?php while( have_rows('header_flex_content') ): the_row(); ?>
        <?php if( get_row_layout() == 'covid_message_container' ):
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
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
	
	<header id="masthead" class="site-header">
		<div class="header-logo">
			<a href="#">
				<img src="assets/images/logo.png" alt="University Animal Clinic" />
			</a>
		</div>
		<div class="header-right">
			<div class="header-content">
				<div class="call-us"><span>call us today</span> <a href="tel:9413557707">941-355-7707</a></div>
					<div class="online-request">
						<a href="#" class="btn btn-secondary">Online Pharmacy</a>
						<a href="#" class="btn btn-primary">Request an Appointment</a>
					</div>
				</div>
				
			</div>



		<div class="site-branding">
				<h1 class="h1_title"></h1>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jeleentalledo' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
