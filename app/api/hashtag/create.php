<?php
require_once('../../../vendor/autoload.php');

$textIndex = 'text';
if (isset($_GET[$textIndex])) {
  App::getEntityManager()->persist(new Hashtag($_GET[$textIndex]));
  App::getEntityManager()->flush();
  echo json_encode(['status' => 'ok']);
} else {
  echo json_encode(['error' => 'Text musts be specified']);
}
