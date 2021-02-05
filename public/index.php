<?php

// autocarga de clases
require __DIR__ . '/../vendor/autoload.php';

// carga de request
$request = new App\Http\Request;
$request->send();