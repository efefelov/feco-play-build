<?php
require_once __DIR__ . '/includes/auth.php';
startSecureSession();

if (isLoggedIn()) {
    header('Location: /dashboard.php');
    exit;
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm_password'] ?? '';
    
    if (empty($email) || empty($password)) {
        $error = 'Заполните все поля';
    } elseif ($password !== $confirm) {
        $error = 'Пароли не совпадают';
    } else {
        try {
            $pdo = getDbConnection();
            $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->execute([$email]);
            if ($stmt->fetch()) {
                $error = 'Email уже занят';
            } else {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("INSERT INTO users (email, password_hash, created_at) VALUES (?, ?, NOW())");
                $stmt->execute([$email, $hash]);
                $success = 'Регистрация успешна! <a href="/login.php">Войти</a>';
            }
        } catch (PDOException $e) {
            error_log("Reg error: " . $e->getMessage());
            $error = 'Ошибка БД';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация — FECO Play</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <nav class="navbar"><div class="container"><a href="/" class="navbar-brand">FECO Play</a></div></nav>
    <section class="section"><div class="container" style="max-width:400px">
        <h2>Регистрация</h2>
        <?php if($error): ?><div style="color:red;margin-bottom:10px"><?=htmlspecialchars($error)?></div><?php endif; ?>
        <?php if($success): ?><div style="color:green;margin-bottom:10px"><?=$success?></div><?php else: ?>
        <form method="POST">
            <div style="margin-bottom:10px"><label>Email<br><input type="email" name="email" required style="width:100%"></div>
            <div style="margin-bottom:10px"><label>Пароль<br><input type="password" name="password" required style="width:100%"></div>
            <div style="margin-bottom:10px"><label>Повтор пароля<br><input type="password" name="confirm_password" required style="width:100%"></div>
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
        </form>
        <p><a href="/login.php">Уже есть аккаунт? Войти</a></p>
        <?php endif; ?>
    </div></section>
</body>
</html>
