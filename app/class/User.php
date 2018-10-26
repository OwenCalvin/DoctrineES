<?php

/**
 * @Entity @Table(name="tblUsers")
 */
class User extends BaseEntity {
  /**
   * @var string
   * @Column(type="string", name="name")
   */
  private $_name;

  /**
   * @var string
   * @Column(type="string", name="email")
   */
  private $_email;

  /**
   * @var string
   * @Column(type="string", name="password")
   */
  private $_password;

  /**
   * __construct
   * @param string $name
   * @param string $email
   * @param string $password
   * @return User
   */
  public function __construct($name, $email, $password) {
    // parent::__construct();
    $this->_name = $name;
    $this->_email = $email;
    $this->_password = $password;
  }

  public function getName() {
    return $this->_name;
  }
  public function setName($name) {
    $this->_name = $name;
  }

  public function getEmail() {
    return $this->$_email;
  }
  public function setEmail($email) {
    $this->$_email = $email;
  }

  public function getPassword() {
    return $this->$_password;
  }
  public function setPassword($password) {
    $this->_password = $password;
  }
}
