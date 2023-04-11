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
      <div class="donate-content">
        <p>Contributions from donors like you make it possible for us to continue our mission of educating Canadians on the role black settlers played in pioneering the lands of Alberta and Saskatchewan.</p>
        <p>Support our cause by donating today!</p>
      </div>
      <div class="donate-form">
        <?php echo do_shortcode('[give_form id="394"]'); ?>
      </div>
    </div><!-- /.donate-container -->
  </main>

<?php get_footer(); ?>