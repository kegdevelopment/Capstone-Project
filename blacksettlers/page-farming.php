<?php
/**
 * Template Name: Farming Page
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
            'post_type' => 'attachment',
            'post_mime_type' => 'image',
            'post_status' => 'inherit',
            'posts_per_page' => 1,
            'paged' => $paged,
            'orderby' => 'menu_order',
            'order' => 'ASC',
            
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
        $query->the_post();

        $img_url = wp_get_attachment_image_src( get_the_ID(), 'large' )[0];

        echo '<div class="gallery-item">';
        echo '<img src="' . $img_url . '" />';
        echo '</div>';
      }
    }
        ?>
 <div class="pagination">
  <?php
    $paged = max(1, get_query_var('paged'));
    $total_pages = $query->max_num_pages;
    $prev_arrow = is_rtl() ? '&raquo;' : '&laquo;';
    $next_arrow = is_rtl() ? '&laquo;' : '&raquo;';
    echo '<a class="prev-arrow" href="' . get_previous_posts_page_link() . '"><span></span></a>';
    echo '<span class="page-numbers">' . sprintf(__(' %d of %d', 'text-domain'), $paged, $total_pages) . '</span>';
    echo '<a class="next-arrow" href="' . get_next_posts_page_link($total_pages) . '"><span></span></a>';
  ?>
</div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
