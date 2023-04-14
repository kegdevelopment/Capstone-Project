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
            <div class="section-text-right">
              <div class="p-container">
                <?php the_field('section1_content'); ?>
              </div>
            </div>
        </div> <!-- first-main-section .section-content -->

        <div class="first-main-section sub-section">
          <?php if( get_field('sub_subheading') ): ?>
            <h4 class="subsection-heading"><?php the_field('sub_subheading'); ?></h4>
          <?php endif; ?>
          <div class="first-main-section subsection-content">
            <div class="section-text-left">
              <div class="p-container">
                <?php the_field('sub_content'); ?>
              </div>
            </div>
            <div class="image-content">
              <?php 
              $image = get_field('section1_image2');
              if( !empty( $image ) ): ?>
                <img class="second-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <p class="caption"><?php echo $image['caption']; ?></p>
              <?php endif; ?>
            </div><!-- .image-content -->
          </div><!-- .subsection-content -->
        </div><!-- .sub-section -->
        <div class="first-main-section sub-section2">
          <?php if( get_field('sub2_subheading') ): ?>
            <h4 class="subsection-heading"><?php the_field('sub2_subheading'); ?></h4>
          <?php endif; ?>
          <div class="first-main-section subsection-content">
            <div class="image-content">
              <?php 
              $image = get_field('sub2_image2');
              if( !empty( $image ) ): ?>
                <img class="second-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <p class="caption"><?php echo $image['caption']; ?></p>
              <?php endif; ?>
            </div><!-- .image-content -->
            <div class="section-text-right">
              <div class="p-container">
                <?php the_field('sub2_content'); ?>
              </div>
            </div><!-- .section-text -->
          </div><!-- .subsection-content -->
        </div><!-- .sub-section2 -->
      </div><!-- .first-main-section -->
      <div class="second-main-section">
      <?php if( get_field('section2_subheading') ): ?>
        <h3 class="community-subheading"><?php the_field('section2_subheading'); ?></h3>
      <?php endif; ?>
        <div class="second-main-section section-content">
          <div class="section-text-left">
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
      <div class="poem-container">
        <?php 
          $image = get_field('overlay_image');
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="overlay">
          <div class="hidden-text">
            <?php the_field('hidden_text'); ?>
          </div>
        </div><!-- .overlay -->
      </div><!-- .poem-container -->
    </div><!-- .amber-valley-only -->
  </div><!-- .community-container -->
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
