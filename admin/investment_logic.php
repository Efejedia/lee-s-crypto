
<?php
include 'config/constants.php';
if (isset($_POST['esubmit'])) {
     $uid = $_POST['uid'];
     $total_amount = $_POST['total_amount'];
     $userid = $_POST['userid'];
     $link = $_POST['link'];
    //  update the amoount\
   if (!empty($total_amount)) {
    $update = mysqli_query($conn, "UPDATE invest SET total_amount = '$total_amount' where unique_id = '$uid' and userid = '$userid'");
    if ($update) {
        $_SESSION['msg'] = '<div class="alert alert-success">Update complete! Your user total amount  is now updated .</div>';
    }
   } else{
    $_SESSION['msg'] = '<div class="alert alert-danger">You can not update an empty input</div>';
   }
 header("location:$link");
} else{
    $_SESSION['msg'] = '<div class="alert alert-danger">You can not update an empty input</div>';
    header('location:index');
}



if (isset($_POST['saveUser'])) {
    $uid = $_POST['uid'];
    $userid = $_POST['userid'];
    $link = $_POST['link'];
    // UPDATE STATUS AND CONFIRM PAYMENT
    $comfirm_payment = mysqli_query($conn, "UPDATE invest SET status = 'Confirmed' WHERE unique_id = '$uid' and userid = '$userid'");
    if ($comfirm_payment) {
        $_SESSION['msg'] = '<div class="alert alert-success">Update successful</div>';
        header("location:$link");
    } else{
        $_SESSION['msg'] = '<div class="alert alert-danger">Something went wrong!!!</div>';
        header("location:$link");
    }
} else{
    $_SESSION['msg'] = '<div class="alert alert-danger">You can not update an empty input</div>';
    header('location:index');
}



if (isset($_POST['delete'])) {
    $amount = $_POST['amount'];
    $uid = $_POST['uid'];
    $userid = $_POST['userid'];
    $delete = mysqli_query($conn, "DELETE FROM `invest` WHERE UNique_id = '$uid' and userid = '$userid'");
    if ($delete) {
       $get_userid = mysqli_query($conn, "SELECT * FROM duser WHERE unique_id = '$userid'");
       if (mysqli_num_rows($get_userid) > 0) {
        $row = mysqli_fetch_assoc($get_userid);
      $full =  $row['full_name'];
      $wallet_bln = $row['wallet_bln'];
      $total_bln =  $wallet_bln + $amount;
      $update_wallet = mysqli_query($conn, "UPDATE duser SET  wallet_bln = '$total_bln' WHERE unique_id = '$userid'");
      if ($update_wallet) {
        $_SESSION['msg'] = '<div class="alert alert-success">Update successful</div>';
                header("location:manage_investment");
      }
       }

    } else{
        $_SESSION['msg'] = '<div class="alert alert-danger">Something went wrong!!!</div>';
                header("location:manage_investment");
    }
} else{
    $_SESSION['msg'] = '<div class="alert alert-danger">You can not update an empty input</div>';
    header('location:index');
}
?>

<div class="alert alert-success"></div>
<div class="alert alert-danger"></div>