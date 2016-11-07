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
    '/videos',
    function () {

        require_once("view/videos.php");
     
    }
);


// GET shop
$app->get(
    '/shop',
    function () {

        require_once("view/shop.php");
     
    }
);

$app->get(
    '/produtos', 
    function(){

    $sql = new Sql();

   $data = $sql->select("SELECT * FROM tb_produtos where preco_promocional > 0 order by preco_promocional desc limit 3;");

    json_encode($data);
    }
);

$app->run();
