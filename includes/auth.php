<?php
function startSecureSession() {
    if (session_status() === PHP_SESSION_NONE) {
        ini_set('session.cookie_httponly', 1);
        ini_set('session.use_only_cookies', 1);
        ini_set('session.cookie_secure', 1); // Требует HTTPS
        session_start();
    }
}
function isLoggedIn() {
    if (!isset($_SESSION['user_id'])) {
        return false;
    }
    // Проверка активности сессии (опционально, например 30 минут)
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 1800)) {
        session_unset();
        session_destroy();
        return false;
    }
    $_SESSION['last_activity'] = time();
    return true;
}
function getDbConnection() {
    $host = 'localhost';
    $db   = 'evfefelov_fcplay'; // Имя БД на Beget обычно имеет префикс логина
    $user = 'evfefelov_fcplay'; // Пользователь БД
    $pass = 'Rw!R&gOWy77f'; // Вставьте сюда реальный пароль от БД
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
