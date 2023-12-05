
<?php
// include 'config/constants.php';


// to update status if already paid

$sql = mysqli_query($conn, "SELECT * FROM invest ");
if (mysqli_num_rows($sql) > 0) {
    while ($row = mysqli_fetch_assoc($sql)) {
        $id = $row['unique_id'];
        $sqli = mysqli_query($conn, "SELECT * FROM invest where unique_id = '$id' and status = 'Runing'");
        if (mysqli_num_rows($sqli) > 0) {
            while ($rows = mysqli_fetch_assoc($sqli)) {


                $expirationDate = $rows['expiringdate'];
                echo $currentDate = date('Y-M-d h:i:s');

                // Compare the current date with the calculated expiration date
                if ($currentDate > $expirationDate) {
                    // The duration has passed
                    // echo "Investment with ID has expired.<br>";

                    // You can update the status or take other actions here
                    $updateSql = "UPDATE invest SET status = 'Completed' where unique_id = '$id'";
                    $conn->query($updateSql);
                }
            }
        }
    }
}

?>