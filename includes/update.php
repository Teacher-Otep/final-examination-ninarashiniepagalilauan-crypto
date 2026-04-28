<?php
require_once 'db.php';

$stmt = $pdo->prepare("UPDATE students SET name=?, surname=?, middlename=?, address=?, contact_number=? WHERE id=?");
$stmt->execute([$_POST['name'], $_POST['surname'], $_POST['middlename'], $_POST['address'], $_POST['contact'], $_POST['id']]);

header("Location: ../public/index.php?status=updated");
?>