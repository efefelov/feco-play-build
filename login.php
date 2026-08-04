<?php
require_once __DIR__ . '/includes/auth.php';
startSecureSession();

if (isLoggedIn()) {
    header('Location: /dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'] ?? '';
    
    if (empty($email) || empty($password)) {
        $error = 'Заполните все поля';
    } else {
        try {
            $pdo = getDbConnection();
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();
            
            if ($user && password_verify($password, $user['password_hash'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                header('Location: /dashboard.php');
                exit;
            } else {
                $error = 'Неверный email или пароль';
            }
        } catch (PDOException $e) {
            error_log("Login error: " . $e->getMessage());
            $error = 'Ошибка при входе.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход — FECO Play</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <nav class="navbar"><div class="container"><a href="/" class="navbar-brand">FECO Play</a></div></nav>
    <section class="section"><div class="container" style="max-width:400px">
        <h2>Вход</h2>
        <?php if($error): ?><div style="color:red;margin-bottom:10px"><?=htmlspecialchars($error)?></div><?php endif; ?>
        <form method="POST">
            <div style="margin-bottom:10px"><label>Email<br><input type="email" name="email" required style="width:100%"></div>
            <div style="margin-bottom:10px"><label>Пароль<br><input type="password" name="password" required style="width:100%"></div>
            <button type="submit" class="btn btn-primary">Войти</button>
        </form>
        <p><a href="/register.php">Нет аккаунта? Зарегистрироваться</a></p>
    </div></section>
</body>
</html>
