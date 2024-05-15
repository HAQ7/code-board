<?php
session_start();
$conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');
$sql = "INSERT INTO answers (user_name, answerText, questionId, adate) VALUES (?, ?, ?, now())";
$stmt = $conn->stmt_init();
$stmt->prepare($sql);
$stmt->bind_param('sss', $_SESSION['username'], $_POST['answer'], $_POST['questionId']);
$stmt->execute();
// update the number of answers for the question
$sql = "UPDATE question SET num_ans = num_ans + 1 WHERE id = ?";
$stmt = $conn->stmt_init();
$stmt->prepare($sql);
$stmt->bind_param('s', $_POST['questionId']);
$stmt->execute();
header('Location: questionView.php?created=created&id='.$_POST['questionId']);
exit();
