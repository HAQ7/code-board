<?php
session_start();
$conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');
$sql = "INSERT INTO comments (user_name, textField, questionId, answerId, cdate) VALUES (?, ?, null, ?, now())";
$stmt = $conn->stmt_init();
$stmt->prepare($sql);
$stmt->bind_param('sss', $_SESSION['username'], $_POST['comment'], $_POST['answerId']);
$stmt->execute();
header('Location: answerCommentView.php?created=created&id='.$_POST['answerId']);
exit();
