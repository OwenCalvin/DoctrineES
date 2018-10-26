<?php

/**
 * @Entity @Table(name="tblPosts")
 */
class Post extends BaseEntity {
  /**
   * @var string
   * @Column(type="string", name="title")
   */
  private $_title;

  /**
   * @var string
   * @Column(type="string", name="text")
   */
  private $_text;

  /**
   * __construct
   * @param string $title
   * @param string $text
   * @return Post
   */
  public function __construct($title, $text) {
    //parent::__construct();
    $this->_title = $title;
    $this->_text = $text;
  }

  public function getTitle() {
    return $this->_title;
  }
  public function setTitle($title) {
    $this->_title = $title;
  }

  public function getText() {
    return $this->_text;
  }
  public function setText($text) {
    $this->_text = $text;
  }
}
