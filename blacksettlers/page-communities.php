<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blacksettlers
 */

get_header();
?>
<main id="primary" class="site-main">
<div class="communities-page">
<div class="communities-page-header">
<h1>Communities</h1>
<p>Black Settlers pioneered the lands that are now known as Alberta and Saskatchewan. In Alberta, many early pioneers settled in one of four rural communities: Campsie, Amber Valley, Breton, and Wildwood. Some pioneers settled in one of the three communities in Saskatchewan, while others settled in larger cities. 
</p>
<p>Click on the communities below to learn more about them and the settlers that lived there. 
</p>
</div>
<div class="communities-page-gallery">
<a href="#"><div class="campsie-community"><p>Campsie</p></div></a>
<a href="#"><div class="amber-valley-community"><p>Amber Valley</p></div></a>
<a href="#"><div class="breton-community"><p>Breton</p></div></a>
<a href="#"><div class="wildwood-community"><p>Wildwood</p></div></a>
<a href="#"><div class="saskatchewan-community"><p>Saskatchewan</p></div></a>
<a href="#"><div class="cities-community"><p>Cities</p></div></a>
</div>
</div>
</main>
<?php
get_footer();
?>