<?php
require_once('../vendor/autoload.php');

$user = new User('Owen', 'owen.gombas@gmail.com', 'Pass1234');
$hashtag = new Hashtag('MyHashtag');
$post = new Post('My title', 'My text', $user, [$hashtag]);

var_dump(User::getRepository()->findAll());

// The datas aren't automaticaly persisted, it prepare the insertion
App::getEntityManager()->persist($user);
App::getEntityManager()->persist($post);
App::getEntityManager()->persist($hashtag);

// Commit all the previous persists call
App::getEntityManager()->flush();
