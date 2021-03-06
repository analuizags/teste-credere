<?php 
header('Content-Type: application/json; charset=UTF-8');

require_once 'config/config.php';
require_once 'api/Api.php';
require_once 'vendor/autoload.php';

if (file_exists(__DIR__ . '/.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}

if (isset($_REQUEST) && !empty($_REQUEST)) {
    echo Api::open($_REQUEST);
} else {
    http_response_code(400);
    echo json_encode(array('Erro' => 'URL inválida'));
}