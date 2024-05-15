<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: ../Sign/login.php');
    }
    include 'process-questions.php';
    include '../global.php';
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../global.css" />
        <link rel="stylesheet" href="profile.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
            rel="stylesheet"
        />
        <script src="confirm.js" defer></script>
        <script src="../global.js" defer></script>
        <title>Code Board | Profile</title>
    </head>
    <body>
        <?php 
            if (isset($_GET['created'])) {
                echo "<div class='alert block'>
                <div>Question ".$_GET['created']."<span class='highlightWord'> successfully!</span></div>
                <div class='progress'></div>
                </div>";
            }
            if (isset($_GET['deleted'])) {
                echo "<div class='backdrop'>
                <div class='modal block'>
                    <div class='modal-header'>
                        <h2>Delete question</h2>
                    </div>
                    <div class='modal-body'>
                        <p>Are you sure you want to delete this question?</p>
                    </div>
                    <form action='process-deleteQuestion.php' class='modal-footer'>
                        <input type='hidden' name='id' value='".$_GET['id']."' />
                        <button class='cancel' type='button'>Cancel</button>
                        <button class='delete' type='submit'>Delete</button>
                    </form>
                </div>
            </div>";
            } 
        ?>

        <header>
        <a class='logo' href="../index.php"><img src="../assets/code board.svg" alt=""></a>
            <nav>
                <a href="../index.php"
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
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"
                        />
                    </svg>
                    Home</a
                >
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
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                        />
                    </svg>

                   <span class="highlightWord">Profile</span> </a
                >
                <a href="../Search/search.php"
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
                <a href="../logout.php"
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
                    Log out</a
                >
            </nav>
            <?php
            if (isset($_SESSION['username'])) {
                echo "<div class='user'>
                Signed in as,<span class='highlightWord'> ".$_SESSION['username']."</p>
                </div>";
            }
            ?>
        </header>
        <section>
            <div style="width: 300px; height:100%;"></div>
            <div class="menu block">
                <a href="#"
                    ><svg
                        width="33"
                        height="32"
                        viewBox="0 0 33 32"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M13.3152 8.53167C15.3002 6.82333 18.5209 6.82333 20.5058 8.53167C22.4925 10.24 22.4925 13.01 20.5058 14.7183C20.1617 15.0167 19.777 15.2617 19.3701 15.455C18.1073 16.0567 16.9122 17.12 16.9122 18.5V19.75M32.1664 16C32.1664 17.9698 31.7718 19.9204 31.0051 21.7403C30.2385 23.5601 29.1147 25.2137 27.6981 26.6066C26.2814 27.9995 24.5996 29.1044 22.7487 29.8582C20.8978 30.612 18.914 31 16.9105 31C14.9071 31 12.9233 30.612 11.0724 29.8582C9.22144 29.1044 7.53965 27.9995 6.12301 26.6066C4.70637 25.2137 3.58263 23.5601 2.81595 21.7403C2.04927 19.9204 1.65466 17.9698 1.65466 16C1.65466 12.0218 3.26197 8.20644 6.12301 5.3934C8.98404 2.58035 12.8644 1 16.9105 1C20.9567 1 24.837 2.58035 27.6981 5.3934C30.5591 8.20644 32.1664 12.0218 32.1664 16ZM16.9105 24.75H16.9241V24.7633H16.9105V24.75Z"
                            stroke="#6C63FF"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                    <span class="highlightWord">Your questions</a
                >
                <a href="profileAnswers.php"
                    ><svg
                        width="33"
                        height="32"
                        viewBox="0 0 33 32"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M11.8252 17.25L15.6392 21L21.9958 12.25M32.1664 16C32.1664 17.9698 31.7718 19.9204 31.0051 21.7403C30.2385 23.5601 29.1147 25.2137 27.6981 26.6066C26.2814 27.9995 24.5996 29.1044 22.7487 29.8582C20.8978 30.612 18.914 31 16.9105 31C14.9071 31 12.9233 30.612 11.0724 29.8582C9.22144 29.1044 7.53965 27.9995 6.12301 26.6066C4.70637 25.2137 3.58263 23.5601 2.81595 21.7403C2.04927 19.9204 1.65466 17.9698 1.65466 16C1.65466 12.0218 3.26197 8.20644 6.12301 5.3934C8.98404 2.58035 12.8644 1 16.9105 1C20.9567 1 24.837 2.58035 27.6981 5.3934C30.5591 8.20644 32.1664 12.0218 32.1664 16Z"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                    Your answers</a
                >
                <a href="profileComments.php"
                    ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                    </svg>

                    Your Comments</a
                >
                <a href="profileAskQuestion.php"
                    ><svg
                        width="33"
                        height="32"
                        viewBox="0 0 33 32"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M16.9105 11V21M21.9958 16H11.8252M32.1664 16C32.1664 17.9698 31.7718 19.9204 31.0051 21.7403C30.2385 23.5601 29.1147 25.2137 27.6981 26.6066C26.2814 27.9995 24.5996 29.1044 22.7487 29.8582C20.8978 30.612 18.914 31 16.9105 31C14.9071 31 12.9233 30.612 11.0724 29.8582C9.22144 29.1044 7.53965 27.9995 6.12301 26.6066C4.70637 25.2137 3.58263 23.5601 2.81595 21.7403C2.04927 19.9204 1.65466 17.9698 1.65466 16C1.65466 12.0218 3.26197 8.20644 6.12301 5.3934C8.98404 2.58035 12.8644 1 16.9105 1C20.9567 1 24.837 2.58035 27.6981 5.3934C30.5591 8.20644 32.1664 12.0218 32.1664 16Z"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                    Ask a question</a
                >
            </div>
            <div class="content">
                <form action="profileQuestions.php" method="get">
                    <input
                        type="text"
                        name="search"
                        id="search"
                        placeholder="Search for a question"
                        value="<?php if (isset($_GET['search'])) { echo $search;} ?>"
                    />
                    <button type="submit">Search</button>
                </form>
                <div class="grid-container-questions">
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<div class='question block'>
                        <a href='../Question/questionView.php?id=". $row['id'] ."' class='question-title'>".$row['title']."</a>
                        <p class='question-answer-number'>".$row['num_ans']." answers</p>
                        <div class='img-holder'>
                            <a href='profileAskQuestion.php?id=".$row['id']."'><img src='../assets/edit.svg' alt='' /></a>
                            <a href='profileQuestions.php?deleted=true&id=".$row['id']."'><img src='../assets/delete.svg' alt='' /></a>
                        </div>
                        <p class='question-time'>". getDateDiff($row['qDate']) ."</p>
                    </div>";
                    }
                    ?>
                </div>
                
                <?php
                if ($pages > 1) {
                    echo "
                <div class='pagination block'>
                    <a href='?pageNum=1" . "&search=" .getSearch() ."'>
                        <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                            <path stroke-linecap='round' stroke-linejoin='round' d='m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5' />
                        </svg>
                    </a>";
                
                    if ($pageNum == 1) {
                        echo "<a href='#'><span class='highlightWord'>1</span></a>
                        <a href='?pageNum=2" . "&search=" .getSearch() ."'>2</a>";
                        if ($pages > 2) {
                            echo "<a href='?pageNum=3" . "&search=" .getSearch() ."'>3</a>";
                        }
                    } else if ($pageNum != $pages) {
                        echo "<a href='?pageNum=".$pageNum - 1 ."&search=" .getSearch() ."'>".$pageNum - 1 ."</a>
                        <a href='?pageNum=#'><span class='highlightWord'>$pageNum</span></a>
                        <a href='?pageNum=".$pageNum +1 ."&search=" .getSearch() ."'>".$pageNum + 1 ."</a>";
                    } else {
                        if ($pages > 2) {
                            echo "<a href='?pageNum=".$pageNum - 2 ."&search=" .getSearch() ."'>".$pageNum - 2 ."</a>";
                        }
                        echo "<a href='?pageNum=".$pageNum - 1 ."&search=" .getSearch() ."'>".$pageNum - 1 ."</a>
                        <a href='?pageNum=#'><span class='highlightWord'>$pageNum</span></a>";
                    }
                  
                    echo "<a href='?pageNum=".$pages ."&search=" .getSearch() ."'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                    <path stroke-linecap='round' stroke-linejoin='round' d='m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5' />
                  </svg>
                  </a>";
                }
                    ?>
                </div>
            </div>
        </section>
    </body>
</html>
