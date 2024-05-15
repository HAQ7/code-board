<?php
$conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');

$start = 0;
$limit = 10;


// define the number of results per page
// $records = mysqli_query($conn, "SELECT * FROM answer WHERE user_name = '" . $_SESSION['username'] . "'");
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $records = mysqli_query($conn, "SELECT * FROM answers WHERE user_name = '" . $_SESSION['username'] . "' AND answerText LIKE '%$search%'");
} else {
$records = mysqli_query($conn, "SELECT * FROM answers WHERE user_name = '" . $_SESSION['username'] . "'");
}
$pages = ceil(mysqli_num_rows($records) / 10);
// determine which page number visitor is currently on

if (isset($_GET['pageNum'])) {
    $pageNum = $_GET['pageNum'];
} else {
    $pageNum = 1;
}

// determine the sql LIMIT starting number for the results on the displaying page
if (isset($_GET['pageNum'])) {
    $start = ($_GET['pageNum'] - 1) * $limit;
} 
// query and select all answers with the name of the current user in the session  store the result in a variable
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $result = mysqli_query($conn, "SELECT averageRating,answers.id,answerText,aDate,title,question.user_name as username,question.id as questionId FROM answers join question on question.id = questionId WHERE answers.user_name = '" . $_SESSION['username'] . "' AND answerText LIKE '%$search%' ORDER BY aDate desc LIMIT $start, $limit ");
} else {
    $result = mysqli_query($conn, "SELECT averageRating,answers.id,answerText,aDate,title,question.user_name as username,question.id as questionId FROM answers join question on question.id = questionId WHERE answers.user_name = '" . $_SESSION['username'] . "' ORDER BY aDate desc LIMIT $start, $limit");
}

function getSearch() {
    return isset($_GET['search']) ? $_GET['search'] : '';
}