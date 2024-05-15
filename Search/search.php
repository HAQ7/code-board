<?php
    session_start();
    include 'process-search.php';
    include '../global.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../global.css" />
        <link rel="stylesheet" href="search.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
            rel="stylesheet"
        />
        <title>Code Board | Search</title>
    </head>
    <body>
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
                <a href="../Profile/profileQuestions.php"
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
                <a href="#"
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
                        echo '<a href="../Sign/signUp.php"
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
                    <a href="../Sign/login.php"
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
                        echo '<a href="../logout.php"
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
        <section>
        <form action="search.php" method="get">
                    <input
                        type="text"
                        name="search"
                        id="search"
                        placeholder="Search for a question"
                        value="<?php if (isset($_GET['search'])) { echo $search;} ?>"
                    />
                    <button type="submit">Search</button>
                </form>
            <div class="grid-container">
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<div class='question block'>
                        <a href='../Question/questionView.php?id=". $row['id'] ."' class='question-title'>".$row['title']."</a>
                        <p class='question-user'>asked by <span class='highlightWord'>".$row['user_name']."<span></p>
                        <p class='question-answer-number'>".$row['num_ans']." answers</p>
                        <p class='question-time'>". getDateDiff($row['qDate']) ."</p>";
                        if (isset($_SESSION['username']) && $_SESSION['username'] == $row['user_name']) {
                            echo "<div class='img-holder'>
                                <a href='../Profile/profileAskQuestion.php?id=".$row['id']."'><img src='../assets/edit.svg' alt='' /></a>
                                <a href='../Question/questionView.php?deleted=question&id=".$row['id']."&deleteId=".$row['id']."'><img src='../assets/delete.svg' alt='' /></a>
                            </div>";}
                    echo "</div>";
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
        </section>
    </body>
</html>
