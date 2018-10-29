<?php
require_once('../../../vendor/autoload.php');

$textIndex = 'text';
if (isset($_GET[$textIndex])) {
  echo json_encode(
    Hashtag::toObject(
      Hashtag::getRepository()->findOneBy([
        '_text' => $_GET[$textIndex]
      ]),
      ['text', 'posts']
    )
  );
} else {
  echo json_encode(['error' => 'Text not specified']);
}
