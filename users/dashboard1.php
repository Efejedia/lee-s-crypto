<?php
// include 'config/constants.php';
include 'head.php';
// Assuming $investmentId is the ID of the investment you want to check
// $investmentId = 123; // Replace with the actual investment ID

// Fetch the duration from the database
$durationQuery = mysqli_query($conn, "SELECT duration FROM invest ");
if ($durationRow = mysqli_fetch_assoc($durationQuery)) {
    $duration = $durationRow['duration'];

    // Build the SQL query with dynamic duration calculation
    $expirationQuery = "
        SELECT 
            CASE
                WHEN LOCATE('day', '$duration') > 0 THEN DATE_ADD(NOW(), INTERVAL SUBSTRING_INDEX('$duration', ' ', 1) DAY)
                WHEN LOCATE('week', '$duration') > 0 THEN DATE_ADD(NOW(), INTERVAL SUBSTRING_INDEX('$duration', ' ', 1) WEEK)
                WHEN LOCATE('month', '$duration') > 0 THEN DATE_ADD(NOW(), INTERVAL SUBSTRING_INDEX('$duration', ' ', 1) MONTH)
                -- Add more cases for other duration formats as needed
                ELSE NOW() -- Default to current date if duration format is not recognized
            END AS expiration_date;
    ";

    // Execute the query
    $result = mysqli_query($conn, $expirationQuery);

    if ($result) {
        // Fetch the result
        $row = mysqli_fetch_assoc($result);
        $expirationDate = new DateTime($row['expiration_date']);
        $currentDate = new DateTime();

        // Compare the current date with the calculated expiration date
        if ($currentDate > $expirationDate) {
            // The duration has passed
            echo "Investment with ID has expired.<br>";

            // You can update the status or take other actions here
            $updateSql = "UPDATE invest SET status = 'expired'";
            $conn->query($updateSql);
        } else {
            // The investment is still active
            echo "Investment with ID is still active.<br>";
        }
    } else {
        echo "Error executing query: " . mysqli_error($conn) . "<br>";
    }
} else {
    echo "Error fetching duration from the database.<br>";
}
?>
