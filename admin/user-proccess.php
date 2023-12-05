
<?php
include 'config/constants.php';

if (isset($_POST['confirm'])) {
    $id = mysqli_real_escape_string($conn, $_POST["userid"]);
    $link = $_POST['link'];
    $sql = mysqli_query($conn, "UPDATE duser SET status = 'Confirmed' WHERE unique_id = '$id'");
    if ($sql) {
        $_SESSION['msg'] = '<div class="alert alert-success">User updated successfully</div>';
        header("location:$link");
    }else {
        $_SESSION['msg'] = '<div class="alert alert-danger">Something went wrong!!!</div>';
        header("location:$link");
    }
    header("location:$link");
} else{
    // header("location:manage_users");
}


if (isset($_POST['baned'])) {
     $id = mysqli_real_escape_string($conn, $_POST['userid']);
    $link = $_POST['link'];
    $baned_user = mysqli_query($conn, "UPDATE  duser SET status = 'Banned' WHERE unique_id = '$id'");
    if ($baned_user) {
        $_SESSION['msg'] = '<div class="alert alert-success">User has been baned!!!!!!!!!</div>';
        header("location:$link");
    }else {
        $_SESSION['msg'] = '<div class="alert alert-danger">Something went wrong!!!</div>';
        header("location:$link");
    }
}else{
    header("location:manage_users");
}
if (isset($_POST['unbaned'])) {
     $id = mysqli_real_escape_string($conn, $_POST['userid']);
    $link = $_POST['link'];
    $baned_user = mysqli_query($conn, "UPDATE  duser SET status = 'Confirmed' WHERE unique_id = '$id'");
    if ($baned_user) {
        $_SESSION['msg'] = '<div class="alert alert-success">This user is now active!!!!!!!!!</div>';
        header("location:$link");
    }else {
        $_SESSION['msg'] = '<div class="alert alert-danger">Something went wrong!!!</div>';
        header("location:$link");
    }
}else{
    header("location:manage_users");
}

if (isset($_POST['fund_acct'])) {
    $full_name = mysqli_real_escape_string($conn, $_POST['fname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $dfund = mysqli_real_escape_string($conn, $_POST['dfund']);
    $dfund = mysqli_real_escape_string($conn, $_POST['dfund']) ;
    $unique_id = mysqli_real_escape_string($conn, $_POST['unique_id']);
    $link = $_POST['link'];
    if (!empty($full_name) && !empty($email) && !empty($dfund)) {
       $fund_userAcct = mysqli_query($conn, "SELECT * FROM duser WHERE unique_id = '$unique_id' AND email = '$email' OR full_name = '$full_name'");
       if (mysqli_num_rows($fund_userAcct) > 0) {
        $row = mysqli_fetch_assoc($fund_userAcct);
       $bln = $row['wallet_bln'];
         $total = $bln + $dfund;
        $fundUser = mysqli_query($conn, "UPDATE duser set wallet_bln = '$total' WHERE unique_id = '$unique_id' AND email = '$email'");
        if ($fundUser) {
            $_SESSION['msg'] = '<div class="alert alert-success">You have successfully funded this user!</div>';
            header("location:$link");
        }
       }
    }

}else{
    header("location:manage_users");
}

?>