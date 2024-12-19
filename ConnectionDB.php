<?php

class ConnectionDB
{
    public $dsn = "mysql:host=MySQL-8.2;dbname=student";
    public $username = 'root';
    public $password = '';

    public function get_all_students() {
        $sql = "SELECT * FROM student";
    }
}