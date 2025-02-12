<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'controllers/FrontController.php';

$frontController = new FrontController();
$frontController->handleRequest();
