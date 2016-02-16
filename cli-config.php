<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'startdoctrine.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = GetEntityManager();


return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);