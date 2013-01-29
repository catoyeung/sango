<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function () use ($app) {
    echo $app->render('index.php');
});

$app->run();