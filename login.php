<?php
//
////
//require "./config.php";
//
//// получаем пост запросы
//$student_number = $_POST['student_number'] ?? "";
//$password = $_POST['password'] ?? "";
//
//// подключение к базе
//$dsn_db = "mysql:host=MySQL-8.2;dbname=student-table";
//$username_db = 'root';
//$password_db = '';
//
//try {
//    if (!empty($login) and !empty($password)) {
//        echo $login . ' and ' . $password . ' !empty';
//    } else {
//        $pdo = new PDO($dsn_db, $username_db, $password_db);
//        $sql = "SELECT * FROM student WHERE student_number=$student_number AND password=$password";
//        $statement = $pdo->prepare($sql);
//        $statement->execute();
//
//        var_dump($statement->fetchAll());
//    }
//}catch (PDOException $e) {
//    echo "Ошибка соединения с базой: $e";
//};
//
//?>

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
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Панель навигации</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
                    <nav class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Студенты</a>
                        <a class="nav-link active" href="#">Экзамены</a>
                        <a class="nav-link active" href="#">Предметы</a>
                    </nav>
<?php if (!empty($_SESSION['authorisation'])): ?>
                    <div class="d-flex justify-content-between">
                        <a class="nav-link active " href="/exit.php">Выход</a>
                        <?php else:?>
                        <div class="d-flex justify-content-between">
                            <a class="nav-link active " href="/register.php">Регистрация</a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<main>
    <section>

        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <form action="do_login.php" method="post">
                    <h2 class="text-center mb-4">Авторизация</h2>
                    <div class="mb-3">
                        <label for="login" class="form-label">Зачетная книжка</label>
                        <input value="<?php echo $_POST['student_number'] ?? ''?>" type="text" class="form-control" id="login" name="student_number" placeholder="Введите номер зачетной книжки">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input value="<?php echo $_POST['password'] ?? ''?>" type="password" class="form-control" name="password" id="password" placeholder="Введите ваш пароль">
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
