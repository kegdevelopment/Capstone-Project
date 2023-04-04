<?php
/***
* The main template for displaying all of your pages (static: about, contact, etc...)
* 
*
* @package  demos
* @since 1.0.0
*/

//display header
	get_header();
?>

<?php if(have_posts()) : ?>
 <!-- start the loop -->
 	<?php while(have_posts()) : the_post(); ?>
 <?php
 	//do things -- display content : the function below will pull the content from the template partial.
 	get_template_part( 'template-parts/content', 'page' );
 ?>
	 <?php endwhile; ?>
 <!-- end while loop -->
 		<?php else : ?>
 <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
 	<?php get_template_part('template-parts/content', 'none'); ?>

 <?php endif; ?> 


<?php get_footer(); ?>





 