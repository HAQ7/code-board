<?php
session_start();
$conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');
$sql = "INSERT INTO question (user_name, title, descriptionText, qdate, num_ans) VALUES (?, ?, ?, now(), 0)";
$stmt = $conn->stmt_init();
$stmt->prepare($sql);
$stmt->bind_param('sss', $_SESSION['username'], $_POST['questionTitle'], $_POST['questionDescription']);
$stmt->execute();
header('Location: ../Profile/profileQuestions.php?created=created');
exit();
