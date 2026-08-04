<?php
require_once __DIR__ . '/includes/auth.php';
startSecureSession();
if (isLoggedIn()) { header('Location: /dashboard.php'); exit; }
\Не удается найти путь "C:\a", так как он не существует. Не удается найти путь "C:\Users\efefe\Documents\feco-crm\feco-play-build\.gitignore", так как он не существует. Имя "push" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку. = '';
if (\['REQUEST_METHOD'] === 'POST') {
    \ = trim(\['email'] ?? '');
    \ = \['password'] ?? '';
    if (\ && \) {
        if (registerUser(\, \)) {
            header('Location: /dashboard.php');
            exit;
        } else {
            \Не удается найти путь "C:\a", так как он не существует. Не удается найти путь "C:\Users\efefe\Documents\feco-crm\feco-play-build\.gitignore", так как он не существует. Имя "push" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку. = 'Пользователь с таким email уже существует';
        }
    } else {
        \Не удается найти путь "C:\a", так как он не существует. Не удается найти путь "C:\Users\efefe\Documents\feco-crm\feco-play-build\.gitignore", так как он не существует. Имя "push" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку. = 'Заполните email и пароль';
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация — SAND DRIVE</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <h1>Регистрация</h1>
    <?php if (\Не удается найти путь "C:\a", так как он не существует. Не удается найти путь "C:\Users\efefe\Documents\feco-crm\feco-play-build\.gitignore", так как он не существует. Имя "push" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку.): ?><p class="error"><?= htmlspecialchars(\Не удается найти путь "C:\a", так как он не существует. Не удается найти путь "C:\Users\efefe\Documents\feco-crm\feco-play-build\.gitignore", так как он не существует. Имя "push" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку.) ?></p><?php endif; ?>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit">Зарегистрироваться</button>
    </form>
    <p>Уже есть аккаунт? <a href="/login.php">Войти</a></p>
</body>
</html>
