<?php 
$sql = "SELECT * FROM coins_earn WHERE `uid`='$uid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $tot_coins = $row['coin_earn'];
        if ($tot_coins<50) {
            ?>
            <script type="text/javascript">
                window.open("../user-profile.php?uid=<?php echo $uuid; ?>", "_self");
                alert("Sorry! you have very less coins, Earn Some");
            </script>
            <?php
        }else{
        $sql = "INSERT INTO `orders`(`uid`, `orderof_uid`, `post_cat`, `min_word`, `imp_not`, `descrip`, `order_id`) VALUES ('$uuid','$uid','$cata','$min_word','$imp_n','$describe','$order_id')";

        if (mysqli_query($conn, $sql)) {
            include_once 'order_notify.php';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
             $new_val = $tot_coins-50;
        $sql = "UPDATE coins_earn SET coin_earn='$new_val' WHERE `uid`='$uid'";

        if (mysqli_query($conn, $sql)) {
            ?>
             <script type="text/javascript">
                window.open("../user-profile.php?uid=<?php echo $uuid; ?>", "_self");
                alert("Your Order is send successfully");
             </script>
            <?php
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
        }
       
    }
} else {
    echo "0 results";
}

 ?>