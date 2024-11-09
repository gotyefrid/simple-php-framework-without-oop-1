<?php

$route = getRoute();
showPage($route);

function showPage(?string $route): void
{
    if ($route === null) {
        require 'src/main.php';
        exit();
    }

    $filePath = 'src/' . $route . '.php';

    if (file_exists($filePath)) {
        require $filePath;
        exit();
    }

    require 'error.php';
}

/**
 * Получить текущий роут который ввёл пользователь
 * @return string|null
 */
function getRoute(): ?string
{
    $route = $_GET['route'] ?? null;
    
    if (!$route) {
        $path = $_SERVER['REQUEST_URI'];
        
        if ($path === '/') {
            return null;
        }
        
        $route = substr($path, 1);
    }
    
    return $route === '/' ? null : $route;
}