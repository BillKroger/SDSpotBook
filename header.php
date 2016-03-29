<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- normalize.css -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css" type="text/css" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Fonts -->
<link href='https://fonts.googleapis.com/css?family=Cabin+Condensed:400,500,600,700|Pathway+Gothic+One:400|Lato:400,300,900,700,100|Droid+Sans:400,700|Roboto:400,900,700,500,300,100|Open+Sans:400,300,600,700|Oswald:400,300' rel='stylesheet' type='text/css'>

<!-- Main Stylesheets -->
<link href="/css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
<link href="/css/print.css" media="print" rel="stylesheet" type="text/css" />
<!--[if IE]>
	<link href="/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="header" class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			
			<a class="navbar-brand" href="/"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-whitebg.svg" height="" width="" alt="SD Spot Book"></a>

			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="navbar-collapse collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<!-- <li><a class="navbarItems" href="#">About</a></li> -->

					<!-- Alternate Dropdown Login Menu -->
					
					<!-- <ul class="nav pull-right">
			          <li class="dropdown" id="menuLogin">
			            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
			            <div class="dropdown-menu" style="padding:17px;">
			              <form class="form" id="formLogin"> 
			                <input name="username" id="username" type="text" placeholder="Username"> 
			                <input name="password" id="password" type="password" placeholder="Password"><br>
			                <button type="button" id="btnLogin" class="btn">Login</button>
			              </form>
			            </div>
			          </li>
			        </ul> -->


					<li class = "dropdown">
						<a class="navbarItems" href="#" class="dropdown-toggle" data-toggle = "dropdown">Log In <b class="caret"></b></a>
						
						<ul class = "dropdown-menu">
							<form method="post" action="/form" id="loginForm">
								
								<!-- <p>Username or Email Address</p> -->
				                <input type="text" id="username" name="username" autocomplete="off" placeholder="username">
				                
				                <!-- <p id="passwordLabel">Password</p> -->
				                <input type="text" id="password" name="password" autocomplete="off" placeholder="password">
				                
				                <button type="button" id="btnLogin" class="btn">Login</button>

			              	</form>				              	
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
