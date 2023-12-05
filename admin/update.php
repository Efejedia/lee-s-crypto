
<?php 
include 'config/constants.php';
if (isset($_POST['saveUser'])) {
     $link = $_POST['link'];
    $id = mysqli_real_escape_string($conn, $_POST['unique_id']);
    $deposite_id = mysqli_real_escape_string($conn, $_POST['deposite_id']);
    echo $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $update_status = mysqli_query($conn, "UPDATE ddeposite SET status = 'Confirmed' where unique_id = '$id' and deposite_id = '$deposite_id' and status = 'Pending'");
    if ($update_status) {
        $sql = mysqli_query($conn, "SELECT * FROM duser where unique_id = '$id'");
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
            echo    $total= $amount += $row['wallet_bln'];
            //   echo $total = $amount += $amounts;
              $update_wallet = mysqli_query($conn, "UPDATE duser set wallet_bln = '$total' where unique_id = $id");
              $_SESSION['msg'] = '<div class="alert alert-success">UPdate Successful</div>';

            
        }
    }
    header("location:$link");
}


if (isset($_POST['esubmit'])) {
    $link = $_POST['link'];
    $id = mysqli_real_escape_string($conn, $_POST['unique_id']);
    $deposite_id = mysqli_real_escape_string($conn, $_POST['deposite_id']);
    echo $amount = mysqli_real_escape_string($conn, $_POST['amount']);
   if (!empty($amount)) {
    $update_deposit = mysqli_query($conn, "UPDATE ddeposite SET amount = '$amount' where unique_id ='$id' and deposite_id = '$deposite_id'");
    if ($update_deposit) {
        $_SESSION['msg'] = '<div class="alert alert-success">UPdate Successful</div>';
        header("location:$link");
    } 
   } else{
    header("location:$link");
    $_SESSION['msg'] = '<div class="alert alert-danger">Input required</div>';
}
    

}




?>

