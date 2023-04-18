<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blacksettlers
 */
get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->

	<?php blacksettlers_post_thumbnail(); ?>

	<h1 class="home-title">Black Settlers of Alberta and Saskatchewan Historical Society</h1>
	<div class="intro-header">		
		<div class="intro-dream">
			<div class="intro-dream-para-1">
				<p>Archiving and documenting material to educate, promote, and officially recognize the historic role Black Settlers played in pioneering the lands that are now known as Alberta and Saskatchewan.</p>
			</div>
			<div class="intro-dream-para-2">
				<h2>We Have a Dream</h2>
				<p>A tribute to the Black Settlers that Pioneered the lands that would become Alberta and Saskatchewan</p>
				<p>Ackers, Allen, Alexander, Anderson, Bailey, Banner, Barzie, Beaver, Beely, Bell, Bluet, Boone,
					Bowden, Bowen, Boyd, Bradshaw, Brisco, Broadie, Brooks, Brown, Burton, Butler, Byars, Chaney,
					Carothers, Clemans, Cobbs, Coleman, Colton, Cooper, Cotton, Cowan Crawford, Croslin, Cross,
					Davis, Day, Edwards, Estes, Farrel, Fears, Ford, Flyndy, Gaston, Geary, Gerrard, Gordon, Grant,
					Green, Griffith, Hamilton, Hardin, Harding, Harper, Hayes, Henderson, Heslep, Hicks, Hinds,
					Holmes, Hooks, Hope, Houston, Howard, Hunt, Jackson, Jameson, Jamerson, Jefferies, Jefferson,
					Johnson, Johnston, Jones, Kinamore, King, Kirk, Lafayette, Lane, Lee, Leffler, Lewis, Lindsey,
					Lipscombe, Lowe, Mack, Mapp, Martin, Matthews, Mayes, Maclntrye, Medlock, Melton, Miller,
					Moore, Moorehead, Munson, Murphy, Nelson, Oliver, Pankey, Pauley, Payne, Procter, Proctor,
					Risby,Roberts, Robinson, Ross, Sander, Saunders, Sayles, Shaw, Slater, Slaughter, Smith, Sneed,
					Strickland, Taylor, Thomas, Tole, Tucker, Turner, Tyler, Utendale, Walker, Watts, West, Whittaker,
					Williams, Woods, Wright, Yarborough</p>

			</div>
			<a href="https://blacksettlersb.web.dmitcapstone.ca/communities/">Read our Stories</a>
		</div>
	
		<div class="intro-img">
		<img src="https://blacksettlersb.web.dmitcapstone.ca/wp-content/uploads/2023/03/ab-map.png" alt="map">
		</div>
	</div>
	<div class="intro-video">
		<div class="inner-video">
		<div class="video">
        <iframe width="424" height="238" src="https://www.youtube.com/embed/pp_wNuyzPC4" title="BSAS Channel Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</div>
		<div class="video-description">
			<h2>Sharing our History</h2>
			<p>The Black settlers of Alberta and Saskatchewan historical society wishes to pay tribute to all black settlers who came before us by preserving their stories, and ultimately their struggles and successes with all Canadians, thereby firmly establishing their place in Canadian history.</p>
			
			<a href="https://blacksettlersb.web.dmitcapstone.ca/video-interviews/">More Video Interviews</a>

		</div>
		</div>
	</div>
	<div class="what-we-do">
		<h2>What We Do</h2>
		<p>The Black Settlers of Alberta and Saskatchewan Historical Society (BSAS) research, compile, coordinate and centralize the history of Black Settlers in Alberta and Saskatchewan over the last century. All early Black Settlers and pioneers are dead and buried now… buried with them are their wonderful stories and rich histories.</p>

		<p>BSAS wishes to pay tribute to all the Black Settlers who came before us by preserving their stories, and ultimately sharing their struggles and successes with all Canadians, thereby firmly establishing their place in Canadian History.
		</p>
		<a href="https://blacksettlersb.web.dmitcapstone.ca/about/">Learn More</a>
	</div>
	<div class="contact">
		<div class="inner-contact">
		<div class="contact-left">
			<h3>Do you have a history in Alberta or Saskatchewan?</h3>
			<p>Help to preserve our history by participating. Share your stories or images with us.</p>
		</div>
		<div class="contact-right">
		<a href="https://blacksettlersb.web.dmitcapstone.ca/contact-us/">Get in Touch</a>
		</div>
		</div>
	</div>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

<?php

get_footer();?>