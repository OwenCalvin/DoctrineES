<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="tblUsers")
 */
class User extends BaseEntity {
  /**
   * @var string
   * @Column(type="string", name="name", unique=true, length=50)
   */
  private $_name;

  /**
   * @var string
   * @Column(type="string", name="email", unique=true, length=50)
   */
  private $_email;

  /**
   * @var string
   * @Column(type="string", name="password")
   */
  private $_password;

  /**
   * @var ArrayCollection
   * @OneToMany(targetEntity="Post", mappedBy="_user")
   */
  private $_posts;

  /**
   * __construct
   * @param string $name
   * @param string $email
   * @param string $password
   * @return User
   */
  public function __construct($name, $email, $password) {
    // parent::__construct();
    $this->setName($name);
    $this->setEmail($email);
    $this->setPassword($password);
    $this->_posts = new ArrayCollection();
  }

  public function getName() {
    return $this->_name;
  }
  public function setName($name) {
    $this->_name = $name;
  }

  public function getEmail() {
    return $this->_email;
  }
  public function setEmail($email) {
    $this->_email = $email;
  }

  public function getPassword() {
    return $this->_password;
  }
  public function setPassword($password) {
    $this->_password = $password;
  }

  public function getPosts() {
    return Post::toObjectArray(
      $this->_posts->toArray(),
      ['title', 'text', 'hashtags']
    );
  }
}
