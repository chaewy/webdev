<?php
session_start();
require_once '../../classes/dbh.classes.php';

// Check if it's a POST request and the user is logged in
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['userid'])) {
    $userId = $_SESSION['userid'];
    $bookId = $_POST['book_id'];

    // Insert the favorite into the database
    $db = new Dbh();
    $conn = $db->conn;

    // Check if the book is not already in the favorites to avoid duplicates
    $checkStmt = $conn->prepare('SELECT COUNT(*) FROM favorites WHERE users_id = ? AND book_id = ?');
    $checkStmt->execute([$userId, $bookId]);
    $count = $checkStmt->fetchColumn();

    if ($count == 0) {
        $insertStmt = $conn->prepare('INSERT INTO favorites (users_id, book_id) VALUES (?, ?)');
        $insertStmt->execute([$userId, $bookId]);
        header('Location: Favpage.php?succesulBaby');
        //better add noti when user add to fav
    } else {
        header('Location: ../Home/home.php?alreadyhave');
        //better add noti when user already add to fav
        
    }
} else {
    echo 'Invalid request';
}
?>