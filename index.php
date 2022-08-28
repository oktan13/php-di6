<?php

require 'vendor/autoload.php';

$container = new DI\Container();
$book = $container->get('App\Book');

