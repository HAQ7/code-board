<?php
$conn = mysqli_connect('localhost', 'root', 'password', 'code_board', '4306');

$start = 0;
$limit = 10;


// define the number of results per page
// $records = mysqli_query($conn, "SELECT * FROM answer WHERE user_name = '" . $_SESSION['username'] . "'");
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $records = mysqli_query($conn, "SELECT * FROM comments WHERE user_name = '" . $_SESSION['username'] . "' AND textField LIKE '%$search%'");
} else {
$records = mysqli_query($conn, "SELECT * FROM comments WHERE user_name = '" . $_SESSION['username'] . "'");
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
// query and select all comments with the name of the current user in the session  store the result in a variable
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $result = mysqli_query($conn, "SELECT title, textField, question.id as qid, comments.id, cDate, answers.id as aid, answerText ,question.user_name as quser_name ,answers.user_name as auser_name  FROM comments left join question on question.id = questionId left join answers on answers.id = answerId WHERE comments.user_name = '" . $_SESSION['username'] . "' AND textField LIKE '%$search%' ORDER BY aDate desc LIMIT $start, $limit ");
} else {
    $result = mysqli_query($conn, "SELECT title, textField, question.id as qid, comments.id, cDate, answers.id as aid, answerText ,question.user_name as quser_name ,answers.user_name as auser_name  FROM comments left join question on question.id = questionId left join answers on answers.id = answerId WHERE comments.user_name = '" . $_SESSION['username'] . "' ORDER BY aDate desc LIMIT $start, $limit");
}

function getSearch() {
    return isset($_GET['search']) ? $_GET['search'] : '';
}