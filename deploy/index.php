<?php
	
	// Require the autoloader from composer
	require 'assets/php/autoload.php';

	// Setup the site
	$site = new Canteen\Site();
	
	// Echo out the page result
	$site->render();