<?php 
/**
*partial template for the page-gallery.php template
*
*@packagr blacksettlersb

* @since 1.0.0
*/

 ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <div class="gallery-section">
            <h2>Galleries</h2>
            <div class="gallery-images">
                <div class="gallery-box farming">
                <div class="image-box">
                <img src="https://blacksettlersb.web.dmitcapstone.ca/wp-content/uploads/2023/04/walker-beaver-farming.jpeg" alt="man on tractor">
                </div>
                <div class="gallery-text">
                    <h3>Farming</h3>
                </div>
                </div>
                <div class="gallery-box schools">
                    <div class="image-box">
                    <img src="https://blacksettlersb.web.dmitcapstone.ca/wp-content/uploads/2023/04/unid-school-children.jpeg" alt="children at school">
                    </div>
                    <div class="gallery-text">
                        <h3>Schools</h3>
                    </div>
                </div>
                <div class="gallery-box church" >
                <div class="image-box">
                    <img src="https://blacksettlersb.web.dmitcapstone.ca/wp-content/uploads/2023/04/unid-3-men-cropped.jpg" alt="three men dressed for church">
                </div>
                    <div class="gallery-text">
                        <h3>Church</h3>
                    </div>
                </div>
                <div class="gallery-box socializing">
                <div class="image-box">
                    <img src="https://blacksettlersb.web.dmitcapstone.ca/wp-content/uploads/2023/04/chrisitineb-garrickd-dennisbowen-social.jpg" alt="group of people socializing">
                </div>
                    <div class="gallery-text">
                        <h3>Socializing</h3>
                    </div>
                </div>
                
            </div>
        </div>

        <?php
        // Query the gallery posts
        $args = array(
            'post_type' => 'gallery',
            'posts_per_page' => 1, // Display one gallery post per page
            'paged' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 // Add pagination
        );
        $gallery_posts = new WP_Query( $args );

        // If we have gallery posts, display them
        if ( $gallery_posts->have_posts() ) :
            ?>
            <div class="gallery">
                <?php while ( $gallery_posts->have_posts() ) : $gallery_posts->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                <?php endwhile; ?>
            </div><!-- .gallery -->
            <?php
        endif;

        // Add pagination links
        echo '<div class="pagination">';
        echo paginate_links( array(
            'total' => $gallery_posts->max_num_pages,
            'current' => max( 1, get_query_var( 'paged' ) ),
            'prev_text' => __( '&laquo; Previous' ),
            'next_text' => __( 'Next &raquo;' )
        ) );
        echo '</div><!-- .pagination -->';

        wp_reset_postdata(); // Reset the post data
        ?>

    </main><!-- #main -->
</div><!-- #primary -->


