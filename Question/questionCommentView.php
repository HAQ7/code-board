<?php
    session_start();
    include '../global.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Code Board | Home</title>
        <link rel="stylesheet" href="../global.css">
        <link rel="stylesheet" href="question.css">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
            rel="stylesheet"
        />
        <script src="createForm.js" defer></script>
        <script src="../global.js" defer></script>
    </head>
    <body>
    <?php 
            if (isset($_GET['created'])) {
                echo "<div class='alert block'>
                <div>Comment ".$_GET['created']."<span class='highlightWord'> successfully!</span></div>
                <div class='progress'></div>
                </div>";
            }
            if (isset($_GET['deleted'])) {
                echo "<div class='backdrop'>
                <div class='modal block'>
                    <div class='modal-header'>
                        <h2>Delete comment</h2>
                    </div>
                    <div class='modal-body'>
                        <p>Are you sure you want to delete this comment?</p>
                    </div>";
                        echo "<form action='process-deleteComment.php' class='modal-footer'>
                        <input type='hidden' name='questionId' value='".$_GET['id']."' />
                        <input type='hidden' name='id' value='".$_GET['deleteId']."' />
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
        <section class='questions'>
            
            <?php
                    $questionId = $_GET['id'];
                    $conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');
                    $sql = "SELECT * FROM question WHERE id = $questionId";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo  "<form action='questionView.php' method='get' class='back-form'>
                            <input type='hidden' name='id' value='".$questionId."'>
                                <button class='back' type='submit'>Back to Question</button>
                            </form>
                        <div class='content block'>";
                    echo "<h2>".$row['title']."</h2>";
                    echo "<p>".$row['descriptionText']."</p>";
                    echo "<div class='content-footer'>
                    <div class='left-side'>
                        <div class='info'>
                            <div>Asked by <span class='highlightWord'>".$row['user_name']."</span></div>
                            <div>Asked ".getDateDiff($row['qDate'])."</div>
                        </div>
                        </div>
                    </div>";
                ?>
            </div>
        </section>
        <section class='comments'>
            <h1>Comments</h1>
            <?php
                if (isset($_SESSION['username']) && isset($_GET['editedId'])) {
                    $sql = "SELECT * FROM comments WHERE id = ".$_GET['editedId'];
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo "<form id='createForm' class='content block' action='process-editComment.php' method='post' style='display: flex;'>
                    <input type='hidden' name='questionId' value='".$questionId."'/>";
                    echo "<input type='hidden' name='id' value='".$row['id']."'/>";
                    echo "<textarea name='comment' id='comment' placeholder='insert your comment here' maxlength='990' required minlength='5'>".$row['textField']."</textarea>
                    <div>
                        <button type='submit'>Edit</button>
                    </div>
                    </form>";
                }
                // check if he is logged in if yes display the create answer form
                else if (isset($_SESSION['username'])) {
                    echo "<button id='create'>Create comment</button>
                    <form id='createForm' class='content block' action='process-addCommentQuestion.php' method='post'>
                    <input type='hidden' name='questionId' value='".$questionId."'/>
                        <textarea name='comment' id='comment' placeholder='insert your comment here' maxlength='250' required minlength='5'></textarea>
                    <div>
                        <button type='submit'>Post</button>
                    </div>
                    </form>";
                }?>
                </div>
            </form>
            <!-- get all comments with using question id -->
            <?php
                $sql = "SELECT * FROM comments WHERE questionId = $questionId order by cDate desc";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='content block'>
                    <div class='actual-rating'>
                    </div>
                    <p>".$row['textField']."</p>
                    <div class='content-footer'>
                        <div class='left-side'>
                            <div class='info'>
                                <div>Written by <span class='highlightWord'>".$row['user_name']."</span></div>
                                <div>Written ".getDateDiff($row['cDate'])."</div>
                            </div>
                        </div>
                        <div class='right-side'>";
                        if (isset($_SESSION['username']) && $_SESSION['username'] == $row['user_name']) {
                            echo "<div class='actions'>
                            <a href='questionCommentView.php?id=$questionId&editedId=".$row['id']."'><img src='../assets/edit.svg' alt='' /></a>
                            <a href='questionCommentView.php?deleted=Comment&id=$questionId&deleteId=".$row['id']."'><img src='../assets/delete.svg' alt='' /></a>
                            </div>";}
                        echo "
                        </div>
                    </div>
                    </div>";}?>
        </section>


    </body>
</html>
