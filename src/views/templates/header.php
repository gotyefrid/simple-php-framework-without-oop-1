<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Мой сайт</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link <?= isActiveLink('main') ?>" href="?route=main">Главная страница</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= isActiveLink('about') ?>" href="?route=about">О нас</a>
            </li>
        </ul>
    </div>
</nav>

<?php

function isActiveLink(string $action): string
{
    if (getRoute() === $action) {
        return ' active';
    }

    return '';
}