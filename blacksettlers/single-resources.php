<?php
/**
 * The template for displaying the resources page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blacksettlers
 */

get_header();
?>

<main id="primary" class="site-main">
  <div class="res-pg-container">
    <h1 class="res-title"><?php the_field('page_title'); ?></h1>
    <?php the_field('page_information'); ?>
    <div class="res-outer-container">
      <div class="res-inner-container">
        <div class="res-content">
          <?php if(get_field('resource1_name')) : ?>
            <h4 class="res-name"><?php the_field('resource1_name'); ?></h4>
          <?php endif; ?>
          <?php if(get_field('resource1_description')) : ?>
            <div class="res-desc-container">
              <div class="res-description">
                <?php the_field('resource1_description'); ?>
              </div> <!-- END .res-description -->
              <div class="res-button">
                <div class="res-link">
                  <?php $link = get_field('resource1_link');
                  if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div> <!-- END .res-link -->
              </div> <!-- END .res-button -->
            </div> <!-- END .res-desc-container -->
          <?php endif; ?>
        </div> <!-- END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource2_name')) : ?>
            <h4 class="res-name"><?php the_field('resource2_name'); ?></h4>
          <?php endif; ?>
          <?php if(get_field('resource2_description')) : ?>
            <div class="res-desc-container">
              <div class="res-description">
                <?php the_field('resource2_description'); ?>
              </div> <!-- END .res-description -->
              <div class="res-button">
                <div class="res-link">
                  <?php $link = get_field('resource2_link');
                  if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div> <!-- END .res-link -->
              </div> <!-- END .res-button -->
            </div> <!-- END .res-desc-container -->
          <?php endif; ?>
        </div> <!-- END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource3_name')) : ?>
            <h4 class="res-name"><?php the_field('resource3_name'); ?></h4>
          <?php endif; ?>
          <?php if(get_field('resource3_description')) : ?>
            <div class="res-desc-container">
              <div class="res-description">
                <?php the_field('resource3_description'); ?>
              </div> <!-- END .res-description -->
              <div class="res-button">
                <div class="res-link">
                  <?php $link = get_field('resource3_link');
                  if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div> <!-- END .res-link -->
              </div> <!-- END .res-button -->
            </div> <!-- END .res-desc-container -->
          <?php endif; ?>
        </div> <!-- END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource4_name')) : ?>
            <h4 class="res-name"><?php the_field('resource4_name'); ?></h4>
          <?php endif; ?>
          <?php if(get_field('resource4_description')) : ?>
            <div class="res-desc-container">
              <div class="res-description">
                <?php the_field('resource4_description'); ?>
              </div> <!-- END .res-description -->
              <div class="res-button">
                <div class="res-link">
                  <?php $link = get_field('resource4_link');
                  if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div> <!-- END .res-link -->
              </div> <!-- END .res-button -->
            </div> <!-- END .res-desc-container -->
          <?php endif; ?>
        </div> <!-- END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource5_name')) : ?>
            <h4 class="res-name"><?php the_field('resource5_name'); ?></h4>
          <?php endif; ?>
          <?php if(get_field('resource5_description')) : ?>
            <div class="res-desc-container">
              <div class="res-description">
                <?php the_field('resource5_description'); ?>
              </div> <!-- END .res-description -->
              <div class="res-button">
                <div class="res-link">
                  <?php $link = get_field('resource5_link');
                  if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div> <!-- END .res-link -->
              </div> <!-- END .res-button -->
            </div> <!-- END .res-desc-container -->
          <?php endif; ?>
        </div> <!-- END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource6_name')) : ?>
            <h4 class="res-name"><?php the_field('resource6_name'); ?></h4>
          <?php endif; ?>
          <?php if(get_field('resource6_description')) : ?>
            <div class="res-desc-container">
              <div class="res-description">
                <?php the_field('resource6_description'); ?>
              </div> <!-- END .res-description -->
              <div class="res-button">
                <div class="res-link">
                  <?php $link = get_field('resource6_link');
                  if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div> <!-- END .res-link -->
              </div> <!-- END .res-button -->
            </div> <!-- END .res-desc-container -->
          <?php endif; ?>
        </div> <!-- END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource7_name')) : ?>
            <h4 class="res-name"><?php the_field('resource7_name'); ?></h4>
          <?php endif; ?>
          <?php if(get_field('resource7_description')) : ?>
            <div class="res-desc-container">
              <div class="res-description">
                <?php the_field('resource7_description'); ?>
              </div> <!-- END .res-description -->
              <div class="res-button">
                <div class="res-link">
                  <?php $link = get_field('resource7_link');
                  if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div> <!-- END .res-link -->
              </div> <!-- END .res-button -->
            </div> <!-- END .res-desc-container -->
          <?php endif; ?>
        </div> <!-- END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource8_name')) : ?>
            <h4 class="res-name"><?php the_field('resource8_name'); ?></h4>
          <?php endif; ?>
          <?php if(get_field('resource8_description')) : ?>
            <div class="res-desc-container">
              <div class="res-description">
                <?php the_field('resource8_description'); ?>
              </div> <!-- END .res-description -->
              <div class="res-button">
                <div class="res-link">
                  <?php $link = get_field('resource8_link');
                  if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div> <!-- END .res-link -->
              </div> <!-- END .res-button -->
            </div> <!-- END .res-desc-container -->
          <?php endif; ?>
        </div> <!-- END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource9_name')) : ?>
            <h4 class="res-name"><?php the_field('resource9_name'); ?></h4>
          <?php endif; ?>
          <?php if(get_field('resource9_description')) : ?>
            <div class="res-desc-container">
              <div class="res-description">
                <?php the_field('resource9_description'); ?>
              </div> <!-- END .res-description -->
              <div class="res-button">
                <div class="res-link">
                  <?php $link = get_field('resource9_link');
                  if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div> <!-- END .res-link -->
              </div> <!-- END .res-button -->
            </div> <!-- END .res-desc-container -->
          <?php endif; ?>
        </div> <!-- END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource10_name')) : ?>
            <h4 class="res-name"><?php the_field('resource10_name'); ?></h4>
          <?php endif; ?>
          <?php if(get_field('resource10_description')) : ?>
            <div class="res-desc-container">
              <div class="res-description">
                <?php the_field('resource10_description'); ?>
              </div> <!-- END .res-description -->
              <div class="res-button">
                <div class="res-link">
                  <?php $link = get_field('resource10_link');
                  if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div> <!-- END .res-link -->
              </div> <!-- END .res-button -->
            </div> <!-- END .res-desc-container -->
          <?php endif; ?>
        </div> <!-- END .res-content -->
      </div> <!-- END .res-inner-container -->
      <div class="fb-feed">
        <?php echo do_shortcode('[custom-facebook-feed feed=1]'); ?>
      </div> <!-- END .fb-feed -->
    </div> <!-- END .res-outer-container -->
  </div> <!-- END .res-pg-container -->
</main>
<?php get_footer(); ?>