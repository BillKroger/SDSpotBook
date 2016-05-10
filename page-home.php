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
						<h2 class="findSpots">Find your spot</h2>
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
			<!-- <div id="homegrid" class="container"> -->
				<!-- Thumbnail grid using thumbnail class -->
			<!--	<div class="row">
	  				<div id="grid-col" class="col-sm-4 col-md-4">
	  					<a class="grid-link" href="#">Spot Types</a>
	   					<a href="#">
	      					<img class="center-block" id="blueBox" src="../wp-content/themes/_s-master/images/spotType.png" alt="Browse Spot Types" >
	      				</a>
	      			</div>
	  				<div id="grid-col" class="col-sm-4 col-md-4">
	  					<a class="grid-link" href="#">Neighborhoods</a>
	      				<a href="#">
	      					<img class="center-block" id="blueBox" src="../wp-content/themes/_s-master/images/neighborhoods2.png" alt="Browse Neighborhoods">
	      				</a>
	      			</div>
	      			<div id="grid-col" class="col-sm-4 col-md-4">
	      				<a class="grid-link" href="#">Skateparks</a>
	      				<a href="#">
	      					<img class="center-block" id="blueBox" src="../wp-content/themes/_s-master/images/skateparks.png" alt="Browse Skateparks">
	      				</a>
	      			</div>
	      		</div>
			</div> -->
			<div class="tabbed-nav">

			<!-- Responsive Tab Nav -->
			<input id="tab1" type="radio" name="tabs" checked>
		  	<label for="tab1">Spots
		  		<div class="arrow-down"></div>
		  	</label>
			<input id="tab2" type="radio" name="tabs">
			<label>
				<div class="tabbed-nav-dropdown">
					<li class="dropdown">
						<a id="tabbed-navbar-item" class="navbarItems" href="#" class="dropdown-toggle" data-toggle = "dropdown">Types<b class="caret"></b></a>
						
						<ul id="tab-filters-wrap" class="dropdown-menu">
							<li>
								<ul class="tab-filters">
									<li><a href="#">Bumps</a></li>
									<li><a href="#">Flatbars</a></li>
									<li><a href="#">Gaps</a></li>
									<li><a href="#">Handrails</a></li>
									<li><a href="#">Hubbas</a></li>
									<li><a href="#">Ledges</a></li>
									<li><a href="#">Manual Pads</a></li>
									<li><a href="#">Stairs</a></li>
									<li><a href="#">Transition</a></li>
									<li><a href="#">Wallies/Wallrides</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</div>

			</label>

			

			<input id="tab3" type="radio" name="tabs">
			<label>
				<div class="tabbed-nav-dropdown">
					<li class="dropdown">
						<a id="tabbed-navbar-item" class="navbarItems" href="#" class="dropdown-toggle" data-toggle="dropdown">Neighborhoods<b class="caret"></b></a>
						
						<ul id="tab-filters-wrap" class="dropdown-menu">
							<li>
								<ul class="tab-filters">
									<li><a href="#">Bankers Hill</a></li>
									<li><a href="#">Barrio Logan</a></li>
									<li><a href="#">Bay Park</a></li>
									<li><a href="#">Clairemont</a></li>
									<li><a href="#">Downtown</a></li>
									<li><a href="#">Hillcrest</a></li>
									<li><a href="#">Imperial Beach</a></li>
									<li><a href="#">La Jolla/UTC</a></li>
									<li><a href="#">Little Italy</a></li>
									<li><a href="#">Mid City</a></li>
									<li><a href="#">Mission Valley</a></li>
									<li><a href="#">Normal Heights</a></li>
									<li><a href="#">North Park</a></li>
									<li><a href="#">Paradise Hills</a></li>
									<li><a href="#">Point Loma</a></li>
									<li><a href="#">Rancho PQ</a></li>
									<li><a href="#">Scripps Ranch</a></li>
									<li><a href="#">South Park</a></li>
								</ul>
							</li>		              	
						</ul>
					</li>
				</div>
			</label>

			<input id="tab4" type="radio" name="tabs">
			<label>
				<div class="tabbed-nav-dropdown">
					<li class="dropdown">
						<a id="tabbed-navbar-item" class="navbarItems" href="#" class="dropdown-toggle" data-toggle="dropdown">Skateparks<b class="caret"></b></a>
						
						<ul id="tab-filters-wrap" class="dropdown-menu pull-right">
							<li>
								<ul class="tab-filters">
									<li><a href="#">Carmel Valley</a></li>
									<li><a href="#">Chicano Park</a></li>
									<li><a href="#">Damato Park</a></li>
									<li><a href="#">Imperial Beach</a></li>
									<li><a href="#">Memorial</a></li>
									<li><a href="#">Paradise Hills</a></li>
									<li><a href="#">Tierrasanta</a></li>
									<li><a href="#">Washington St.</a></li>
								</ul>
							</li>			              	
						</ul>
					</li>
				</div>
			</label>

			<!-- Latest Spots-->
			<section id="content1">

			<!-- Custom grid displays latest spots -->
			<div class="spot-post-grid">
				<!-- The loop -->
				<?php
				$temp = $wp_query; $wp_query= null;
				$wp_query = new WP_Query(); $wp_query->query('showposts=1000' . '&paged='.$paged);
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

				<!-- Single Grid Item -->
				<div class="griditem">
					<div class="grid-content">
						<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>
					</div>
					<div class="grid-text">
						<h3><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h3>
						<p><?php echo get_post_meta($post->ID, 'spot_location', true); ?></p>
					</div>
				</div>
				<?php endwhile; ?>

				<!-- Pagination -->
				<?php if ($paged > 1) { ?>
				<nav id="nav-posts">
					<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
					<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
				</nav>
				<?php } else { ?>
				<nav id="nav-posts">
					<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
				</nav>
				<?php } ?>
				<?php wp_reset_postdata(); ?>
			</div>
			</section><!-- /Latest Spots -->

			<section id="content2">
				<div class="tab-content spot-types">
					<ul>
						<li>Bumps</li>
						<li>Handrails</li>
						<li>Ledges</li>
						<li>Manual Pads</li>
						<li>Transition</li>
						<li>Stairs</li>
					</ul>
				</div>
			</section><!-- /Spot Types -->

			<section id="content3">
				<div class="tab-content neighborhoods">
					<ul>
						<li>Normal Heights</li>
						<li>Downtown</li>
						<li>Bankers Hill</li>
						<li>Hillcrest</li>
						<li>Little Italy</li>
						<li>Clairemont</li>
					</ul>
				</div>
			</section><!-- /Neighborhoods -->

			<section id="content4">
				<div class="tab-content skateparks">
					<ul>
						<li>Memorial</li>
						<li>Tierrasanta</li>
						<li>Carmel Valley</li>
						<li>Washington St.</li>
						<li>Paradise Hills</li>
						<li>Imperial Beach</li>
					</ul>
				</div>
			</section><!-- /Skateparks -->
		</div><!-- /tabbed nav -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
