<?php
/**
 * Подключение к базе данных (Beget)
 * Замените константы на ваши реальные данные из панели Beget
 */

define('DB_HOST', 'localhost'); // На Beget обычно localhost
define('DB_NAME', 'ваше_имя_бд'); // Например: u123456789_sanddrive
define('DB_USER', 'ваш_пользователь'); // Например: u123456789_user
define('DB_PASS', 'ваш_пароль'); // Пароль от пользователя БД

try {
    \ = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    \ = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    
    \ = new PDO(\, DB_USER, DB_PASS, \);
} catch (PDOException \) {
    // В продакшене не выводим детальную ошибку
    error_log("DB Connection Error: " . \->getMessage());
    die("Ошибка подключения к базе данных.");
}
?>
