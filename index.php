<?php

require 'vendor/autoload.php';

use App\Book;

$container = new DI\Container();
$book = new Book($container->get('App\Page'));
