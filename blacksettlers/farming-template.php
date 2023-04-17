<?php
/**
 * Template Name: Farming Template
 * Description: A custom template for displaying farming images with pagination.
 *
 *
 */
 
get_header();
 echo wp_get_attachment_image_src();
$query = my_custom_query();
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
        $image = wp_get_attachment_image_src( get_the_ID(), 'full' );
        ?>
        <img src="<?php echo esc_url( $image[0] ); ?>" alt="<?php the_title_attribute(); ?>">
    <?php endwhile; ?>
    <?php
    $total_pages = $query->max_num_pages;
    if ( $total_pages > 1 ) :
        $current_page = max( 1, get_query_var( 'paged' ) );
        echo paginate_links( array(
            'base'      => get_pagenum_link( 1 ) . '%_%',
            'format'    => '/page/%#%',
            'current'   => $current_page,
            'total'     => $total_pages,
        ) );
    endif;
endif;
wp_reset_postdata();
 
get_footer();
?>
