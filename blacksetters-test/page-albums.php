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
<?php if(have_posts()) : ?>
 <!-- start the loop -->
 	<?php while(have_posts()) : the_post(); ?>
    <section class="albums-section">
<h1>Albums </h1>
        <div class="communties-album">
            <div class="communites-text">
                <h2>Community Stories </h2>
                <p>Learn about the black settlers, their families, and the communities they settled in. Browse through our stories and discover something new.</p>
                <a href="http://www.blacksettlers.ca/communities/">
                <div class="go-communities">
                    Go To Communities
                    <img src="http://www.blacksettlers.ca/wp-content/uploads/2023/04/icons8-arrow-24.png" alt="arrow button">
                </div>
                </a>
            </div>
            <div class="community-image">
                <img src="http://www.blacksettlers.ca/wp-content/uploads/2023/04/unid-people-on-horses.jpeg" alt="unidentified person on a horse">
            </div>


        </div>
        <div class="gallery-section">
            <h2>Galleries</h2>
            <p>Browse through our various galleries, themed by the different activities that took place in the communities.</p>
            <div class="gallery-indivdual">
                <a href="http://www.blacksettlers.ca/albums/farming/" class="farming-1"><div class=" farming"><div class="farm"><p>Farming</p></div></div></a>
                <a href="http://www.blacksettlers.ca/albums/schools/" class="school-1"><div class="school"><div class="schools"><p>Schools</p></div></div></a>
                <a href="http://www.blacksettlers.ca/albums/church/" class="church-1"><div class="church"><div class="churches"><p>Church</p></div></div></a>
                <a href="http://www.blacksettlers.ca/albums/socializing/" class="socializing-1"><div class="socializing"><div class="social"><p>Socializing</p></div></div></a>
                <a href="http://www.blacksettlers.ca/albums/documents/" class="documents-1"><div class="documents"><div class="doc"><p>Documents</p></div></div></a>
                
            </div>
        </div>
        </div>
        

<section>
	 <?php endwhile; ?>
 <!-- end while loop -->
 		<?php else : ?>
 <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
 	<?php get_template_part('template-parts/content', 'none'); ?>

 <?php endif; ?> 


<?php get_footer(); ?>






