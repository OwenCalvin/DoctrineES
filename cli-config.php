<?php
require_once('app.php');
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet(App::getEntityManager());
