<?php

/**
 * @Entity @Table(name="tblHashtags")
 */
class Hashtag {
 /**
  * @var string
  * @Id @Column(type="string", name="text")
  */ 
  private $_text;

  /**
   * __construct
   * @param string $text
   * @return Hashtag
   */
  public function __construct($text) {
    $this->_text = $text;
  }

  public function getTitle() {
    return $this->_text;
  }
  public function setTitle($text) {
    $this->_text = $text;
  }
}
