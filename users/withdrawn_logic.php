

<?php
include 'config/constants.php';


if (isset($_POST['submit'])) {
     $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
     $id = mysqli_real_escape_string($conn, $_POST['id']);
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $wallet_bln = mysqli_real_escape_string($conn, $_POST['wallet_bln']);
      $amount = mysqli_real_escape_string($conn, $_POST['amount']);
     $percent = mysqli_real_escape_string($conn, $_POST['percent']);

    if ($amount > $wallet_bln) {
        echo 'Just dey play';
    }else{
        echo  $bln = $wallet_bln - $amount;
        $sql = mysqli_query($conn, "UPDATE duser SET wallet_bln = '$bln' WHERE unique_id = '$id'");
        if ($sql) {
            $withdraw_id = md5(rand(time(), 1000000));
            $insert = mysqli_query($conn, "INSERT INTO all_trasactions SET email = '$email', full_name = '$full_name', amount = '-$amount', wallet_bln = '$wallet_bln', unique_id = '$id', plan = 'Withdrawn', plan_id = '$withdraw_id'");
            if ($insert) {
                $admin_notification = mysqli_query($conn, "INSERT INTO  `admin_not` SET  full_name = '$full_name', amount = '$amount', unique_id = '$id', plan = 'Withdrawn', email = '$email', withdraw_id = '$withdraw_id'");
               if ($admin_notification) {
                $withdrawn = mysqli_query($conn, "INSERT INTO withdrawn SET amount = '$amount', full_name = '$full_name', email = '$email', percent = '$percent', unique_id = '$id' ");
                $_SESSION['msg'] = '<div class="alert alert-success">Transaction Successful</div>';
                header('location:withdrawn');
               }


            }else{
                echo 'Something went wrong!!!';
                $_SESSION['msg'] = '<div class="alert alert-danger"></div>';
                header('location:withdrawn');
            }
        }else{
                echo 'Your transaction where not able to go through because of some issue try again later';
                $_SESSION['msg'] = '<div class="alert alert-danger"></div>';
            header('location:withdrawn');
        }
      
    }
    header('location:withdrawn');
   
}

?>

<div class="alert alert-success"></div>
<div class="alert alert-danger"></div>