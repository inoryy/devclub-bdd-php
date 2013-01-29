<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new AppKernel();

// Init basic schema
// In a real project should probably use database migrations library
$sql = "CREATE TABLE IF NOT EXISTS cars (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))";
$app['db']->query($sql);