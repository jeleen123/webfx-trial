<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JeleenTalledo
 */

?>

<?php if( have_rows('footer_flex_content') ): ?>
  <?php while( have_rows('footer_flex_content') ): the_row(); ?>
      <?php if( get_row_layout() == 'footer_top_flex_container' ):
        // get Footer top flex container details
        $footer_logo_and_socials = get_sub_field('footer_logo_and_socials'); 
              $footer_logo = $footer_logo_and_socials['footer_logo'];
              $footer_facebook = $footer_logo_and_socials['footer_facebook'];
              $footer_instagram = $footer_logo_and_socials['footer_instagram'];
              $footer_youtube = $footer_logo_and_socials['footer_youtube'];
              $footer_tiktok = $footer_logo_and_socials['footer_tiktok'];
              $background_icon = $footer_logo_and_socials['background_icon'];


      ?>
    <!-- Footer Start -->
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="footer-logo">
                <a href="#">
                  <img src="<?php echo $footer_logo;?>" alt="University Animal Clinic" />
                </a>
              </div>
              <div class="footer-social">
                <ul>
                  <li>
                    <a href="<?php echo $footer_facebook;?>" class="icon-facebook" style="background: url(<?php echo $background_icon; ?>) no-repeat center center / 100% auto;"></a>
                  </li>
                  <li>
                    <a href="<?php echo $footer_instagram;?>" class="icon-instagram" style="background: url(<?php echo $background_icon; ?>) no-repeat center center / 100% auto;"></a>
                  </li>
                  <li>
                    <a href="<?php echo $footer_youtube;?>" class="icon-youtube" style="background: url(<?php echo $background_icon; ?>) no-repeat center center / 100% auto;"></a>
                  </li>
                  <li>
                    <a href="<?php echo $footer_tiktok;?>" class="icon-tiktoc" style="background: url(<?php echo $background_icon; ?>) no-repeat center center / 100% auto;"></a>
                  </li>
                </ul>
              </div>
            </div>

       <?php    // get Footer contact info details
            $footer_contact_info = get_sub_field('footer_contact_info'); 
              $contact_info_title = $footer_contact_info['contact_info_title'];
              $coontact_info_details = $footer_contact_info['contact_info_details'];
              $hours_of_operation_title = $footer_contact_info['hours_of_operation_title'];
              $hours_of_operation_details = $footer_contact_info['hours_of_operation_details'];

                // get Hours awards and associations details
            $hours_awards_and_associations = get_sub_field('hours_awards_and_associations');
              $hours_awards_and_associations_title = $hours_awards_and_associations['hours_awards_and_associations_title'];
              $hours_awards_and_associations_image_1 = $hours_awards_and_associations['hours_awards_and_associations_image_1'];
              $hours_awards_and_associations_image_2 = $hours_awards_and_associations['hours_awards_and_associations_image_2'];

      ?>
            <div class="col-lg-3 col-md-6">
              <div class="footer-contact">
                <h4><?php echo $contact_info_title;?></h4>
                <p><?php echo $coontact_info_details;?></p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="footer-contact">
                <h4><?php echo $hours_of_operation_title;?></h4>
                <p><?php echo $hours_of_operation_details;?></p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="footer-contact">
                <h4><?php echo $hours_awards_and_associations_title;?></h4>
                <ul class="award-logos">
                  <li>
                    <img src="<?php echo $hours_awards_and_associations_image_1;?>" alt="Award" />
                  </li>
                  <li>
                    <img src="<?php echo $hours_awards_and_associations_image_2;?>" alt="Award" />
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <?php elseif( get_row_layout() == 'footer_bottom_flex_container' ): // get Footer bottom flex container layout
            $title_1 = get_sub_field('title_1');
            $link_1 = get_sub_field('link_1');
            $title_2 = get_sub_field('title_2');
            $link_2 = get_sub_field('link_2');
            $title_3 = get_sub_field('title_3');
            $link_3 = get_sub_field('link_3');
            $copyright = get_sub_field('copyright');
        ?>

        <div class="footer-bottom">
          <div class="container">
            <div class="bottom-wrap">
              <div class="footer-left">
                <ul class="footer-menu">
                  <li>
                    <a href="<?php echo $link_1;?>"><?php echo $title_1;?></a>
                  </li>
                  <li>
                    <a href="<?php echo $link_2;?>"><?php echo $title_2;?></a>
                  </li>
                  <li>
                    <a href="<?php echo $link_3;?>"><?php echo $title_3;?></a>
                  </li>
                </ul>
                <div class="copyright">
                  <?php echo $copyright;?>
                </div>
              </div>
              <div class="back-top">
                <a class="learn-more yellow-link" href="#">Back to Top <span class="icon-arrow-up"></span></a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Footer End -->
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php wp_footer(); ?>


  <script src="<?php bloginfo('template_url');?>/js/lib.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/custom.js"></script>

</body>
</html>
