<?php

$title = 'Главная страница';
?>
<!doctype html>
<html lang="en">
<?php require 'views/templates/head.php'?>
<body>
<?php require 'views/templates/header.php'?>

<!-- Заголовок страницы -->
<header class="bg-primary text-white text-center py-5">
    <h1>Добро пожаловать на наш сайт!</h1>
    <p>Это главная страница</p>
</header>

<!-- Основной контент -->
<main class="container my-5">
    <p class="text-center">Здесь будет основной контент сайта. Пожалуйста, заходите позже, чтобы увидеть больше информации!</p>
</main>


<?php require 'views/templates/beforeBody.php'?>
</body>
</html>