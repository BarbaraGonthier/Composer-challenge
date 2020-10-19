<?php

require __DIR__ . '/../vendor/autoload.php';

$message = new \App\Wcs\Hello();
echo $message->talk();

$message2 = new \HelloWorld\SayHello();
echo $message2->world();