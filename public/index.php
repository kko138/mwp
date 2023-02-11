<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$kernel = new Kernel($_SERVER['APP_ENV'], true);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);