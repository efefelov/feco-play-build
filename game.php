<?php
require_once __DIR__ . '/includes/auth.php';
startSecureSession();
if (!isLoggedIn()) { header('Location: /login.php'); exit; }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>SAND DRIVE — Игра</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <h1>Добро пожаловать в карьер!</h1>
    <p>Игра загружается...</p>
    <script src="https://cdn.jsdelivr.net/npm/phaser@3.60.0/dist/phaser.min.js"></script>
    <script>
        // Здесь будет код игры на Phaser.js
        console.log('Game loading...');
    </script>
</body>
</html>
