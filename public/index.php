<?php

//只需要更改这个DIR就可以了；
define('APPLICATION_PATH', dirname(__DIR__));

$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();
?>
