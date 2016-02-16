<?php
require_once('vendor/autoload.php');

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

function GetEntityManager(){
	$paths = array("config/doctrine/models");
	$isDevMode = false;

	// the connection configuration
	$dbParams = array(
	    'driver'   => 'pdo_mysql',
	    'user'     => 'projet-appli',
	    'password' => 'projet-appli',
	    'dbname'   => 'projet_appli',
	);

	$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

	return EntityManager::create($dbParams, $config);
}

$entityManager = GetEntityManager();
?>
