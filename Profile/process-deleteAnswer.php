<?php
$conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');
// delete the question with the id of the question that was clicked on
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM answers WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    header('Location: profileAnswers.php?created=deleted');
}