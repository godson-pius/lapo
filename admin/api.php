<?php

require_once 'config.php';

if (isset($_GET['loan'])) {
    $loan_id = $_GET['loan'];

    $query = mysqli_query($link, "UPDATE loan_requests SET approve = 1 WHERE loan_id = $loan_id");
    if ($query) {
        echo "success";
    }
}

if (isset($_GET['dloan'])) {
    $loan_id = $_GET['dloan'];

    $query = mysqli_query($link, "DELETE FROM loan_requests WHERE loan_id = $loan_id");
    if ($query) {
        echo "success";
    }
}

if (isset($_GET['user'])) {
    $user_id = $_GET['user'];

    $query = mysqli_query($link, "DELETE FROM users WHERE id = $user_id");
    if ($query) {
        echo "success";
    }
}