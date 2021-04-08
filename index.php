<?php
$url = $_SERVER['REQUEST_URI'];
$prefix = '/p/sprint3';
switch ($url) {
    case $prefix . '/' :
        require __DIR__ . '/src/views/index.php';
        break;
    case $prefix . '' :
        require __DIR__ . '/src/views/index.php';
        break;
    case $prefix . '/about' :
        require __DIR__ . '/src/views/about.php';
        break;
    case $prefix . '/employees' :
        require __DIR__ . '/src/views/employees.php';
        break;
    case $prefix . '/projects' :
        require __DIR__ . '/src/views/projects.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/views/404.php';
        break;
}
