<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new AppKernel();

$app->get('/', function () use ($app) {
    return $app['twig']->render('homepage.html.twig');
});

$app->run();