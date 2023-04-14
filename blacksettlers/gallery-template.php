<?php
/*
Template Name: Image Gallery Template
*/

get_header();
?>

<main id="main" class="site-main">

  <div class="gallery">

    <?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
      'post_type' => 'attachment',
      'post_mime_type' => 'image',
      'post_status' => 'inherit',
      'posts_per_page' => 1,
      'paged' => $paged,
      'post_parent' => get_the_ID() // include only images attached to the current page
    );
    $images = new WP_Query( $args );

    if ( $images->have_posts() ) {
      while ( $images->have_posts() ) {
        $images->the_post();

        $img_url = wp_get_attachment_image_src( get_the_ID(), 'large' )[0];

        echo '<div class="gallery-item">';
        echo '<img src="' . $img_url . '" />';
        echo '</div>';
      }
    }
    ?>

  </div>

  
  <div class="pagination">
  <?php
    $paged = max(1, get_query_var('paged'));
    $total_pages = $images->max_num_pages;
    $prev_arrow = is_rtl() ? '&raquo;' : '&laquo;';
    $next_arrow = is_rtl() ? '&laquo;' : '&raquo;';
    echo '<a class="prev-arrow" href="' . get_previous_posts_page_link() . '"><span></span></a>';
    echo '<span class="page-numbers">' . sprintf(__('Page %d of %d', 'text-domain'), $paged, $total_pages) . '</span>';
    echo '<a class="next-arrow" href="' . get_next_posts_page_link($total_pages) . '"><span></span></a>';
  ?>
</div>

</main>

<?php get_footer(); ?>
