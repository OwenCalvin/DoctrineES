<?php
require_once('../vendor/autoload.php');

// On doit pouvoir passer en paramètre les données nécessaires à l'instanciation d'une entité User, Post et Hashtag
// Comme dans cet exemple

// Here is an example for persist and flush
$user = new User('John', 'john@users.com', 'x');
$hashtag = new Hashtag('MyHashtag');
$post = new Post('My title', 'My text', $user, [$hashtag]);

// The datas aren't automaticaly persisted, it prepare the insertion
App::getEntityManager()->persist($user);
App::getEntityManager()->persist($post);
App::getEntityManager()->persist($hashtag);

// Commit all the previous persists call
App::getEntityManager()->flush();
