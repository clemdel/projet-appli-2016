<?php
require_once('vendor/autoload.php');
require_once('src/php/class/autoload.php');
require_once('config/general.config.php');

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

function GetEntityManager(){
	$paths = array("config/doctrine/models");
	$isDevMode = false;

	// the connection configuration
	$dbParams = array(
	    'driver'   => DB_DRIVER,
	    'user'     => DB_USER,
	    'password' => DB_PASSWORD,
	    'dbname'   => DB_NAME
	);

	$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

	return EntityManager::create($dbParams, $config);
}

$entityManager = GetEntityManager();
?>
