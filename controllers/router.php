<?php

if (isset($_GET['page'])) {
    $requestUrl = $_GET['page'];
} else {
    $requestUrl = 'home';
}

// Define your routes
$routes = [
    'home' => 'homecontroller',
    'assignment' => 'assignmentcontroller',
    'assessment' => 'assessmentcontroller',
    'experiment' => 'experimentcontroller',
    'project' => 'projectcontroller'
];

// Route the request
if (isset($routes[$requestUrl])) {
    $controller = $routes[$requestUrl];
    include_once "controllers/$controller.php";

} else {
    echo 'foutje bedankt';
}