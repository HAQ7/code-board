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
        <script src="form.js" defer></script>
        <title>Code Board | Sign up</title>
    </head>
    <body>
    <a class='logo' href="../index.php"><img src="../assets/code board.svg" alt=""></a>
        <form action="process-signUp.php" method='post' class="block">
            <h1>Sign up</h1>
            <label for="username">Username</label>
            <input
                maxlength="25"
                type="text"
                name="username"
                id="username"
                placeholder="insert username here"
            />
            <label for="email">Email</label>
            <input
                type="email"
                name="email"
                id="email"
                placeholder="insert email here"
                minlength="5"
                maxlength="50"
            />
            <label for="password">Password</label>
            <input
                required
                maxlength="25"
                minlength="5"
                type="password"
                name="password"
                id="password"
                placeholder="insert password here"
            />
            <label for="confirmPassword">Confirm Password</label>
            <input
                required
                maxlength="25"
                type="password"
                name="confirmPassword"
                id="confirmPassword"
                placeholder="Confirm password here"
            />
            <button type="submit">Sign up</button>
            <p>Already have an account? <a href="login.html">Log in</a></p>
            <div class="error">
                Passwords are not the same, please try again
            </div>
            <div class="error show">
                Email already exists
            </div>
        </form>
    </body>
</html>
