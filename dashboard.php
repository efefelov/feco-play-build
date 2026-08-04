<?php
require_once __DIR__ . '/includes/auth.php';

// Включаем ошибки для отладки (УДАЛИТЬ ПОСЛЕ НАСТРОЙКИ!)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

startSecureSession();
requireLogin();

\ = getCurrentUser();
if (!\) {
    header('Location: /login.php');
    exit;
}
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
                <li><span style="color: #fff;">Привет, <?= htmlspecialchars(\['email']) ?></span></li>
                <li><a href="/auth/logout.php">Выйти</a></li>
            </ul>
        </div>
    </nav>

    <section class="section">
        <div class="container">
            <h2 class="section-title">Личный кабинет</h2>
            <div class="card">
                <h3>Ваш профиль</h3>
                <p><strong>Email:</strong> <?= htmlspecialchars(\['email']) ?></p>
                <p><strong>ID:</strong> <?= \['id'] ?></p>
                <p><strong>Дата регистрации:</strong> <?= \['created_at'] ?></p>
                
                <div style="margin-top: 20px;">
                    <a href="/game.php" class="btn btn-primary">Перейти в игру</a>
                </div>
            </div>
            
            <div class="cards-grid" style="margin-top: 30px;">
                <div class="card">
                    <h3>🏭 Ваш завод</h3>
                    <p>Уровень: 1</p>
                    <p>Баланс: 0 ₽</p>
                    <p>Ресурсы: 0 т</p>
                </div>
                <div class="card">
                    <h3>📊 Статистика</h3>
                    <p>Время в игре: 0 ч</p>
                    <p>Произведено двигателей: 0</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
