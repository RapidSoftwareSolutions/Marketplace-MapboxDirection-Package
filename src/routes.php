<?php
$routes = [
    'getOptimalCyclingRoute',
    'getOptimalDrivingRoute',
    'getOptimalDrivingTrafficRoute',
    'getOptimalWalkingRoute',
    'metadata'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

