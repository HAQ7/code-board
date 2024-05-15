<?php 
session_start();
$conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');
$sql = "UPDATE comments SET textField = ? where id = ?";
$stmt = $conn->stmt_init();
$stmt->prepare($sql);
$stmt->bind_param('si', $_POST['comment'], $_POST['id']);
$stmt->execute();
if ($_POST['answerId']) {
    header('Location: answerCommentView.php?created=edited&id='.$_POST['answerId']);
} else {
    header('Location: questionCommentView.php?created=edited&id='.$_POST['questionId']);

}

exit();
