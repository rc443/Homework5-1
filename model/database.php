<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=rc443';
    $username = 'rc443';
    $password = 'Gpsc539F';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
