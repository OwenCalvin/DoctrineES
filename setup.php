<?php
require_once('vendor/autoload.php');

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$dbConnection = [
  'driver' => 'pdo_mysql',
  'user' => 'root',
  'password' => 'root',
  'dbname' => 'orm'
];

$entitiesPaths = ['app/class'];

$config = Setup::createAnnotationMetadataConfiguration($entitiesPaths, true);
$entityManager = EntityManager::create($dbConnection, $config);
