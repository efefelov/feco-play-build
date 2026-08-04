<?php
/**
 * Система аутентификации
 */

function startSecureSession() {
    if (session_status() === PHP_SESSION_NONE) {
        ini_set('session.cookie_httponly', 1);
        ini_set('session.use_only_cookies', 1);
        session_start();
    }
}

function isLoggedIn() {
    if (!isset(\['user_id'])) {
        return false;
    }
    
    // Проверка времени жизни сессии (30 мин)
    if (isset(\['last_activity']) && (time() - \['last_activity'] > 1800)) {
        session_unset();
        session_destroy();
        return false;
    }
    
    \['last_activity'] = time();
    return true;
}

function getCurrentUser() {
    if (!isLoggedIn()) {
        return null;
    }
    
    try {
        \ = getDbConnection();
        \ = \->prepare("SELECT id, email, created_at FROM users WHERE id = ?");
        \->execute([\['user_id']]);
        return \->fetch();
    } catch (PDOException \) {
        error_log("Get user error: " . \->getMessage());
        return null;
    }
}

function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: /login.php');
        exit;
    }
}

// Функция подключения к БД (если еще не подключено в db.php)
function getDbConnection() {
    static \ = null;
    if (\ === null) {
        if (!defined('DB_HOST')) {
            // Попытка подключить конфиг, если он еще не подключен
            if (file_exists(__DIR__ . '/db.php')) {
                require_once __DIR__ . '/db.php';
            } else {
                throw new Exception("Файл конфигурации БД не найден");
            }
        }
        
        \ = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        \ = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        \ = new PDO(\, DB_USER, DB_PASS, \);
    }
    return \;
}
?>
