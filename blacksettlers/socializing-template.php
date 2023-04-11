<?php
/*
Template Name: Socializing Template
*/

get_header();
?>

<main id="main" class="site-main">

  <div class="gallery">

    <?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = (array(
      'post_type' => 'attachment',
      'post_mime_type' => 'image',
      'post_status' => 'inherit',
      'posts_per_page' => 12,
      'paged' => $paged
    ));
    $images= new WP_Query( $args );

    if ($images) {
      foreach ($images as $image) {
        $img_url = wp_get_attachment_image_src($image->ID, 'large')[0];

        echo '<div class="gallery-item">';
        echo '<img src="' . $img_url . '" />';
        echo '</div>';
      }
    }
    ?>

  </div>

  <?php
  // Add pagination links

  echo '<div class="pagination">';
  echo paginate_links( array(
      'total' => $images->max_num_pages,
      'current' => max( 1, get_query_var( 'paged' ) ),
      'prev_text' => __( '&laquo; Previous' ),
      'next_text' => __( 'Next &raquo;' )
  ) );
  echo '</div><!-- .pagination -->';
  ?>

</main>

<?php get_footer(); ?>
