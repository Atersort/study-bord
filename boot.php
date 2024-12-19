<?php
session_start();

function pdo(): PDO
{
  static $pdo;

  if(!$pdo) {
      $config = include __DIR__.'/config.php';

      $dsn= $config['dsn_db'];
      $pdo = new PDO($dsn, $config['username_db'], $config['password_db']);

  }
return $pdo;
}