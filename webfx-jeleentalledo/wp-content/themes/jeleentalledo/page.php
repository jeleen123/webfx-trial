<?php @session_start();
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JeleenTalledo
 */


get_includes('head');
get_includes('header');
get_includes('nav');
get_includes('banner');
?>

	<main id="primary" class="site-main">
        <div class="container">
            <?php
            if ( !is_front_page() && !is_home() ) :
                ?>
                <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                ?>

                <?php
            else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
            endif;
            $jeleentalledo_description = get_bloginfo( 'description', 'display' );
            if ( $jeleentalledo_description || is_customize_preview() ) :
                ?>
                <p class="site-description"><?php echo $jeleentalledo_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
            <?php endif; ?>
        </div>
    
    </main><!-- #main -->

<?php
get_sidebar();
get_footer();

