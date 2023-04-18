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
    <div class="res-inner-pg-container">
    <div class="res-pg-container">
<<<<<<< Updated upstream
      <h1 class="res-title"><?php the_field('page_title'); ?></h1>
      <div class="res-container">
        <div class="res-content">
          <?php if(get_field('resource1_name')) : ?>
            <h4 class="res-name"><?php the_field('resource1_name'); ?></h4>
          <?php endif; ?>
            <?php if(get_field('resource1_description')) : ?>
            <div class="res-inner-container">
              <div class="res-description">
                <?php the_field('resource1_description'); ?>
              </div> <!-- END .res-description -->
              <?php endif; ?>
              <div class="res-button">
                <div class="res-link">
                <?php 
                $link = get_field('resource1_link');
                if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                <?php endif; ?>
                </div>
              </div> <!--  END .res-button -->
            </div> <!-- END .inner-container -->
        </div> <!--  END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource2_name')) : ?>
            <h4 class="res-name"><?php the_field('resource2_name'); ?></h4>
          <?php endif; ?>
            <?php if(get_field('resource2_description')) : ?>
            <div class="res-inner-container">
              <div class="res-description">
                <?php the_field('resource2_description'); ?>
              </div> <!-- END .res-description -->
              <?php endif; ?>
              <div class="res-button">
                <div class="res-link">
                <?php 
                $link = get_field('resource2_link');
                if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                <?php endif; ?>
                </div>
              </div> <!--  END .res-button -->
            </div> <!-- END .inner-container -->
        </div> <!--  END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource3_name')) : ?>
            <h4 class="res-name"><?php the_field('resource3_name'); ?></h4>
          <?php endif; ?>
            <?php if(get_field('resource3_description')) : ?>
            <div class="res-inner-container">
              <div class="res-description">
                <?php the_field('resource3_description'); ?>
              </div> <!-- END .res-description -->
              <?php endif; ?>
              <div class="res-button">
                <div class="res-link">
                <?php 
                $link = get_field('resource3_link');
                if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                <?php endif; ?>
                </div>
              </div> <!--  END .res-button -->
            </div> <!-- END .inner-container -->
        </div> <!--  END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource4_name')) : ?>
            <h4 class="res-name"><?php the_field('resource4_name'); ?></h4>
          <?php endif; ?>
            <?php if(get_field('resource4_description')) : ?>
            <div class="res-inner-container">
              <div class="res-description">
                <?php the_field('resource4_description'); ?>
              </div> <!-- END .res-description -->
              <?php endif; ?>
              <div class="res-button">
                <div class="res-link">
                <?php 
                $link = get_field('resource4_link');
                if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                <?php endif; ?>
                </div>
              </div> <!--  END .res-button -->
            </div> <!-- END .inner-container -->
        </div> <!--  END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource5_name')) : ?>
            <h4 class="res-name"><?php the_field('resource5_name'); ?></h4>
          <?php endif; ?>
            <?php if(get_field('resource5_description')) : ?>
            <div class="res-inner-container">
              <div class="res-description">
                <?php the_field('resource5_description'); ?>
              </div> <!-- END .res-description -->
              <?php endif; ?>
              <div class="res-button">
                <div class="res-link">
                <?php 
                $link = get_field('resource5_link');
                if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                <?php endif; ?>
                </div>
              </div> <!--  END .res-button -->
            </div> <!-- END .inner-container -->
        </div> <!--  END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource6_name')) : ?>
            <h4 class="res-name"><?php the_field('resource6_name'); ?></h4>
          <?php endif; ?>
            <?php if(get_field('resource6_description')) : ?>
            <div class="res-inner-container">
              <div class="res-description">
                <?php the_field('resource6_description'); ?>
              </div> <!-- END .res-description -->
              <?php endif; ?>
              <div class="res-button">
                <div class="res-link">
                <?php 
                $link = get_field('resource6_link');
                if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                <?php endif; ?>
                </div>
              </div> <!--  END .res-button -->
            </div> <!-- END .inner-container -->
        </div> <!--  END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource7_name')) : ?>
            <h4 class="res-name"><?php the_field('resource7_name'); ?></h4>
          <?php endif; ?>
            <?php if(get_field('resource7_description')) : ?>
            <div class="res-inner-container">
              <div class="res-description">
                <?php the_field('resource7_description'); ?>
              </div> <!-- END .res-description -->
              <?php endif; ?>
              <div class="res-button">
                <div class="res-link">
                <?php 
                $link = get_field('resource7_link');
                if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                <?php endif; ?>
                </div>
              </div> <!--  END .res-button -->
            </div> <!-- END .inner-container -->
        </div> <!--  END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource8_name')) : ?>
            <h4 class="res-name"><?php the_field('resource8_name'); ?></h4>
          <?php endif; ?>
            <?php if(get_field('resource8_description')) : ?>
            <div class="res-inner-container">
              <div class="res-description">
                <?php the_field('resource8_description'); ?>
              </div> <!-- END .res-description -->
              <?php endif; ?>
              <div class="res-button">
                <div class="res-link">
                <?php 
                $link = get_field('resource8_link');
                if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                <?php endif; ?>
                </div>
              </div> <!--  END .res-button -->
            </div> <!-- END .inner-container -->
        </div> <!--  END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource9_name')) : ?>
            <h4 class="res-name"><?php the_field('resource9_name'); ?></h4>
          <?php endif; ?>
            <?php if(get_field('resource9_description')) : ?>
            <div class="res-inner-container">
              <div class="res-description">
                <?php the_field('resource9_description'); ?>
              </div> <!-- END .res-description -->
              <?php endif; ?>
              <div class="res-button">
                <div class="res-link">
                <?php 
                $link = get_field('resource9_link');
                if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                <?php endif; ?>
                </div>
              </div> <!--  END .res-button -->
            </div> <!-- END .inner-container -->
        </div> <!--  END .res-content -->
        <div class="res-content">
          <?php if(get_field('resource10_name')) : ?>
            <h4 class="res-name"><?php the_field('resource10_name'); ?></h4>
          <?php endif; ?>
            <?php if(get_field('resource10_description')) : ?>
            <div class="res-inner-container">
              <div class="res-description">
                <?php the_field('resource10_description'); ?>
              </div> <!-- END .res-description -->
              <?php endif; ?>
              <div class="res-button">
                <div class="res-link">
                <?php 
                $link = get_field('resource10_link');
                if( $link ): ?>
                    <a class="button" target="_blank" href="<?php echo esc_url( $link ); ?>">View More</a>
                <?php endif; ?>
                </div>
              </div> <!--  END .res-button -->
            </div> <!-- END .inner-container -->
        </div> <!--  END .res-content -->
      </div> <!--  END .res-container -->
=======
        <h1 class="res-title"><?php the_field('page_title'); ?></h1>
        <p>Here are some information and resources with more information related to black settlers in Alberta and Saskatchewan
        </p>
        <div class="flex-sidebar-container">
          <div class="res-outer-container">
            <div class="res-container">
              
              <div class="res-content">
                <h4 class="res-name"><?php the_field('resource1_name'); ?></h4>
                <div class="res-inner-container">
                  <div class="res-description">
                    <?php the_field('resource1_description'); ?>
                  </div>
              
                <div class="res-button">
                <div class="res-link">
                  <?php 
                  $link = get_field('resource1_link');
                  if( $link ): ?>
                      <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div>
                </div> <!--  END .res-button -->
                </div>
              </div>
              <div class="res-content">
                <h4 class="res-name"><?php the_field('resource1_name'); ?></h4>
                <div class="res-inner-container">
                  <div class="res-description">
                    <?php the_field('resource1_description'); ?>
                  </div>
              
                <div class="res-button">
                <div class="res-link">
                  <?php 
                  $link = get_field('resource1_link');
                  if( $link ): ?>
                      <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div>
                </div> <!--  END .res-button -->
                </div>
              </div>
              <div class="res-content">
                <h4 class="res-name"><?php the_field('resource2_name'); ?></h4>
                <div class="res-inner-container">
                  <div class="res-description">
                    <?php the_field('resource2_description'); ?>
                  </div>
              
                <div class="res-button">
                <div class="res-link">
                  <?php 
                  $link = get_field('resource2_link');
                  if( $link ): ?>
                      <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div>
                </div> <!--  END .res-button -->
                </div>
              </div>
              <div class="res-content">
                <h4 class="res-name"><?php the_field('resource3_name'); ?></h4>
                <div class="res-inner-container">
                  <div class="res-description">
                    <?php the_field('resource3_description'); ?>
                  </div>
              
                <div class="res-button">
                <div class="res-link">
                  <?php 
                  $link = get_field('resource3_link');
                  if( $link ): ?>
                      <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div>
                </div> <!--  END .res-button -->
                </div>
              </div>
              <div class="res-content">
                <h4 class="res-name"><?php the_field('resource4_name'); ?></h4>
                <div class="res-inner-container">
                  <div class="res-description">
                    <?php the_field('resource4_description'); ?>
                  </div>
              
                <div class="res-button">
                <div class="res-link">
                  <?php 
                  $link = get_field('resource4_link');
                  if( $link ): ?>
                      <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div>
                </div> <!--  END .res-button -->
                </div>
              </div>
              <div class="res-content">
                <h4 class="res-name"><?php the_field('resource5_name'); ?></h4>
                <div class="res-inner-container">
                  <div class="res-description">
                    <?php the_field('resource5_description'); ?>
                  </div>
              
                <div class="res-button">
                <div class="res-link">
                  <?php 
                  $link = get_field('resource5_link');
                  if( $link ): ?>
                      <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div>
                </div> <!--  END .res-button -->
                </div>
              </div>
              <div class="res-content">
                <h4 class="res-name"><?php the_field('resource6_name'); ?></h4>
                <div class="res-inner-container">
                  <div class="res-description">
                    <?php the_field('resource6_description'); ?>
                  </div>
              
                <div class="res-button">
                <div class="res-link">
                  <?php 
                  $link = get_field('resource6_link');
                  if( $link ): ?>
                      <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div>
                </div> <!--  END .res-button -->
                </div>
              </div>
              <div class="res-content">
                <h4 class="res-name"><?php the_field('resource7_name'); ?></h4>
                <div class="res-inner-container">
                  <div class="res-description">
                    <?php the_field('resource7_description'); ?>
                  </div>
              
                <div class="res-button">
                <div class="res-link">
                  <?php 
                  $link = get_field('resource7_link');
                  if( $link ): ?>
                      <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div>
                </div> <!--  END .res-button -->
                </div>
              </div>
              <div class="res-content">
                <h4 class="res-name"><?php the_field('resource8_name'); ?></h4>
                <div class="res-inner-container">
                  <div class="res-description">
                    <?php the_field('resource8_description'); ?>
                  </div>
              
                <div class="res-button">
                <div class="res-link">
                  <?php 
                  $link = get_field('resource8_link');
                  if( $link ): ?>
                      <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div>
                </div> <!--  END .res-button -->
                </div>
              </div>
              <div class="res-content">
                <h4 class="res-name"><?php the_field('resource9_name'); ?></h4>
                <div class="res-inner-container">
                  <div class="res-description">
                    <?php the_field('resource9_description'); ?>
                  </div>
              
                <div class="res-button">
                <div class="res-link">
                  <?php 
                  $link = get_field('resource9_link');
                  if( $link ): ?>
                      <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div>
                </div> <!--  END .res-button -->
                </div>
              </div> <!--  END .res-content -->
              <div class="res-content">
                <h4 class="res-name"><?php the_field('resource10_name'); ?></h4>
                <div class="res-inner-container">
                  <div class="res-description">
                    <?php the_field('resource10_description'); ?>
                  </div>
              
                <div class="res-button">
                <div class="res-link">
                  <?php 
                  $link = get_field('resource10_link');
                  if( $link ): ?>
                      <a class="button" href="<?php echo esc_url( $link ); ?>">View More</a>
                  <?php endif; ?>
                </div>
                </div> <!--  END .res-button -->
                </div>
              </div>
            </div> <!--  END .res-container -->
            <div class="sidebar-container">
                    <?php get_sidebar();?>
            </div>
        </div>
>>>>>>> Stashed changes
    </div><!--  END .res-pg-container -->
    </div>
  </main>
<?php get_footer(); ?>