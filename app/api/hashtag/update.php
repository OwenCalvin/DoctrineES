<?php
require_once('../../../vendor/autoload.php');

$textIndex = 'text';
$idIndex = 'id';
if (isset($_GET[$textIndex]) && isset($_GET[$idIndex])) {
  $hashtagToUpdate = new Hashtag($_GET[$textIndex]);
  $hashtagToUpdate->setId($_GET[$idIndex]);
  App::getEntityManager()->merge($hashtagToUpdate);
  App::getEntityManager()->flush();
  echo json_encode(['status' => 'ok']);
} else {
  echo json_encode(['error' => 'Text and Id musts to be specified']);
}
