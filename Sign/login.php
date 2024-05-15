<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('Location: ../Profile/profileQuestions.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../global.css" />
        <link rel="stylesheet" href="sign.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
            rel="stylesheet"
        />
        <title>Code Board | Log in</title>
    </head>
    <body>
    <a class='logo' href="../index.php"><img src="../assets/code board.svg" alt=""></a>
        <form action="process-login.php" method='post' class="block">
            <h1>Log in</h1>
            <label for="username">Username</label>
            <input
                required
                maxlength="25"
                type="text"
                name="username"
                id="username"
                placeholder="insert username here"
            />
            <label for="password">Password</label>
            <input
                required
                maxlength="25"
                type="password"
                name="password"
                id="password"
                placeholder="insert password here"
                minlength="5"
            />
            <button type="submit">Log in</button>
            <p>Don't have an account? <a href="signUp.php">Sign up</a></p>
        </form>
    </body>
</html>
