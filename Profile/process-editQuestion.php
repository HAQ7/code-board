<?php 
session_start();
$conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');
$sql = "UPDATE question SET title = ?, descriptionText = ? where id = ?";
$stmt = $conn->stmt_init();
$stmt->prepare($sql);
$stmt->bind_param('ssi', $_POST['questionTitle'], $_POST['questionDescription'], $_POST['id']);
$stmt->execute();
header('Location: profileQuestions.php?created=edited');
exit();
