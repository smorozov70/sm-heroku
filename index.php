<?php
declare(strict_types=1);
session_start();

// Подключаем HTML-код с информацией об авторе
include 'author_info.html';

// Проверяем, существует ли переменная с именем пользователя в сессии
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    echo "<h2>Привет, " . htmlspecialchars($_SESSION['username']) . "!</h2>";
    echo '<a href="exit.php">Выйти</a>';
} else {
    // Подключаем HTML-код с формой
    include 'form.html';
}