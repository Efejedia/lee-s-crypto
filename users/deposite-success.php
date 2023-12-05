<?php
if (isset($_SESSION['userid'])) {
    // header('location:signin.php');
}

?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Dec 2020 10:00:55 GMT -->
<?php include 'head.php'  ?>



<body class="pt-130 pb-50 bg-dark-body">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php   ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- <center>
                <h4 class="text-success">
                🍿 Get ready for a Netflix marathon! Subscription activated. Enjoy non-stop entertainment. 🎉📺
                </h4>
                </center> -->
                <section class="pt-130 pb-50 bg-dark-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="owl-carousel owl-theme owl-btn-1 banner-slide" data-nav-arrow="false" data-nav-dots="false" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
                                    <div class="item">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-12">
                                                <div class="mt-80">
                                                    <h1 class="box-title text-white mb-20">250+ of the world’s most popular cryptocurrency markets</h1>
                                                    <h4 class="text-white-80 fw-300 mb-30">Your access to the top coin markets. Capitalize on trends and trade with confidence through our expansive marketplace listings.</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="text-center">
                                                    <img src="../images/front-end-img/banners/graphic_carousel_generic.png" class="img-fluid" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-12">
                                                <div class="mt-80">
                                                    <h1 class="box-title text-white mb-20">The more the merrier. Invite your friends and earn crypto.</h1>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-primary">Get started</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="text-center">
                                                    <img src="../images/front-end-img/banners/graphic_carousel_referrals.png" class="img-fluid" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-12">
                                                <div class="mt-80">
                                                    <h1 class="box-title text-white mb-20">Want Bitcoin? You got it.</h1>
                                                    <h4 class="text-white-80 fw-300 mb-30">Instantly buy or sell Bitcoin with the click of a button.</h4>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-primary">Buy Now</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="text-center">
                                                    <img src="../images/front-end-img/banners/graphic_carousel_instant.png" class="img-fluid" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">

                    </div>
                </section>
                <?php
                // $userid = $_GET['userid'];
                $sql = mysqli_query($conn, "SELECT * FROM ddeposite  where unique_id = '$id' order by id desc");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);




                ?>
                    <div class="col-md-4 m-auto col-lg-10 printableArea">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title text-bold py-5">Payment Proccessing</h4>
                                <p class="card-text py-4">Please send this reciept as part of payment!!!</p>
                                <div class="table-responsive ">
                                    <table class="table table-hover no-wrap py-5">

                                        <tbody>


                                            <tr>
                                                <th>Name</th>
                                                <td><?php echo ucfirst($row['full_name']); ?></td>
                                            </tr>
                                            <!-- <tr> 
                                                            <th>Username</th>
                                                            <td><?php //echo $row['username']; 
                                                                ?></td>
                                                        </tr> -->
                                            <tr>
                                                <th>Plan</th>
                                                <td><?php echo ucfirst($row['crypto_name']); ?></td>
                                            </tr>

                                            <tr>
                                                <th>Wallet Address</th>
                                                <td><?php echo $row['wallet_address'];   ?></td>
                                            </tr>

                                            <tr>
                                                <th>Amount</th>
                                                <td><?php echo formatNaira($row['amount']); ?></td>
                                            </tr>

                                            <tr>
                                                <th>Deposite ID</th>
                                                <td><?php echo $row['deposite_id']; ?> Month</td>
                                            </tr>





                                            <tr>
                                                <th>Status</th>
                                                <td><?php echo $row['status']; ?></td>
                                            </tr>



                                        </tbody>
                                    </table>



                                </div>

                                <a href="dashboard" class="btn btn-primary text-white">Go Dashboard</a>
                                <input type="button" id="print" class="btn btn-success text-white" value="Print">
                                <input type="button" id="prin" class="btn btn-success text-white" value="Complete payment">
                            </div>
                        </div>
                    </div>
                <?php  } ?>

                <script>
                    const print = document.getElementById("print");
                    print.addEventListener('click', function() {
                        window.print();
                        // alert('name');
                    });
                </script>


                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <?php  ?>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php include 'footer.php'; ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php include 'js.php'; ?>
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Dec 2020 10:00:55 GMT -->

</html>