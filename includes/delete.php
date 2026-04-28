<?php
require_once 'db.php';

$stmt = $pdo->prepare("DELETE FROM students WHERE id=?");
$stmt->execute([$_GET['id']]);

header("Location: ../public/index.php?status=deleted");
?>