<?php
require_once __DIR__ . '/includes/auth.php';
startSecureSession();
$loggedIn = isLoggedIn();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FECO Play — Игровая вселенная ФабрикиДВС</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="/" class="navbar-brand">FECO Play</a>
            <ul class="navbar-nav">
                <li><a href="#about">О проекте</a></li>
                <li><a href="#pricing">Тарифы</a></li>
                <?php if ($loggedIn): ?>
                    <li><a href="/game/index.php">Играть</a></li>
                    <li><a href="/dashboard.php">Кабинет</a></li>
                    <li><a href="/auth/logout.php">Выйти</a></li>
                <?php else: ?>
                    <li><a href="/login.php">Войти</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <h1>FECO Play</h1>
            <p class="subtitle">Игровая вселенная двигателестроения. Симулятор завода ДВС, техники и механизмов.</p>
            <?php if ($loggedIn): ?>
                <a href="/game/index.php" class="btn btn-primary btn-large">Продолжить игру</a>
            <?php else: ?>
                <a href="/register.php" class="btn btn-primary btn-large">Начать бесплатно</a>
            <?php endif; ?>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>© FECO Play 2026. ФабрикаДВС.</p>
        </div>
    </footer>
</body>
</html>
