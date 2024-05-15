<?php
$conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');
// delete the question with the id of the question that was clicked on
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM comments WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($_GET['answerId']) {
        header('Location: answerCommentView.php?created=deleted&id='.$_GET['answerId']);
    } else {
        header('Location: questionCommentView.php?created=deleted&id='.$_GET['questionId']);
    
    }
}
