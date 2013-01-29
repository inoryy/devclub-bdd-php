<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new AppKernel();

$app->get('/', function () use ($app) {
    return $app['twig']->render('homepage.html.twig');
});

$app->post('/search', function () use ($app) {
    $term = $app['request']->get('car_name');

    $results = $app['db']->fetchArray('SELECT name FROM cars WHERE name LIKE :name', array(
        'name' => '%'.$term.'%'
    ));

    return $app['twig']->render('homepage.html.twig', array(
        'results' => $results
    ));
})->bind('search_car');

$app->run();