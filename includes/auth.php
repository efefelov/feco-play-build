<?php
/**
 * FECO Play - Система аутентификации и безопасности сессий
 * Версия 2.0 - Июль 2026
 */

// Конфигурация сессии
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', 0); // Установить 1 при использовании HTTPS
ini_set('session.cookie_samesite', 'Lax');

// Время жизни сессии (30 дней)
define('SESSION_LIFETIME', 30 * 24 * 60 * 60);

/**
 * Запуск безопасной сессии
 */
function startSecureSession() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start([
            'cookie_lifetime' => SESSION_LIFETIME,
            'use_strict_mode' => true
        ]);
    }
}

/**
 * Генерация CSRF токена
 */
function generateCSRFToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Проверка CSRF токена
 */
function validateCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Регистрация пользователя
 */
function registerUser($email, $password, $username = null) {
    // Валидация email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['success' => false, 'error' => 'Некорректный email'];
    }
    
    // Валидация пароля (минимум 6 символов)
    if (strlen($password) < 6) {
        return ['success' => false, 'error' => 'Пароль должен быть не менее 6 символов'];
    }
    
    // Хэширование пароля
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    
    // TODO: Интеграция с базой данных
    // Пока сохраняем в сессии для MVP
    $_SESSION['user'] = [
        'id' => uniqid('user_', true),
        'email' => $email,
        'username' => $username ?: explode('@', $email)[0],
        'created_at' => date('Y-m-d H:i:s'),
        'subscription' => 'free', // free, light, light_plus, premium, forever
        'subscription_expires' => null,
        'balance' => 0,
        'game_progress' => [
            'level' => 1,
            'money' => 0,
            'resources' => [],
            'equipment' => []
        ]
    ];
    
    return ['success' => true, 'user' => $_SESSION['user']];
}

/**
 * Вход пользователя
 */
function loginUser($email, $password) {
    // TODO: Проверка по базе данных
    // Для MVP проверяем сессию
    
    if (isset($_SESSION['user']) && $_SESSION['user']['email'] === $email) {
        return ['success' => true, 'user' => $_SESSION['user']];
    }
    
    // Демо-режим: любой пароль подходит для первого входа
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return registerUser($email, $password);
    }
    
    return ['success' => false, 'error' => 'Неверный email или пароль'];
}

/**
 * Выход пользователя
 */
function logoutUser() {
    $_SESSION = [];
    
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params['path'], $params['domain'],
            $params['secure'], $params['httponly']
        );
    }
    
    session_destroy();
}

/**
 * Проверка авторизации
 */
function isLoggedIn() {
    return isset($_SESSION['user']) && !empty($_SESSION['user']['id']);
}

/**
 * Получение текущего пользователя
 */
function getCurrentUser() {
    return $_SESSION['user'] ?? null;
}

/**
 * Проверка подписки
 */
function hasSubscription($requiredTier) {
    if (!isLoggedIn()) {
        return false;
    }
    
    $tiers = [
        'free' => 0,
        'light' => 1,
        'light_plus' => 2,
        'premium' => 3,
        'forever' => 4
    ];
    
    $userTier = $tiers[$_SESSION['user']['subscription']] ?? 0;
    $requiredLevel = $tiers[$requiredTier] ?? 0;
    
    // Проверка срока действия подписки
    if ($_SESSION['user']['subscription'] !== 'forever' && 
        $_SESSION['user']['subscription_expires'] !== null) {
        if (strtotime($_SESSION['user']['subscription_expires']) < time()) {
            $_SESSION['user']['subscription'] = 'free';
            return $requiredLevel === 0;
        }
    }
    
    return $userTier >= $requiredLevel;
}

/**
 * Обновление игрового прогресса
 */
function updateGameProgress($progress) {
    if (!isLoggedIn()) {
        return false;
    }
    
    $_SESSION['user']['game_progress'] = array_merge(
        $_SESSION['user']['game_progress'],
        $progress
    );
    
    // TODO: Сохранение в базу данных
    return true;
}

/**
 * Получение игрового прогресса
 */
function getGameProgress() {
    if (!isLoggedIn()) {
        return null;
    }
    
    return $_SESSION['user']['game_progress'] ?? null;
}
