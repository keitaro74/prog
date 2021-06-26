<?php

$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["pass"];


try {
    $pdo = new PDO('mysql:dbname=fennec;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}


$stmt = $pdo->prepare("INSERT INTO userid(id, name, email, pass)VALUES(NULL, :name, :email, :pass)");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
$status = $stmt->execute();


if ($status==false) {
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    header("Location: registration.php");
    exit;
}
