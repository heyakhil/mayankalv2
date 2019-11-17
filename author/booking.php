<?php

include '../assets/connect.php';
include '../assets/check.php';

if (isset($_GET['addcid'])) {
    $add = $_GET['addcid'];
    $sql = "INSERT INTO bookmark(book_uid, book_user)
    VALUES ('$uid', '$add')";

    if (mysqli_query($conn, $sql)) {
        header("location:expertprofile.php?authid=$chid");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>