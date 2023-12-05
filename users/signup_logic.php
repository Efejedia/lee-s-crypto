
<?php
include 'config/constants.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $referid = mysqli_real_escape_string($conn, $_POST['referid']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);

    if (!empty($name) && !empty($email) && !empty($pass) && !empty($cpass)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = mysqli_query($conn, "SELECT * FROM duser WHERE email = '$email' ");

            if (mysqli_num_rows($sql) > 0) {
                $_SESSION['msg'] = '<div class="alert alert-danger">Email already existing!</div>';
                header('location:register');
            } elseif (strlen($_POST['pass']) < 5 && strlen($_POST['cpass']) < 5) {
                $_SESSION['msg'] = '<div class="alert alert-danger">Password must be at least 5 characters long!</div>';
                header('location:register');
            } elseif ($pass != $cpass) {
                $_SESSION['msg'] = '<div class="alert alert-danger">Passwords do not match!</div>';
                header('location:register');
            } else {
                if (!empty($referid)) {
                    $result = mysqli_query($conn, "SELECT * FROM duser");

                    if (mysqli_num_rows($result) > 0) {
                        while ($check = mysqli_fetch_assoc($result)) {
                            $uid = $check['unique_id'];
                            $match = mysqli_query($conn, "SELECT * FROM duser WHERE unique_id = '$uid'");
    
                            if (mysqli_num_rows($match) > 0) {
                                $fetch_user = mysqli_fetch_assoc($match);
                                $user = $fetch_user['unique_id'];
    
                                if ($referid != $user) {
                                    $_SESSION['msg1'] = '<div class="alert alert-danger">Referral Id does not match!</div>';
                                    echo 'dey play';
                                    header('location:register');
                                } else {
                                    echo $referid . 'E work';
                                    $_SESSION['msg'] = '<div class="alert alert-success">Registration successful!</div>';
                                    $userid = rand(time(), 1000000);
                                    $md5 = md5($cpass);
                                    $insert = mysqli_query($conn, "INSERT INTO duser (unique_id, full_name, email, password, reference_id) VALUES ('$userid', '$name', '$email', '$md5', '$referid')");
                                    header('location:register');
    
                                    if ($insert) {
                                        $selectInserted = mysqli_query($conn, "SELECT * FROM duser WHERE unique_id = '$userid'");
                                        $row = mysqli_fetch_assoc($selectInserted);
                                        $_SESSION['userid'] = $row['userid'];
                                        // Store the unique ID in the session
                                        $_SESSION['email'] = $row['userid'];
                                        $userid = $_SESSION['unique_id'] = $row['unique_id'];
    
                                        $_SESSION['msg'] = '<div class="alert alert-success">Registration successful!</div>';
                                    }
                                }
                            } else {
                                $_SESSION['msg'] = "Something went wrong!";
                                header('location:register');
                            }
                        }
                    }
                } else {
                    $userid = rand(time(), 1000000);
                    $md5 = md5($cpass);
                    $sql = mysqli_query($conn, "INSERT INTO duser  (unique_id, full_name, email,  password) VALUES ('$userid', '$name', '$email',  '$md5')");
                    $_SESSION['userid'] = $row['userid']; // Store the unique ID in the session
                    $_SESSION['email'] = $row['userid'];
                    $userid = $_SESSION['unique_id'] = $row['unique_id'];


                    $_SESSION['msg'] = '<div class="alert alert-success">Registration successful!</div>';
                    header('location:register');
                }
            }
        } else {
            $_SESSION['msg'] = '<div class="alert alert-danger">Use a valid email!</div>';
            header('location:register');
        }
    }

    header('location:register');
}
