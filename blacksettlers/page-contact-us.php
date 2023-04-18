<?php 
/**
*
*Template for all of your individual blog post 

* @package delicious noms
*  @since 1.0.0
*/

get_header();

 ?>
 <div class="contact-container">
		<h1>Contact Us</h1>
<p>We are continuing to seek out good stories and planning to do more oral history interviews in the future. Help to preserve our history by participating and encouraging others to participate.</p>
		

<div class="large-container">

		<div id="content" class=”site-content” >
	<?php if(have_posts()) : ?>
 		<!-- start the loop -->
 		<?php while(have_posts()) : the_post(); ?>



	
		 <?php echo apply_shortcodes( '[contact-form-7 id="763" title="Contact Us"]' ); ?>



 	<?php endwhile; ?>
 	<!-- end while loop -->
 		<?php else : ?>
 <!-- send to search page / some other general page with search
function, tags, categories, archives,etc.. -->
 		<?php get_template_part('template-parts/page', 'none'); ?>
 <?php endif; ?>

		 </div>
		 

 </div>
 

</div>






 <?php get_footer(); ?>