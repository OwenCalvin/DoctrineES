<?php
require_once('../../../vendor/autoload.php');

echo json_encode(
  Hashtag::toObjectArray(
    Hashtag::getRepository()->findAll(),
    ['text', 'posts']
  )
);
