<?php

require __DIR__ . '/../vendor/autoload.php';

$message = new \App\Wcs\Hello();
echo $message->talk();

