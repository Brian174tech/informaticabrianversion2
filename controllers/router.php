<?php

if (isset($_GET['page']) && isset( $_GET['request'])) {
    $requestUrl = $_GET['page'];
} else {
    $requestUrl = 'no';
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
    echo "You are being naughty arn't you";
}