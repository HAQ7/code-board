<?php
$conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');
// delete the question with the id of the question that was clicked on
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM answers WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    // update the number of answers for the question
    $sql = "UPDATE question SET num_ans = num_ans - 1 WHERE id = ?";
    $stmt = $conn->stmt_init();
    $stmt->prepare($sql);
    $stmt->bind_param('s', $_GET['questionId']);
    $stmt->execute();
    header('Location: questionView.php?created=deleted&id='.$_GET['questionId']);
}

// UPDATE question SET num_ans = (SELECT count(*) FROM answers WHERE question.id = answers.questionId);