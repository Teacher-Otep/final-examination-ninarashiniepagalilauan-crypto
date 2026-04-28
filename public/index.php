<?php require_once __DIR__ . '/../includes/get_students.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <img src="logo.png" id="logo" onclick="showSection('home')">

    <div class="nav-buttons">
        <button onclick="showSection('create')">Create</button>
        <button onclick="showSection('read')">Read</button>
        <button onclick="showSection('update')">Update</button>
        <button onclick="showSection('delete')">Delete</button>
    </div>
</div>

<section id="home" class="section">
    <h1>Student Management System</h1>
</section>

<section id="create" class="section">
    <form action="../includes/insert.php" method="POST">
        <input name="surname" placeholder="Surname">
        <input name="name" placeholder="Name">
        <input name="middlename" placeholder="Middle Name">
        <input name="address" placeholder="Address">
        <input name="contact" placeholder="Contact">
        <button type="submit">Save</button>
    </form>
</section>

<section id="read" class="section">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>

        <?php foreach($students as $s): ?>
        <tr>
            <td><?= $s['id'] ?></td>
            <td><?= $s['surname']." ".$s['name'] ?></td>
            <td>
                <button onclick="editStudent('<?= $s['id'] ?>','<?= $s['name'] ?>','<?= $s['surname'] ?>','<?= $s['middlename'] ?>','<?= $s['address'] ?>','<?= $s['contact_number'] ?>')">Edit</button>
                <a href="../includes/delete.php?id=<?= $s['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>

<section id="update" class="section">
    <form action="../includes/update.php" method="POST">
        <input type="hidden" id="edit_id" name="id">
        <input id="edit_surname" name="surname" placeholder="Surname">
        <input id="edit_name" name="name" placeholder="Name">
        <input id="edit_middlename" name="middlename" placeholder="Middle Name">
        <input id="edit_address" name="address" placeholder="Address">
        <input id="edit_contact" name="contact" placeholder="Contact">
        <button type="submit">Update</button>
    </form>
</section>

<section id="delete" class="section">
    <h2>Delete Students</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>

        <?php foreach($students as $s): ?>
        <tr>
            <td><?= $s['id'] ?></td>
            <td><?= $s['surname']." ".$s['name'] ?></td>
            <td>
                <a href="../includes/delete.php?id=<?= $s['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>

<script src="script.js"></script>
</body>
</html>