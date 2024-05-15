<?php
    session_start();
    include './global.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Code Board | Home</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="global.css">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
            rel="stylesheet"
        />
        <script src="script.js" defer></script>
    </head>
    <body>
        <header>
            <a class='logo' href="index.php"><img src="./assets/code board.svg" alt=""></a>
            <nav>
                <a href="#"
                    ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="#6C63FF"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"
                        />
                    </svg>
                    Home</a
                >
                <a href="Profile/profileQuestions.php"
                    ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                        />
                    </svg>

                    Profile</a
                >
                <a href="Search/search.php"
                    ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"
                        />
                    </svg>
                    Search</a
                >
                <?php 
                    if(!isset($_SESSION['username'])) {
                        echo '<a href="Sign/signUp.php"
                        ><svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z"
                            />
                        </svg>
                        Sign up</a
                    >
                    <a href="Sign/login.php"
                        ><svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25"
                            />
                        </svg>
                        Log in</a
                    >';}
                    else {
                        echo '<a href="logout.php"
                        ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25"
                        />
                    </svg>
                        Log out</a>';
                    }
                ?>
            
            </nav>

            <?php
            if (isset($_SESSION['username'])) {
                echo "<div class='user'>
                Signed in as,<span class='highlightWord'> ".$_SESSION['username']."</p>
                </div>";
            }
            ?>        
            
        </header>
        <?php 
            if (isset($_GET['logout'])) {
                echo '<h1 class="logout-message">
                <span class="block">
                    You have been logged out
                </span>
            </h1>';
            }
        ?>
        <section class="grid-section">
            <div class="grid-div">
                <div class="help block">
                    Need a <span class="highlightWord">Help</span> for a <br />
                    code problem ?
                </div>
                <img
                    src="assets/rightArrow90.svg"
                    alt=""
                    class="rightArrow90"
                /><img
                    src="assets/leftArrow90.svg"
                    alt=""
                    class="leftArrow90"
                />
                <div class="solution block">
                    Need alternative <br />
                    <span class="highlightWord">Solutions</span> ?
                </div>
                <div class="codeBoardTitle block">
                    <span class="highlightWord">Code Board</span> got you
                    covered
                </div>
            </div>
        </section>
        <section class="info-section">
            <div class="info-half">
                <div class="img-wrapper">
                    <div class="glow"></div>
                    <img src="assets/codeInspection.svg" alt="" />
                </div>
                <div class="info info-right block">
                    <div>
                        Just <b>Post</b> your <b>code problem </b> <br />
                        and wait for the
                        <span class="highlightWord">solutions</span> br to come
                    </div>
                </div>
            </div>
            <div class="info-half">
                <div class="info info-left block">
                    <div>
                        Join our <span class="highlightWord">community</span> of
                        <br />
                        <b> passionate developers </b> by solving code <br />
                        problems
                    </div>
                </div>
                <div class="img-wrapper">
                    <div class="glow"></div>
                    <img src="assets/community.svg" alt="" />
                </div>
            </div>
        </section>
        <section class="questions-section">
            <div class="recent-questions">
                <img src="assets/arrowToLeftTrig.svg" alt="" />
                <h1>
                    Most <span class="highlightWord time-holder"><img class='svg main' src="./assets/time.svg" alt="">recent </span> questions <img class='svg' src="./assets/QuestionMarkBlack.svg" alt="">
                </h1>
                <div class="question-list">
                    
                <?php 
                // connect to database and fetch 10 most recent questions using username 'root' and password '' and database name 'code_board' in localhost
                $conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');
                $sql = "SELECT * FROM question ORDER BY qDate DESC LIMIT 10";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div  class="question block">
                        <a href="./Question/questionView.php?id='.$row['id'].'" class="question-title">'.$row['title'].'</a>
                        <p class="question-user">asked by <span class="highlightWord">'.$row['user_name'].'</span></p>
                        <p class="question-time">'.getDateDiff($row['qDate']).'</p>';
                        if (isset($_SESSION['username']) && $_SESSION['username'] == $row['user_name']) {
                            echo "<div class='img-holder'>
                                <a href='./Profile/profileAskQuestion.php?id=".$row['id']."'><img src='./assets/edit.svg' alt='' /></a>
                                <a href='./Question/questionView.php?deleted=question&id=".$row['id']."&deleteId=".$row['id']."'><img src='./assets/delete.svg' alt='' /></a>
                            </div>";}
                    echo '</div>';
                    }
                }
                ?>

                </div>
            </div>
            <div class="controls controls-recent">
                <img src="assets/leftArrowNav.svg" alt="">
                <img src="assets/rightArrowNav.svg" alt="">
            </div>
            <div class="answered-questions">
                <img src="assets/arrowToRightTrig.svg" alt="" />
                <h1>
                    Highest
                    <span class="highlightWord star-holder"><img class='svg main' src="./assets/star.svg" alt=""> answered</span> questions <img class='svg' src="./assets/QuestionMarkBlack.svg" alt="">
                </h1>
                <div class="question-list">
                    <?php
                    // connect to database and fetch 10 highest answered questions using username 'root' and password '' and database name 'code_board' and port 4306 in localhost
                    $sql = "SELECT * FROM question ORDER BY num_ans DESC LIMIT 10";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div  class="question block">
                            <a href="./Question/questionView.php?id='. $row['id'] .'" class="question-title">'.$row['title'].'</a>
                            <p class="question-user">asked by <span class="highlightWord">'.$row['user_name'].'</span></p>
                            <p class="question-time">'.$row['num_ans'].' answers</p>';
                            if (isset($_SESSION['username']) && $_SESSION['username'] == $row['user_name']) {
                                echo "<div class='img-holder'>
                                    <a href='./Profile/profileAskQuestion.php?id=".$row['id']."'><img src='./assets/edit.svg' alt='' /></a>
                                    <a href='./Question/questionView.php?deleted=question&id=".$row['id']."&deleteId=".$row['id']."'><img src='./assets/delete.svg' alt='' /></a>
                                </div>";}
                        echo '</div>';
                        }
                    }
                    ?>

                </div>
            </div>
            <div class="controls controls-answered">
                <img src="assets/leftArrowNav.svg" alt="">
                <img src="assets/rightArrowNav.svg" alt="">
            </div>
        </section>
        <section>
            <footer class="block">
                <div class="footer-list">
                    <p>Socials <img src="./assets/globe.svg" alt=""></p>
                    <a href="">Youtube</a><a href="">Instagram</a><a href="">X</a>
                </div>
                <div class="footer-list">
                    <p>Site <img src="./assets/home.svg" alt=""></p>
                    <a href="">Profile</a><a href="">Search</a><a href="">Sign up</a><a href="">Log in</a>
                </div>
                <div class="footer-list">
                    <p>Contact us <img src="./assets/contact.svg" alt=""></p>
                    <textarea rows="4" cols="50" placeholder="Write to us here" ></textarea>
                </div>
            </footer>
            <img src="assets/footerArrow.svg" alt="">
        </section>
    </body>
</html>
