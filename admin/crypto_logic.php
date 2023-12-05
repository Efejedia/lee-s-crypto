


<?php 
include 'config/constants.php';
if (isset($_POST['submit'])) {
    $crypto_name = mysqli_real_escape_string($conn, $_POST['crypto_name']);
    if (!empty($crypto_name)) {
       
         // Check if a file is uploaded
         if (isset($_FILES['image'])) {
            $img_name =  $_FILES['image']['name'];
            $tmp_name =  $_FILES['image']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);
            $extensions = ['png', 'jpg', 'jpeg'];

            if (in_array($img_ext, $extensions) == true) {
                $time = time();
               $new_img_name = $time . $img_name;
               
                if (move_uploaded_file($tmp_name, "uploaded_img/" . $new_img_name)) {
                   
                    $random_id = md5(rand(time(), 1000000));
                    $wallet_address = '0X' . md5(date('dmYhis').rand(12345,7890));
                    

                    // Insert user data into the database
                    $sql = mysqli_query($conn, "INSERT INTO `wallet` (unique_id,  crypto_name, wallet_address, dimg) VALUES ('{$random_id}',  '{$crypto_name}', '{$wallet_address}', '{$new_img_name}')");
                  
                    if ($sql) {
                        $_SESSION['msg'] = '<div class="alert alert-success">  Was added successful</div>';
                    }else {
                        $_SESSION['msg'] = '<div class="alert alert-danger">  was not successful please try again later!</div>';
                    }
                   
                } else {
                    $_SESSION['msg'] = '<div class="alert alert-danger">  Failed to move uploaded file.!</div>';
                }
            } else {
                $_SESSION['msg'] = '<div class="alert alert-danger">  Please select an image file - jpeg, jpg, png!</div>';
            }
        } else {
            echo "Please select a file!";
        }
    }
}

if (isset($_POST['delete'])) {
    $unique_id = mysqli_real_escape_string($conn, $_POST['unique_id']);
    $sqlii = mysqli_query($conn, "DELETE FROM `wallet` where unique_id = '$unique_id'");
    if ($sqlii) {
       $_SESSION['msg'] = '<div class="alert alert-success"></div>';
    }

}

header('location:manage_crypto');






?>