<?php
/*
Template Name: Farming Template
*/

get_header();
?>

<main id="main" class="site-main">

  <div class="gallery">

    <?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $category = get_queried_object();
    $args = array(
      'post_type' => 'attachment',
      'category_name' => $category->slug,
      'post_status' => 'inherit',
      'posts_per_page' => 1,
      'paged' => $paged,
      'post_parent' => get_the_ID() // include only images attached to the current page
    );
    $images= new WP_Query( $args );

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

  <?php
  // Add pagination links

  echo '<div class="pagination">';
  echo paginate_links( array(
    'total' => 25,
    'current' => max( 1, get_query_var( 'paged' ) ),
    'prev_text' => __( '&laquo; Previous' ),
    'next_text' => __( 'Next &raquo;' )
) );


  ?>

</main>

<?php get_footer(); ?>
