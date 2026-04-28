<?php
require_once 'db.php';

$search = $_GET['search'] ?? '';

if ($search !== '') {
    $stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
    $stmt->execute([$search]);
    $students = $stmt->fetchAll();
} else {
    $stmt = $pdo->query("SELECT * FROM students ORDER BY id DESC");
    $students = $stmt->fetchAll();
}
?>