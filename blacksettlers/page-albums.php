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
<section>
<h1>Albums </h1>
        <div class="communties-album">
            <div class="communites-text">
                <h2>Community Stories </h2>
                <p>Learn about the black settlers, their families, and the communities they settled in. Browse through our stories and discover something new.</p>
                <button><a href="https://blacksettlersb.web.dmitcapstone.ca/communities/">Got To Communities</a></button>
            </div>
            <div class="community-image">
                <img src="https://blacksettlersb.web.dmitcapstone.ca/wp-content/uploads/2023/04/unid-people-on-horses.jpeg" alt="unidentified person on a horse">
            </div>


        </div>
        

<section>

<?php if(have_posts()) : ?>
 <!-- start the loop -->
 	<?php while(have_posts()) : the_post(); ?>
 <?php
 	//do things -- display content : the function below will pull the content from the template partial.
 	get_template_part( 'template-parts/content', 'gallery' );
 ?>
	 <?php endwhile; ?>
 <!-- end while loop -->
 		<?php else : ?>
 <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
 	<?php get_template_part('template-parts/content', 'none'); ?>

 <?php endif; ?> 


<?php get_footer(); ?>







 