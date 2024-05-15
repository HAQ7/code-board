<?php
$conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');
//query to check if the user exists
$sql = "SELECT * FROM user WHERE user_name = '". $_POST['username'] ."' AND user_password = '". $_POST['password']."';";
$result = $conn->query($sql);
try {
    if ($result->num_rows == 0) {
        throw new Exception('Invalid username or password');
    }
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header('Location: ../Profile/profileQuestions.php');
    echo 'Logged in';
    exit();
} catch (Exception $e) {
        header('Location: loginWrong.php');
        echo 'Invalid username or password';
        exit();
}
