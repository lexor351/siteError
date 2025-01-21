<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/start.css')}}">
</head>
<body>
    <div class="login-container">
        <h2>Вход в систему</h2>
        <form id="login-form" method="post">
            <div class="input-group">
                <label for="username">Логин:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Войти</button>
        </form>
    </div>
</body>
</html>