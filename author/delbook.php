<?php 

include '../assets/connect.php';
include '../assets/check.php';

if (isset($_GET['cid'])) {
    $chid = $_GET['cid'];
    $sql = "DELETE FROM `bookmark` WHERE `book_user`='$chid'";
    if (mysqli_query($conn, $sql)) {
        header("location:expertprofile.php?authid=$chid");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

}

?>