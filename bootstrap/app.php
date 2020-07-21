<?php

require_once "../vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Config\Repository;

$configPath = "../config/";
$config = new Repository(require $configPath . 'database.php');

$capsule = new Capsule;

$capsule->addConnection([
    "driver" => $config->get('database.driver'),
    "host" => $config->get('database.host'),
    "port" => $config->get('database.port'),
    "database" => $config->get('database.database'),
    "username" => $config->get('database.username'),
    "password" => $config->get('database.password'),
]);

$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();
