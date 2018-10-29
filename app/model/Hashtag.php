<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="tblHashtags")
 */
class Hashtag extends BaseEntity {
 /**
  * @var string
  * @Column(type="string", name="text", length=20, unique=true)
  */
  private $_text;

  /**
   * @var ArrayCollection
   * @ManyToMany(targetEntity="Post", mappedBy="_hashtags")
   */
  private $_posts;

  /**
   * __construct
   * @param string $text
   * @return Hashtag
   */
  public function __construct($text) {
    $this->setText($text);
    $this->_posts = new ArrayCollection();
  }

  public function getText() {
    return $this->_text;
  }
  public function setText($text) {
    $this->_text = $text;
  }

  public function getPosts() {
    return Post::toObjectArray(
      $this->_posts->toArray(),
      ['title', 'text']
    );
  }
}
