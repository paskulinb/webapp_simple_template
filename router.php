<?php
$URI_BASE = '/mywebapp';
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    
    case $URI_BASE.'/' :
        require __DIR__ . '/views/index.php';
        break;
        
    case $URI_BASE.'' :
        require __DIR__ . '/views/index.php';
        break;
    
    case $URI_BASE.'/something.json' :
        
        require __DIR__ . '/api.php';
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(something()); //, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
