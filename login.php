<?php
require_once __DIR__ . '/includes/auth.php';
startSecureSession();

// Если пользователь уже авторизован, перенаправляем в кабинет
if (isLoggedIn()) {
    header('Location: /dashboard.php');
    exit;
}

\Не удается найти путь "C:\kern-docs", так как он не существует. System.Management.Automation.ParseException: строка:18 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:19 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:20 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:21 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) System.Management.Automation.ParseException: строка:18 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:19 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:20 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:21 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) System.Management.Automation.ParseException: строка:22 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:23 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:24 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:26 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) Имя "php" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку. System.Management.Automation.ParseException: строка:3 знак:20
+ startSecureSession();
+                    ~
После ''('' ожидалось выражение.

строка:6 знак:16
+ if (isLoggedIn()) {
+                ~
После ''('' ожидалось выражение.

строка:14 знак:37
+     $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ...
+                                     ~
Отсутствует аргумент в списке параметров.

строка:15 знак:36
+     $password = $_POST['password'] ?? '';
+                                    ~~
Непредвиденная лексема "??" в выражении или операторе.

строка:44 знак:26
+         <p>Нет аккаунта? <a href="/register.php">Зарегистрироваться</ ...
+                          ~
Оператор "<" зарезервирован для использования в будущем.
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) Не удается найти путь "C:\a", так как он не существует. Не удается найти путь "C:\Users\efefe\Documents\feco-crm\feco-play-build\.gitignore", так как он не существует. Имя "push" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку. = '';

if (\['REQUEST_METHOD'] === 'POST') {
    \ = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    \ = \['password'] ?? '';
    
    if (empty(\) || empty(\)) {
        \Не удается найти путь "C:\kern-docs", так как он не существует. System.Management.Automation.ParseException: строка:18 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:19 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:20 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:21 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) System.Management.Automation.ParseException: строка:18 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:19 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:20 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:21 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) System.Management.Automation.ParseException: строка:22 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:23 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:24 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:26 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) Имя "php" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку. System.Management.Automation.ParseException: строка:3 знак:20
+ startSecureSession();
+                    ~
После ''('' ожидалось выражение.

строка:6 знак:16
+ if (isLoggedIn()) {
+                ~
После ''('' ожидалось выражение.

строка:14 знак:37
+     $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ...
+                                     ~
Отсутствует аргумент в списке параметров.

строка:15 знак:36
+     $password = $_POST['password'] ?? '';
+                                    ~~
Непредвиденная лексема "??" в выражении или операторе.

строка:44 знак:26
+         <p>Нет аккаунта? <a href="/register.php">Зарегистрироваться</ ...
+                          ~
Оператор "<" зарезервирован для использования в будущем.
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) Не удается найти путь "C:\a", так как он не существует. Не удается найти путь "C:\Users\efefe\Documents\feco-crm\feco-play-build\.gitignore", так как он не существует. Имя "push" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку. = 'Заполните все поля';
    } else {
        try {
            \ = getDbConnection();
            
            // Ищем пользователя
            \ = \->prepare("SELECT * FROM users WHERE email = ?");
            \->execute([\]);
            \ = \->fetch();
            
            if (\ && password_verify(\, \['password_hash'])) {
                // Успешный вход
                \['user_id'] = \['id'];
                \['user_email'] = \['email'];
                \['last_activity'] = time();
                
                header('Location: /dashboard.php');
                exit;
            } else {
                \Не удается найти путь "C:\kern-docs", так как он не существует. System.Management.Automation.ParseException: строка:18 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:19 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:20 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:21 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) System.Management.Automation.ParseException: строка:18 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:19 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:20 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:21 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) System.Management.Automation.ParseException: строка:22 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:23 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:24 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:26 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) Имя "php" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку. System.Management.Automation.ParseException: строка:3 знак:20
+ startSecureSession();
+                    ~
После ''('' ожидалось выражение.

строка:6 знак:16
+ if (isLoggedIn()) {
+                ~
После ''('' ожидалось выражение.

строка:14 знак:37
+     $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ...
+                                     ~
Отсутствует аргумент в списке параметров.

строка:15 знак:36
+     $password = $_POST['password'] ?? '';
+                                    ~~
Непредвиденная лексема "??" в выражении или операторе.

строка:44 знак:26
+         <p>Нет аккаунта? <a href="/register.php">Зарегистрироваться</ ...
+                          ~
Оператор "<" зарезервирован для использования в будущем.
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) Не удается найти путь "C:\a", так как он не существует. Не удается найти путь "C:\Users\efefe\Documents\feco-crm\feco-play-build\.gitignore", так как он не существует. Имя "push" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку. = 'Неверный email или пароль';
            }
        } catch (PDOException \) {
            error_log("Login error: " . \->getMessage());
            \Не удается найти путь "C:\kern-docs", так как он не существует. System.Management.Automation.ParseException: строка:18 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:19 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:20 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:21 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) System.Management.Automation.ParseException: строка:18 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:19 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:20 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:21 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) System.Management.Automation.ParseException: строка:22 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:23 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:24 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:26 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) Имя "php" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку. System.Management.Automation.ParseException: строка:3 знак:20
+ startSecureSession();
+                    ~
После ''('' ожидалось выражение.

строка:6 знак:16
+ if (isLoggedIn()) {
+                ~
После ''('' ожидалось выражение.

строка:14 знак:37
+     $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ...
+                                     ~
Отсутствует аргумент в списке параметров.

строка:15 знак:36
+     $password = $_POST['password'] ?? '';
+                                    ~~
Непредвиденная лексема "??" в выражении или операторе.

строка:44 знак:26
+         <p>Нет аккаунта? <a href="/register.php">Зарегистрироваться</ ...
+                          ~
Оператор "<" зарезервирован для использования в будущем.
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) Не удается найти путь "C:\a", так как он не существует. Не удается найти путь "C:\Users\efefe\Documents\feco-crm\feco-play-build\.gitignore", так как он не существует. Имя "push" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку. = 'Ошибка при входе. Попробуйте позже.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход — FECO Play</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="/" class="navbar-brand">FECO Play</a>
            <ul class="navbar-nav">
                <li><a href="/register.php">Регистрация</a></li>
            </ul>
        </div>
    </nav>

    <section class="section">
        <div class="container" style="max-width: 500px;">
            <h2 class="section-title">Вход</h2>
            
            <?php if (\Не удается найти путь "C:\kern-docs", так как он не существует. System.Management.Automation.ParseException: строка:18 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:19 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:20 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:21 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) System.Management.Automation.ParseException: строка:18 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:19 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:20 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:21 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) System.Management.Automation.ParseException: строка:22 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:23 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:24 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:26 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) Имя "php" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку. System.Management.Automation.ParseException: строка:3 знак:20
+ startSecureSession();
+                    ~
После ''('' ожидалось выражение.

строка:6 знак:16
+ if (isLoggedIn()) {
+                ~
После ''('' ожидалось выражение.

строка:14 знак:37
+     $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ...
+                                     ~
Отсутствует аргумент в списке параметров.

строка:15 знак:36
+     $password = $_POST['password'] ?? '';
+                                    ~~
Непредвиденная лексема "??" в выражении или операторе.

строка:44 знак:26
+         <p>Нет аккаунта? <a href="/register.php">Зарегистрироваться</ ...
+                          ~
Оператор "<" зарезервирован для использования в будущем.
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) Не удается найти путь "C:\a", так как он не существует. Не удается найти путь "C:\Users\efefe\Documents\feco-crm\feco-play-build\.gitignore", так как он не существует. Имя "push" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку.): ?>
                <div class="alert alert-error"><?= htmlspecialchars(\Не удается найти путь "C:\kern-docs", так как он не существует. System.Management.Automation.ParseException: строка:18 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:19 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:20 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:21 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) System.Management.Automation.ParseException: строка:18 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:19 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:20 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:21 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) System.Management.Automation.ParseException: строка:22 знак:24
+           server: `\${{ secrets.FTP_HOST }}`
+                        ~
Используйте в именах переменных "`{", а не "{".

строка:23 знак:26
+           username: `\${{ secrets.FTP_USERNAME }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:24 знак:26
+           password: `\${{ secrets.FTP_PASSWORD }}`
+                          ~
Используйте в именах переменных "`{", а не "{".

строка:26 знак:28
+           server-dir: `\${{ secrets.FTP_DIR }}`
+                            ~
Используйте в именах переменных "`{", а не "{".
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) Имя "php" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку. System.Management.Automation.ParseException: строка:3 знак:20
+ startSecureSession();
+                    ~
После ''('' ожидалось выражение.

строка:6 знак:16
+ if (isLoggedIn()) {
+                ~
После ''('' ожидалось выражение.

строка:14 знак:37
+     $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ...
+                                     ~
Отсутствует аргумент в списке параметров.

строка:15 знак:36
+     $password = $_POST['password'] ?? '';
+                                    ~~
Непредвиденная лексема "??" в выражении или операторе.

строка:44 знак:26
+         <p>Нет аккаунта? <a href="/register.php">Зарегистрироваться</ ...
+                          ~
Оператор "<" зарезервирован для использования в будущем.
   в System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   в Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) Не удается найти путь "C:\a", так как он не существует. Не удается найти путь "C:\Users\efefe\Documents\feco-crm\feco-play-build\.gitignore", так как он не существует. Имя "push" не распознано как имя командлета, функции, файла сценария или выполняемой программы. Проверьте правильность написания имени, а также наличие и правильность пути, после чего повторите попытку.) ?></div>
            <?php endif; ?>
            
            <form method="POST" class="auth-form">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required value="<?= htmlspecialchars(\['email'] ?? '') ?>">
                </div>
                
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">Войти</button>
            </form>
            
            <p style="text-align: center; margin-top: 20px;">
                Нет аккаунта? <a href="/register.php">Зарегистрироваться</a>
            </p>
        </div>
    </section>
</body>
</html>
