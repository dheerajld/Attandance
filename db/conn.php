<?php

// //localhost
// $host = 'localhost:3308';
// $db = 'attandance_db';
// $user = 'root';
// $pass ='';
// $charset = 'utf8mb4_0900_ai_ci';

//Remote Access
$host = 'remotemysql.com';
$db = '1iCvZO70qP';
$user = '1iCvZO70qP';
$pass ='vjHCm0PLq7';
$charset = 'utf8mb4_0900_ai_ci';

$dsn = "mysql:host=$host;dbname=$db;charse=$charset";

try{
    $pdo = new PDO($dsn,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
     throw new PDOException($e->getMessage());
}

require_once 'crud.php';

$crud = new crud($pdo);




?>