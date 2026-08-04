<?php
function startSecureSession() {
    if (session_status() === PHP_SESSION_NONE) {
        ini_set('session.cookie_httponly', 1);
        ini_set('session.use_only_cookies', 1);
        ini_set('session.cookie_secure', 0); // Поставьте 1, если только HTTPS
        session_start();
    }
}
function isLoggedIn() {
    if (session_status() === PHP_SESSION_ACTIVE) {
        if (isset($_SESSION['user_id']) && isset($_SESSION['last_activity'])) {
            if (time() - $_SESSION['last_activity'] > 1800) {
                session_unset();
                session_destroy();
                return false;
            }
            $_SESSION['last_activity'] = time();
            return true;
        }
    }
    return false;
}
function getDbConnection() {
    $host = 'localhost';
    $db   = 'evfefelov_fcplay'; // Проверьте имя БД на Beget
    $user = 'evfefelovy'; // Проверьте пользователя БД на Beget
    $pass = 'Rw!R&gOWy77f'; // ВСТАВЬТЕ ПАРОЛЬ ОТ БАЗЫ ДАННЫХ
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        return new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}
?>