<?php
session_start();
$conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');
// update rating of an answer
$sql = "UPDATE rating set rating = ? where answerId = ? and user_name = ?";
$stmt = $conn->stmt_init();
$stmt->prepare($sql);
// The rating is stored as a intger
$stmt->bind_param('iis', $_GET['rating'], $_GET['id'], $_SESSION['username']);
$stmt->execute();
//update the average rating of the answer
$sql = "UPDATE answers SET averageRating = (SELECT AVG(rating) FROM rating WHERE answerId = ?) WHERE id = ?";
$stmt = $conn->stmt_init();
$stmt->prepare($sql);
$stmt->bind_param('ii', $_GET['id'], $_GET['id']);
$stmt->execute();

header('Location: questionView.php?created=rated&id='.$_GET['questionId']);
exit();
