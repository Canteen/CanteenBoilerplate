<?php 

/**
*  For more information about configuring your site, please 
*  refer to the Canteen documentation for all the different
*  setup variables.
*/
return array(
	
	/**
	*  This is the deployment level from 1-4.
	*  (If set to local, there are no
	*  privilege restrictions on service calls
	*  or running forms submissions).
	*  1 = running locally
	*  2 = running development
	*  3 = running staging
	*  4 = running live
	*/
	'level' => 1,
	
	/** The MySQL host location */
	'dbHost' => 'localhost',
	
	/** The MySQL username  */
	'dbUsername' => 'termite_test',
	
	/** The MySQL password for the dbUsername */
	'dbPassword' => '12341234',
	
	/** The name of the MySQL database */
	'dbName' => 'termite_test',
	
	/** Running site in debug mode */
	'debug' => true
);