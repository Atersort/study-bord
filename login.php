<?php

$dsn = "mysql:host=MySQL-8.2";
$dbname = "study-bord";
$username = 'root';
$password = '';

function loginStudents($dsn, $dbname, $username, $password) {

    $pdo = new PDO($dsn, $username, $password);
    $sql = "SELECT * FROM students WHERE id=?, password=?";
    $statement = $pdo->prepare($sql);
    $statement->execute([$_POST['login'], $_POST['password']]);
}

if (!empty($_POST['login']) && !empty($_POST['password'])) {
    loginStudents($dsn, $dbname, $username, $password);
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<header>

</header>
<main>
    <section>
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <form>
                    <h2 class="text-center mb-4">Авторизация</h2>
                    <div class="mb-3">
                        <label for="email" class="form-label">Зачетная книжка</label>
                        <input type="email" class="form-control" id="email" placeholder="Введите номер зачетной книжки">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="password" placeholder="Введите ваш пароль">
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Запомнить меня</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Войти</button>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                    <a href="#" class="text-decoration-none">Забыли пароль?</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>
</body>
</html>
