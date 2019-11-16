<?php 

function coin_reduce($uid, $coins=50)
{   
    include 'connect.php';
    $sql = "SELECT * FROM coins_earn WHERE `uid`='$uid'";
    $result = mysqli_query($conn, $sql);
    //hello
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $tot_coins = $row['coin_earn'];
            $new_val = $tot_coins-$coins;
            $sql = "UPDATE coins_earn SET coin_earn='$new_val' WHERE `uid`='$uid'";
            if (mysqli_query($conn, $sql)) {
               return "yes";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    } else {
        echo "0 results";
    }
}


 ?>