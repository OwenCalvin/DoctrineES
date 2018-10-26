<?php
require_once('../setup.php');

spl_autoload_register(function($className) {
  require_once('class/'.$className.'.php');
});

$user = new User('Owen', 'owen.gombas@gmail.com', 'Pass1234');
$post = new Post('My title', 'My text');
$hashtag = new Hashtag('MyHashtag');

// The datas aren't automaticaly persisted, it prepare the insertion
$entityManager->persist($user);
$entityManager->persist($post);
$entityManager->persist($hashtag);

// Commit all the previous persists call
$entityManager->flush();
