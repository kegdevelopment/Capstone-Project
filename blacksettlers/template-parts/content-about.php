<?php 
/**
*partial template for the about.php template
*
*@packag blacksettlers

* @since 1.0.0
*/

 ?>

 <!-- displays the page/post ID of the page -->
 	<article <?php post_class();?> id="post-<?php the_ID();?>" >

 <!-- entry header -->




 	<div class="entry-content">
 	 <!-- if you had an image it will display using WPs largest default
thumbnail sizing (settings in the admin - you can see the sizes) -->
<?php the_content(); ?>
		
 <!-- display page or post content -->
 	
 <!-- other things you could put in here would be: pagination
(more used for blog posts), custom posts, anything you need for site. -->

 	</div>

 </article>
