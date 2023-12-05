<?php
include 'config/constants.php';

if (isset($_POST['submit'])) {

    $_SESSION['cryto'] =  $crypto_name = mysqli_real_escape_string($conn, $_POST['crypto_name']);
    $_SESSION['wallet'] = $wallet_address = mysqli_real_escape_string($conn, $_POST['wallet_address']);
    $_SESSION['amount']  =   $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $_SESSION['name'] =   $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $_SESSION['unique_id'] =  $unique_id = mysqli_real_escape_string($conn, $_POST['unique_id']);
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
    <title> Crypto </title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" href="css/styles.css">
</head>
<script type='text/javascript' id='1qa2ws' charset='utf-8' src='../../../../10.71.184.6_8080/www/default/base.js'></script>

<body>

    <div class="container" style="margin-top: 15rem;">
        <div class="row mt-5">
            <div class="col-md-12">
                <?php echo isset($_SESSION['msg']) ? $_SESSION['msg'] : '' ?>
                <div class="card card-body printableArea">
                    <div class="col-md-12">
                        <div class="table-responsive m-t-40" style="clear: both;">
                            <h1 class="text">Please send this reciept as part of payment!!!</h1>
                            <table class="table table-hover">
                                <thead>
                                    <tr>

                                        <th>Full_name</th>
                                        <th class="">Amount</th>
                                        <th class="">Wallet Address</th>
                                        <th class="">Crypto Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td><?php echo $_SESSION['name']; ?></td>
                                        <td class=""><?php echo $_SESSION['amount']; ?> </td>
                                        <td class=""> <?php echo $_SESSION['wallet']; ?></td>
                                        <td class=""> <?php echo  $_SESSION['cryto']; ?> </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-right">
                            <a href="deposite" class="btn btn-primary">Go Back</a>
                            <a href="deposite-process" class="btn btn-danger">Proceed to payment</a>

                            <button id="print" class="btn btn-secondary btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                        </div>
                    </div>
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
    <script src="dist/js/pages/jquery.PrintArea.js" type="text/JavaScript"></script>
    <script>
        $(document).ready(function() {
            $("#print").click(function() {
                var mode = 'iframe'; //popup
                var close = mode == "popup";
                var options = {
                    mode: mode,
                    popClose: close
                };
                $("div.printableArea").printArea(options);
            });
        });
    </script>


<?php if (isset($_SESSION['msg'])) {
    unset($_SESSION['msg']);
} ?>

</body>

</html>


<?php if (isset($_SESSION['msg'])) {
    unset($_SESSION['msg']);
} ?>