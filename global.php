<?php
function getDateDiff($date) {
    // get my time in saudi arabia
    date_default_timezone_set('Asia/Riyadh');
    $now = new DateTime();
    $ago = new DateTime($date);
    $diff = $now->diff($ago);
    if ($diff->y > 0) {
        return $diff->y . " years ago";
    } else if ($diff->m > 0) {
        return $diff->m . " months ago";
    } else if ($diff->d > 0) {
        return $diff->d . " days ago";
    } else if ($diff->h > 0) {
        return $diff->h . " hours ago";
    } else if ($diff->i > 0) {
        return $diff->i . " minutes ago";
    } else {
        return "Just now";
    }
}