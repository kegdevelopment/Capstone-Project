<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blacksettlers
 */

get_header();
?>

	<main id="primary" class="site-main">

  <div class="community-container">
    <div class="community-content">
      <h2 class="community-name"><?php the_field('community_name'); ?></h2>
      <div class="intro-content">
        <div class="intro-text">
          <div class="p-container">
            <?php the_field('intro_information'); ?>
          </div>
        </div>
        <div class="image-content">
          <?php 
            $image = get_field('intro_image');
            if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <p class="caption"><?php echo $image['caption']; ?></p>
            <?php endif; ?>
        </div> <!-- .image-content -->
      </div> <!-- .intro-content -->
      <div class="first-main-section">
      <?php if( get_field('section1_subheading') ): ?>
        <h3 class="community-subheading"><?php the_field('section1_subheading'); ?></h3>
      <?php endif; ?>
        <div class="first-main-section section-content">
          <div class="image-content">
            <?php 
              $image = get_field('section1_image1');
              if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <p class="caption"><?php echo $image['caption']; ?></p>
              <?php endif; ?>
          </div><!-- .image-content -->
            <div class="section-text">
              <div class="p-container">
                <?php the_field('section1_content'); ?>
              </div>
            </div>
        </div> <!-- first-main-section .section-content -->
        <div class="first-main-section second-img">
          <div class="image-content">
            <?php 
            $image = get_field('section1_image2');
            if( !empty( $image ) ): ?>
              <img class="second-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <p class="caption"><?php echo $image['caption']; ?></p>
            <?php endif; ?>
          </div><!-- .image-content -->
        </div><!-- .second-img -->
      </div><!-- .first-main-section -->
      <div class="second-main-section">
      <?php if( get_field('section2_subheading') ): ?>
        <h3 class="community-subheading"><?php the_field('section2_subheading'); ?></h3>
      <?php endif; ?>
        <div class="second-main-section section-content">
          <div class="section-text">
            <div class="p-container">
              <?php the_field('section2_content'); ?>
            </div>
          </div>
          <div class="image-content">
            <?php 
              $image = get_field('section2_image');
              if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <p class="caption"><?php echo $image['caption']; ?></p>
            <?php endif; ?>
          </div><!-- .image-content -->
        </div><!--  .second-section section-content -->
      </div><!-- .second-section -->
    </div><!-- .community-content -->
    <div class="amber-valley-only">
      <h3 class="community-subheading"><?php the_field('ambervalley_subheading'); ?></h3>
      <div class="hidden-content">
        <?php the_field('hidden_text'); ?>
      </div><!-- .hidden-content -->
      <div class="overlay-image">
      <?php 
              $image = get_field('overlay_image');
              if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
      </div><!-- .overlay-image -->
    </div><!-- .amber-valley-only -->
  </div><!-- .community-container -->
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
