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
                <form action="do_register.php" method="post">
                    <h2 class="text-center mb-4">Регистрация</h2>
                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input value="<?php echo $_POST['student_number'] ?? ''?>" type="text" class="form-control" id="name" name="name" placeholder="Введите имя">
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Фамилия</label>
                        <input value="<?php echo $_POST['student_number'] ?? ''?>" type="text" class="form-control" id="surname" name="surname" placeholder="Введите фамилию">
                    </div>
                    <div class="mb-3">
                        <label for="student_number" class="form-label">Номер зачетной книжки</label>
                        <input value="<?php echo $_POST['student_number'] ?? ''?>" type="text" class="form-control" id="student_number" name="student_number" placeholder="Введите номер зачетной книжки">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input value="<?php echo $_POST['password'] ?? ''?>" type="password" class="form-control" name="password" id="password" placeholder="Введите ваш пароль">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Повторите пароль</label>
                        <input value="<?php echo $_POST['password'] ?? ''?>" type="password" class="form-control" name="password" id="password" placeholder="Введите пароль для проверки корректности ввода данных">
                    </div>
                    <div class="form-check mb-3">
                        <input name="flag" type="hidden" value="0">
                        <input name="flag" type="checkbox" class="form-check-input" value="1" id="rememberMe" <?php
                        if(!empty($_POST['flag'])) {
                            echo 'checked';
                        }
                        ?>>
                        <label class="form-check-label" for="rememberMe">Запомнить данные</label>
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
