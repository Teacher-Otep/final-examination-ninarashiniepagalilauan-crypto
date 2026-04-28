<?php
require_once 'db.php';

$stmt = $pdo->prepare("INSERT INTO students (name, surname, middlename, address, contact_number) VALUES (?, ?, ?, ?, ?)");
$stmt->execute([$_POST['name'], $_POST['surname'], $_POST['middlename'], $_POST['address'], $_POST['contact']]);

header("Location: ../public/index.php?status=success");
?>