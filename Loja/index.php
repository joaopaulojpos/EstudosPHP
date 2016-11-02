<?php

require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim();



// GET route
$app->get(
    '/',
    function () {

        require_once("view/index.php");
     
    }
);

// GET video
$app->get(
    '/Videos',
    function () {

        require_once("view/videos.php");
     
    }
);

$app->run();
