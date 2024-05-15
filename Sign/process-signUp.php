<?php
$conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');
$sql = "INSERT INTO user (user_name, user_email, user_password) VALUES (?, ?, ?)";
$stmt = $conn->stmt_init();
$stmt->prepare($sql);
$stmt->bind_param('sss', $_POST['username'], $_POST['email'], $_POST['password']);

try {
    $stmt->execute();
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header('Location: ../Profile/profileQuestions.php');
    exit();
} catch (Exception $e) {
    if (str_contains($e->getMessage(),'user_email')) {
        header('Location: signUpEmail.php');
        exit();
    } else if (str_contains($e->getMessage(),'PRIMARY')) {
        header('Location: signUpUser.php');
        exit();
    }
}
