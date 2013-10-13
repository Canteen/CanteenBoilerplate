<?php
	
	// Require the termite base
	require_once 'lib/vendor/autoload.php';
	
	use Canteen\Site;
	use Canteen\Server\DeploymentStatus;
	
	// Specify the minimum version of Termite that's
	// needed to run this site
	Site::requiresVersion('1.4.0');

	// Create the site and pass in the settings
	$site = new Site('settings.json');
	
	// Echo out the page result
	$site->render();