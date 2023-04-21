<?php
/**
 * The Donate Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blacksettlers
 */

get_header();
?>

  <main id="primary" class="site-main">
    <div class="donate-container">
      <h2>Donate</h2>
      <div class="donate-form">
        <?php echo do_shortcode('[give_form id="394"]'); ?>
      </div>
    </div><!-- /.donate-container -->
  </main>

<?php get_footer(); ?>