<?php
require_once('vendor/autoload.php');

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class App {
  private static $_instance;
  private $_entityManager;

  public function __construct($dbConnectionParams, $entitiesPaths) {
    header('Content-Type: application/json');
    $config = Setup::createAnnotationMetadataConfiguration($entitiesPaths, true);
    $this->_entityManager = EntityManager::create($dbConnectionParams, $config);
  }

  /**
   * @return App
   */
  public static function getInstance() {
    if (!isset(self::$_instance)) {
      $dbConnectionParams = [
        'driver' => 'pdo_mysql',
        'user' => 'root',
        'password' => '',
        'dbname' => 'orm'
      ];
      $entitiesPaths = ['app/model'];

      self::$_instance = new App($dbConnectionParams, $entitiesPaths);
    }
    return self::$_instance;
  }

  /**
   * @return EntityManager
   */
  public static function getEntityManager() {
    return self::getInstance()->_entityManager;
  }
}
