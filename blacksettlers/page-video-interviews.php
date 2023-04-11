<?php
/***
* The main template for displaying all of your pages (static: about, contact, etc...)
* 
*
* @package  blacksettlers
* @since 1.0.0
*/

//display header
	get_header();
?>

<h1>Video Interviews</h1>
<p>We have collected video interview from participates from communities around Alberta and Saskatchewan, here are some snippets from the interviews. If you would like to have the full version please contact us, we are willing to sell these copies to you!  </p>




<?php if(have_posts()) : ?>
 <!-- start the loop -->
 	<?php while(have_posts()) : the_post(); ?>


 <?php
 	//do things -- display content : the function below will pull the content from the template partial.
 	get_template_part( 'template-parts/content', 'about' );
 ?>
	 <?php endwhile; ?>
 <!-- end while loop -->


 
 		<?php else : ?>
 <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
 	<?php get_template_part('template-parts/content', 'none'); ?>

 <?php endif; ?> 

<?php get_footer(); ?>




 