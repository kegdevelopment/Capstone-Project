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
      <div class="res-container">
        <div class="res-content">
          <h4 class="res-name"><?php the_field('resource1_name'); ?></h4>
          <div class="res-description">
            <?php the_field('resource1_description'); ?>
          </div>
        </div> <!--  END .res-content -->
        <div class="res-button">
          <div class="res-link">
          <?php 
          $link = get_field('resource1_link');
          if( $link ): ?>
              <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
          <?php endif; ?>
          </div>
        </div> <!--  END .res-button -->
        <div class="res-content">
          <h4 class="res-name"><?php the_field('resource2_name'); ?></h4>
          <div class="res-description">
            <?php the_field('resource2_description'); ?>
          </div>
        </div> <!--  END .res-content -->
        <div class="res-button">
          <div class="res-link">
          <?php 
          $link = get_field('resource2_link');
          if( $link ): ?>
              <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
          <?php endif; ?>
          </div>
        </div> <!--  END .res-button -->
        <div class="res-content">
          <h4 class="res-name"><?php the_field('resource3_name'); ?></h4>
          <div class="res-description">
            <?php the_field('resource3_description'); ?>
          </div>
        </div> <!--  END .res-content -->
        <div class="res-button">
          <div class="res-link">
          <?php 
          $link = get_field('resource3_link');
          if( $link ): ?>
              <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
          <?php endif; ?>
          </div>
        </div> <!--  END .res-button -->
        <div class="res-content">
          <h4 class="res-name"><?php the_field('resource4_name'); ?></h4>
          <div class="res-description">
            <?php the_field('resource4_description'); ?>
          </div>
        </div> <!--  END .res-content -->
        <div class="res-button">
          <div class="res-link">
          <?php 
          $link = get_field('resource4_link');
          if( $link ): ?>
              <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
          <?php endif; ?>
          </div>
        </div> <!--  END .res-button -->
        <div class="res-content">
          <h4 class="res-name"><?php the_field('resource5_name'); ?></h4>
          <div class="res-description">
            <?php the_field('resource5_description'); ?>
          </div>
        </div> <!--  END .res-content -->
        <div class="res-button">
          <div class="res-link">
          <?php 
          $link = get_field('resource5_link');
          if( $link ): ?>
              <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
          <?php endif; ?>
          </div>
        </div> <!--  END .res-button -->
        <div class="res-content">
          <h4 class="res-name"><?php the_field('resource6_name'); ?></h4>
          <div class="res-description">
            <?php the_field('resource6_description'); ?>
          </div>
        </div> <!--  END .res-content -->
        <div class="res-button">
          <div class="res-link">
          <?php 
          $link = get_field('resource6_link');
          if( $link ): ?>
              <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
          <?php endif; ?>
          </div>
        </div> <!--  END .res-button -->
        <div class="res-content">
          <h4 class="res-name"><?php the_field('resource7_name'); ?></h4>
          <div class="res-description">
            <?php the_field('resource7_description'); ?>
          </div>
        </div> <!--  END .res-content -->
        <div class="res-button">
          <div class="res-link">
          <?php 
          $link = get_field('resource7_link');
          if( $link ): ?>
              <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
          <?php endif; ?>
          </div>
        </div> <!--  END .res-button -->
        <div class="res-content">
          <h4 class="res-name"><?php the_field('resource8_name'); ?></h4>
          <div class="res-description">
            <?php the_field('resource8_description'); ?>
          </div>
        </div> <!--  END .res-content -->
        <div class="res-button">
          <div class="res-link">
          <?php 
          $link = get_field('resource8_link');
          if( $link ): ?>
              <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
          <?php endif; ?>
          </div>
        </div> <!--  END .res-button -->
        <div class="res-content">
          <h4 class="res-name"><?php the_field('resource9_name'); ?></h4>
          <div class="res-description">
            <?php the_field('resource9_description'); ?>
          </div>
        </div> <!--  END .res-content -->
        <div class="res-button">
          <div class="res-link">
          <?php 
          $link = get_field('resource9_link');
          if( $link ): ?>
              <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
          <?php endif; ?>
          </div>
        </div> <!--  END .res-button -->
        <div class="res-content">
          <h4 class="res-name"><?php the_field('resource10_name'); ?></h4>
          <div class="res-description">
            <?php the_field('resource10_description'); ?>
          </div>
        </div> <!--  END .res-content -->
        <div class="res-button">
          <div class="res-link">
          <?php 
          $link = get_field('resource10_link');
          if( $link ): ?>
              <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
          <?php endif; ?>
          </div>
        </div> <!--  END .res-button -->
      </div> <!--  END .res-container -->
    </div><!--  END .res-pg-container -->
  </main>
<?php get_footer(); ?>