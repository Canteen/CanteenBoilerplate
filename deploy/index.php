<?php
	
	// Require the autoloader from composer
	require 'assets/php/autoload.php';

	// Setup the site
	$site = new Canteen\Site();

	// Cache busting to the render to cache bust local assets
	// use {{cacheBust}} after a file name, like JS or CSS files
	$site->settings->addSetting(
		'cacheBust', 
		'?'.($site->settings->local ? 'cb='.time() : 'v=1'),
		SETTING_RENDER | SETTING_CLIENT
	);
	
	// Echo out the page result
	$site->render();