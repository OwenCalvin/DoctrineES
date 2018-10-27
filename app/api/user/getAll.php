<?php
require_once('../../../vendor/autoload.php');

echo json_encode(
  User::toObjectArray(
    User::getRepository()->findAll(),
    ['name', 'email', 'posts']
  )
);
