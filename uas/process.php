<?php
include 'koneksi.php';

// Add student
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO students (name, email, phone) VALUES ('$name', '$email', '$phone')";
    mysqli_query($koneksi, $sql);

    header('Location: index.php');
}

// Delete student
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM students WHERE nim=$id";
    mysqli_query($koneksi, $sql);

    header('Location: index.php');
}
?>
