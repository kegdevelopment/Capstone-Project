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
     <div class="gallery-images">
<a href="http://www.blacksettlers.ca/albums/documents/">
<div class="gallery-box documents">
<div class="image-box"><img src="http://www.blacksettlers.ca/wp-content/uploads/2023/04/walker-beaver-farming.jpeg" alt="Walker Beaver on tractor" /></div>
<div class="gallery-text">
<h3>Documents</h3>
</div>
</div>
</a>
<a href="">
<div class="gallery-box landscapes">
<div class="image-box"><img class="alignnone size-medium wp-image-212" src="http://www.blacksettlers.ca/wp-content/uploads/2023/04/Breton-Grain-elevators.jpg" alt="Grain Elevator" width="194" height="300" /></div>
<div class="gallery-text">
<h3>Landscapes</h3>
</div>
</div>
</a>
</div>
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





 