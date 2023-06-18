<?php
include_once 'templates/head.php';
include_once 'templates/header.php';


if (isset($_GET['url'])) {
    $requestUrl = $_GET['url'];
} else {
    $requestUrl = '/home';
}

// Define your routes
$routes = [
    '/home' => 'homecontroller',
    // '/about' => 'AboutController',
    // '/contact' => 'ContactController',
    // Add more routes as needed
];

// Route the request
if (isset($routes[$requestUrl])) {
    $controller = $routes[$requestUrl];
    include_once "controllers/$controller.php";

} else {
    echo 'foutje bedankt';
}

?>
<a href="?url=/home">homecontroller</a>

<?php

include_once 'templates/footer.php';