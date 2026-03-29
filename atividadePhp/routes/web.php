<?php

require __DIR__ . '/../app/Http/Controllers/UserController.php';

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_method = $_SERVER['REQUEST_METHOD'];

$controller = new UserController();

if ($request_uri === '/' && $request_method === 'GET') {
    $controller->index();
} elseif ($request_uri === '/users' && $request_method === 'POST') {
    $controller->store($_POST);
} elseif (preg_match('/^\/users\/(\d+)$/', $request_uri, $matches) && $request_method === 'POST') {
    // DELETE via POST (formulário HTML5)
    if (isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {
        $controller->destroy($matches[1]);
    }
} else {
    http_response_code(404);
    echo "Página não encontrada";
}
