<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    if (empty($title) || empty($author) || empty($price) || empty($quantity)) {
        header("Location: addBook.php?error=All fields are required");
        exit();
    }

    $sql = "INSERT INTO books (title, author, price, quantity) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssdi", $title, $author, $price, $quantity);

        if ($stmt->execute()) {
            header("Location: addBook.php?success=Book added successfully!");
            exit();
        } else {
            header("Location: addBook.php?error=Error adding book: " . $conn->error);
            exit();
        }
        $stmt->close();
    } else {
        header("Location: addBook.php?error=Database error: " . $conn->error);
        exit();
    }
} else {
    header("Location: addBook.php");
    exit();
}
$conn->close();
?>
