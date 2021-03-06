<?php

use Doctrine\ORM\EntityRepository;

abstract class BaseEntity {
  /**
   * @var int 
   * @id @Column(type="integer", name="id") @GeneratedValue
   */
  protected $_id;

  public function getId() {
    return $this->_id;
  }
  public function setId($id) {
    $this->_id = $id;
  }

  /**
   * It return the EntityRepository object
   * @return EntityRepository
   */
  public static function getRepository() {
    return App::getEntityManager()->getRepository(get_called_class());
  }

  /**
   * Convert an array of entities to an array of entities with selected properties
   * @param Array $arr The array of entities to retrieve
   * @param Array $props The array of properties to get
   */
  public static function toObjectArray($arr, $props) {
    if (is_array($arr)) {
      return array_map(function ($item) use($props) {
        return self::toObject($item, $props);
      }, $arr);
    }
    return [];
  }

  /**
   * Convert an entity instance to an object with selected properties
   * @param Object $item The entity instance
   * @param Array $props The array of properties to get
   */
  public static function toObject($item, $props) {
    if (isset($item)) {
      $obj = [];
      foreach($props as $prop) {
        $obj[$prop] = $item->{'get'.ucfirst($prop)}();
      }
      return $obj;
    }
    return null;
  }
}
