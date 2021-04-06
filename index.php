<?php
include 'EasyRoute.php';

$router = new EasyRoute($_SERVER['REQUEST_URI']);

$router->addRoute("/","/app/home");
$router->addRoute("/about","/app/company-info/details");

$router->run();

?>