<?php
require_once('../../../vendor/autoload.php');

echo json_encode(
  Post::toObjectArray(
    Post::getRepository()->findAll(),
    ['title', 'text', 'user']
  )
);
