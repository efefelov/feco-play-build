<?php
require_once __DIR__ . '/includes/auth.php';
startSecureSession();

// Проверка авторизации
if (!isLoggedIn()) {
    header('Location: /login.php');
    exit;
}

\ = \['user_email'] ?? 'Гость';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет — FECO Play</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="/" class="navbar-brand">FECO Play</a>
            <ul class="navbar-nav">
                <li><a href="/game.php">Играть</a></li>
                <li><span style="color: #ccc;"><?= htmlspecialchars(\) ?></span></li>
                <li><a href="/auth/logout.php">Выйти</a></li>
            </ul>
        </div>
    </nav>

    <section class="section">
        <div class="container">
            <h2 class="section-title">Личный кабинет</h2>
            <p>Добро пожаловать, <?= htmlspecialchars(\) ?>!</p>
            
            <div class="cards-grid">
                <div class="card">
                    <h3>🎮 Начать игру</h3>
                    <p>Перейдите в симулятор добычи полезных ископаемых.</p>
                    <a href="/game.php" class="btn btn-primary">Играть</a>
                </div>
                <div class="card">
                    <h3>💎 Мой профиль</h3>
                    <p>Управление настройками аккаунта и подпиской.</p>
                    <a href="#" class="btn btn-outline">Настройки (скоро)</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
