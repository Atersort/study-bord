<?php

require_once __DIR__.'/boot.php';

$statement = pdo()->prepare('SELECT * FROM student WHERE student_number = :student_number');
$statement->execute(['student_number'=>$_POST['student_number']]);

if($statement->rowCount() > 0) {
    flash('Это имя пользователя уже занято');
    header('Location: /');
    die;
};

$statement = pdo()->prepare("INSERT INTO student (name, surname, student_number, password) VALUES (:name, :surname, :student_number, :password)");
$statement->execute([
    'name' => $_POST["name"],
    'surname' => $_POST["surname"],
    'student_number' => $_POST["student_number"],
    'password' => $_POST["password"]
]);

header('Location: login.php');