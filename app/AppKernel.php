<?php

use Silex\Application;

class AppKernel extends Application
{
    public function __construct(array $values = array())
    {
        parent::__construct($values);

        $app = $this;
        $app['debug'] = true;

        // Twig
        $app->register(new Silex\Provider\TwigServiceProvider(), array(
            'twig.path' => __DIR__.'/../app/views',
            'twig.options' => array('cache' => __DIR__.'/../app/cache'),
        ));

        // Routing in templates
        $app->register(new Silex\Provider\UrlGeneratorServiceProvider());

        // Doctrine DBAL
        $app->register(new Silex\Provider\DoctrineServiceProvider(), array(
            'db.options' => array(
                'driver' => 'pdo_mysql',
                'host'   => 'localhost',
                'dbname' => 'devclub',
                'user'	 => 'root',
            ),
        ));
    }
}