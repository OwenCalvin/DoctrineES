<?php
require_once('../../../vendor/autoload.php');

$idIndex = 'id';
if (isset($_GET[$idIndex])) {
  $hashtagToDelete = App::getEntityManager()->getReference('Hashtag', $_GET[$idIndex]);
  App::getEntityManager()->remove($hashtagToDelete);
  App::getEntityManager()->flush();
  echo json_encode(['status' => 'ok']);
} else {
  echo json_encode(['error' => 'Id not specified']);
}
