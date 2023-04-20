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
    <div class="video-big-container"> 
    <h1>Video Interviews</h1>
    <p>We have collected video interview from participates from communities around Alberta and Saskatchewan, here are some snippets from the interviews. If you would like to have the full version please contact us, we are willing to sell these copies to you!</p>
    <div class="wide-container">
        <div class="video-container">
            <div class="vids">
            <?php the_field('video_link'); ?>
            </div>
        <div class="video-text">
        <h2><?php the_field('title'); ?></h2>
        <h3><?php the_field('subject'); ?></h3>

        </div>
        </div><!-- video container -->
        <div class="video-container">
            <div class="vids">
            <?php the_field('video_link_2'); ?>
            </div>
        <div class="video-text">
        <h2><?php the_field('title_2'); ?></h2>
        <h3><?php the_field('subject_2'); ?></h3>

        </div>
        </div><!-- video container -->
        <div class="video-container">
            <div class="vids">
            <?php the_field('video_link_3'); ?>
            </div>
        <div class="video-text">
        <h2><?php the_field('title_3'); ?></h2>
        <h3><?php the_field('subject_3'); ?></h3>

        </div>
        </div><!-- video container -->
        <div class="video-container">
            <div class="vids">
            <?php the_field('video_link_4'); ?>
            </div>
        <div class="video-text">
        <h2><?php the_field('title_4'); ?></h2>
        <h3><?php the_field('subject_4'); ?></h3>

        </div>
        </div><!-- video container -->
        <div class="video-container">
            <div class="vids">
            <?php the_field('video_link_5'); ?>
            </div>
        <div class="video-text">
        <h2><?php the_field('title_5'); ?></h2>
        <h3><?php the_field('subject_5'); ?></h3>

        </div>
        </div><!-- video container -->
        <div class="video-container">
            <div class="vids">
            <?php the_field('video_link_6'); ?>
            </div>
        <div class="video-text">
        <h2><?php the_field('title_6'); ?></h2>
        <h3><?php the_field('subject_6'); ?></h3>

        </div>
        </div><!-- video container -->
        <div class="video-container">
            <div class="vids">
            <?php the_field('video_link_7'); ?>
            </div>
        <div class="video-text">
        <h2><?php the_field('title_7'); ?></h2>
        <h3><?php the_field('subject_7'); ?></h3>

        </div>
        </div><!-- video container -->
        <div class="video-container">
            <div class="vids">
            <?php the_field('video_link_8'); ?>
            </div>
        <div class="video-text">
        <h2><?php the_field('title_8'); ?></h2>
        <h3><?php the_field('subject_8'); ?></h3>

        </div>
        </div><!-- video container -->
        <div class="video-container">
            <div class="vids">
            <?php the_field('video_link_9'); ?>
            </div>
        <div class="video-text">
        <h2><?php the_field('title_9'); ?></h2>
        <h3><?php the_field('subject_9'); ?></h3>

        </div>
        </div><!-- video container -->
        <div class="video-container">
            <div class="vids">
            <?php the_field('video_link_10'); ?>
            </div>
        <div class="video-text">
        <h2><?php the_field('title_10'); ?></h2>
        <h3><?php the_field('subject_10'); ?></h3>

        </div>
        </div><!-- video container -->
       
        <div class="video-container"> 
            <?php if( get_field('video_link_11')) : ?>
            <div class="vids">
                
            <?php the_field('video_link_11'); ?>
            </div>
            <?php endif; ?>
        <div class="video-text">
        <h2><?php the_field('title_11'); ?></h2>
        <h3><?php the_field('subject_11'); ?></h3>

        </div>
        </div><!-- video container -->
        <div class="video-container">
            <div class="vids">
            <?php the_field('video_link_12'); ?>
            </div>
        <div class="video-text">
        <h2><?php the_field('title_12'); ?></h2>
        <h3><?php the_field('subject_12'); ?></h3>

        </div>
        </div><!-- video container -->


    </div><!-- wide container -->
</div><!-- big video container -->


<?php

get_footer();