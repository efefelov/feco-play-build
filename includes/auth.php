<?php
// НАСТРОЙКИ БАЗЫ ДАННЫХ (ЗАПОЛНИТЕ СВОИМИ ДАННЫМИ ОТ BEGET)
$db_host = 'localhost'; 
$db_name = 'evfefelov_fcplay'; // Замените на полное имя вашей БД (вид: логин_имябд)
$db_user = 'evfefelov_fcplay'; // Замените на полного пользователя БД
$db_pass = 'Rw!R&gOWy77f'; // Впишите сюда пароль от БД, созданный в панели Beget
function getDbConnection() {
    global $db_host, $db_name, $db_user, $db_pass;
    try {
        $dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        return new PDO($dsn, $db_user, $db_pass, $options);
    } catch (\PDOException $e) {
        // В продакшене лучше логировать ошибку в файл, а не выводить пользователю
        error_log("DB Connection Error: " . $e->getMessage());
        throw new \PDOException("Ошибка подключения к базе данных");
    }
}
function startSecureSession() {
    if (session_status() === PHP_SESSION_NONE) {
        ini_set('session.cookie_httponly', 1);
        ini_set('session.use_strict_mode', 1);
        session_start();
    }
}
function isLoggedIn() {
    if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['user_id'])) {
        if (time() - ($_SESSION['last_activity'] ?? 0) > 1800) { // 30 минут
            session_unset();
            session_destroy();
            return false;
        }
        $_SESSION['last_activity'] = time();
        return true;
    }
    return false;
}
?>
