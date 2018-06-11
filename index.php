<?php

require 'autoload.php';

use Classes\Greeting as Greeting;

$greeting = Greeting::sayHelloTo('World');

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html', array('hello' => $greeting));