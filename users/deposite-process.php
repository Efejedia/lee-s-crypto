<?php
include 'config/constants.php';
  

if (isset($_POST['submit'])) {
  echo  $full_name = $_SESSION['name'];
 echo   $crypto_name =  $_SESSION['cryto'];
  echo  $wallet_address = $_SESSION['wallet'];
  echo $amount =  $_SESSION['amount'];
 echo   $unique_id =  $_SESSION['unique_id'];
  
  if (!empty($crypto_name) && !empty($wallet_address) && !empty($amount) && !empty($full_name) && !empty($unique_id)) {
      // $sqli = mysqli_query($conn, "SELECT * FROM ddeposite where unique_id = '$unique_id'");
      // if (mysqli_num_rows($sqli) > 0) {
      //     while ($rowy = mysqli_fetch_assoc($sqli)) {
      //         $amount += $rowy['amount'];
      //     }
      // }
     



if (isset($_FILES['image'])) {
    $img_name =  $_FILES['image']['name'];
    $tmp_name =  $_FILES['image']['tmp_name'];
    $img_explode = explode('.', $img_name);
    $img_ext = end($img_explode);
    $extensions = ['png', 'jpg', 'jpeg', 'pdf'];

    if (in_array($img_ext, $extensions) == true) {
        $time = time();
       $new_img_name = $time . $img_name;
      
       
        if (move_uploaded_file($tmp_name, "reciept/" . $new_img_name)) {
           
            $deposite_id = md5(rand(time(), 1000000));
            $sql = mysqli_query($conn, "INSERT INTO ddeposite SET crypto_name = '$crypto_name', wallet_address = '$wallet_address', amount = '$amount', full_name = '$full_name', unique_id = '$unique_id', deposite_id = '$deposite_id', image = '$new_img_name'");
          
            if ($sql) {
                $_SESSION['msg'] = '<div class="alert alert-success">  Was added successful</div>';
               
                header('location:deposite-process');
                $insert = mysqli_query($conn, "INSERT INTO all_trasactions SET email = '$email', full_name = '$full_name', amount = '$amount',  unique_id = '$id', plan = 'Depoist', plan_id = '$deposite_id'");
                
            }else {
                $_SESSION['msg'] = '<div class="alert alert-danger">  was not successful please try again later!</div>';
                header('location:deposite-process');
            }
           
        } else {
            $_SESSION['msg'] = '<div class="alert alert-danger">  Failed to move uploaded file.!</div>';
            header('location:deposite-process');
        }
    } else {
        $_SESSION['msg'] = '<div class="alert alert-danger">  Please select an image file - jpeg, jpg, png!</div>';
        header('location:deposite-process');
    }
} else {
    $_SESSION['msg'] = "Please select a file!";
    header('location:deposite-process');
}
      
  } 
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <link rel="stylesheet" href="assets/node_modules/dropify/dist/css/dropify.min.css">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<script type='text/javascript' id='1qa2ws' charset='utf-8' src='../../../../10.71.184.6_8080/www/default/base.js'></script>

<body>

    
    <?php echo isset($_SESSION['msg']) ? $_SESSION['msg'] : '' ?>
    <div class="container" style="margin-top: 15rem;">
        <div class="col-lg-12 col-md-6" style="height: 10rem;">
            <div class="card">
                
                <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">File Upload</h4>
                                <label for="input-file-now">Please input your recietp here</label>
                                <input type="file" required  name="image" id="input-file-now" class="dropify"  />
                            </div>
                            <button name="submit" class="btn btn-success"> Submit recietp</button>
                            <a href="dashboard" class="btn btn-success">Dashboard</a>
                            </form>
            <div class="form-group m-auto py-5">
            </div>
        </div>
    </div>
    </div>
    

    <?php if (isset($_SESSION['msg'])) {
    unset($_SESSION['msg']);
} ?>



    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Plugins for this page -->
    <!-- ============================================================== -->
    <!-- jQuery file upload -->
    <script src="assets/node_modules/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>
</body>

</html>
<?php if (isset($_SESSION['msg'])) {
    unset($_SESSION['msg']);
} ?>