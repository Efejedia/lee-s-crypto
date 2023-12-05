
<?php  

include 'config/constants.php';
if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $min = mysqli_real_escape_string($conn, $_POST['min']);
    $max = mysqli_real_escape_string($conn, $_POST['max']);
    $dreturn = mysqli_real_escape_string($conn, $_POST['dreturn']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    if (!empty($title) && !empty($min) && !empty($max) && !empty($duration)) {
        
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
                    

                    // Insert user data into the database
                    $sql = mysqli_query($conn, "INSERT INTO `dplans` (unique_id,  title, dreturn, dimg, min, max, duration) VALUES ('{$random_id}',  '{$title}', '{$dreturn}', '{$new_img_name}', '{$min}', '{$max}', '{$duration}')");
                  
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



if (isset($_POST['esubmit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $min = mysqli_real_escape_string($conn, $_POST['min']);
    $max = mysqli_real_escape_string($conn, $_POST['max']);
    $dreturn = mysqli_real_escape_string($conn, $_POST['dreturn']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $unique_id = mysqli_real_escape_string($conn, $_POST['unique_id']);
    if (!empty($title)&& !empty($min) && !empty($max) && !empty($dreturn) && !empty($duration)) {
        $sqli = mysqli_query($conn, "UPDATE dplans SET title = '$title', min = '$min', max = '$max', dreturn = '$dreturn', duration = '$duration' WHERE unique_id = '$unique_id'");

        if ($sqli) {
           $_SESSION['msg'] = '   <div class="card">
           <div class="card-body">
               <h4 class="card-title">Success Message <small>(Click on image)</small></h4>
               <img src="assets/images/alert/alert3.png" alt="alert" class="img-fluid model_img"
                   id="sa-success">
           </div>
       </div>';
        }
    }
}










header('location:manage_plan');

?>