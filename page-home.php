<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

/* Template Name: Homepage */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- JUMBOTRON -->
			<div class="jumbotron">
				<div class="container">
					<div id="popUp">
						<h2 class="findSpots">Find Your Spot</h2>
						<form>
							<span class="searchbox">
								<input type="text" class="search rounded" name="search" placeholder="i.e. 'Ledges', 'Point Loma', 'Marble', etc...">
								<input id="searchbutton" type="button" value="Go!">
							</span>
						</form>
					</div>
				</div>
			</div>

			<!-- Browse Links/Images -->
			<div id="homegrid" class="container">
				<!-- Thumbnail grid using thumbnail class -->
				<div class="row">
	  				<div id="grid-col" class="col-sm-4 col-md-4">
	  					<a class="grid-link" href="#">Browse Spot Types</a>
	   					<a href="#">
	      					<img class="center-block" id="blueBox" src="../wp-content/themes/_s-master/images/spotType.png" alt="Browse Spot Types" >
	      				</a>
	      			</div>
	  				<div id="grid-col" class="col-sm-4 col-md-4">
	  					<a class="grid-link" href="#">Browse Neighborhoods</a>
	      				<a href="#">
	      					<img class="center-block" id="blueBox" src="../wp-content/themes/_s-master/images/neighborhoods2.png" alt="Browse Neighborhoods">
	      				</a>
	      			</div>
	      			<div id="grid-col" class="col-sm-4 col-md-4">
	      				<a class="grid-link" href="#">Browse Skateparks</a>
	      				<a href="#">
	      					<img class="center-block" id="blueBox" src="../wp-content/themes/_s-master/images/skateparks.png" alt="Browse Skateparks">
	      				</a>
	      			</div>
	      		</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
