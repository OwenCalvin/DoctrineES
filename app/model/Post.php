<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="tblPosts")
 */
class Post extends BaseEntity {
  /**
   * @var string
   * @Column(type="string", name="title", length=50)
   */
  private $_title;

  /**
   * @var string
   * @Column(type="string", name="text", length=255)
   */
  private $_text;

  /**
   * @var User
   * @ManyToOne(targetEntity="User", inversedBy="_posts")
   * @JoinColumn(name="user_id", nullable=false)
   */
  private $_user;

  /**
   * @var ArrayCollection
   * @ManyToMany(targetEntity="Hashtag", inversedBy="_posts")
   * @JoinTable(name="tblPostsHashtags")
   */
  private $_hashtags;

  /**
   * __construct
   * @param string $title
   * @param string $text
   * @return Post
   */
  public function __construct($title, $text, $user, $hashtags = []) {
    //parent::__construct();
    $this->setTitle($title);
    $this->setText($text);
    $this->setUser($user);
    $this->setHashtags($hashtags);
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

  public function getUser() {
    return User::toObject($this->_user, ['name', 'email']);
  }
  public function setUser($user) {
    $this->_user = $user;
  }

  public function getHashtags() {
    return Hashtag::toObjectArray(
      $this->_hashtags->toArray(),
      ['text']
    );
  }
  public function setHashtags($hashtags) {
    $this->_hashtags = new ArrayCollection($hashtags);
  }
}
