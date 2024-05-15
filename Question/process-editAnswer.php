<?php 
session_start();
$conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');
$sql = "UPDATE answers SET answerText = ? where id = ?";
$stmt = $conn->stmt_init();
$stmt->prepare($sql);
$stmt->bind_param('si', $_POST['answer'], $_POST['id']);
$stmt->execute();
header('Location: questionView.php?created=edited&id='.$_POST['questionId']);
exit();
