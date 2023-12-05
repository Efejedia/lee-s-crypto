









<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Dec 2020 10:00:00 GMT -->
<?php include 'head.php';  ?>

<body class="skin-default fixed-layout">
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
        <?php include 'header.php';  ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include 'left-aside.php';  ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Dashboard </h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active"> Users Details </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">

                <div class="card-header">
                    Users Details
                </div>
                <div class="card-body">

                    <?php
                    //  $id = clean($_GET['id']); -->

                    // $c = $conn->query("SELECT * FROM `dlogin` WHERE userid='$id' ");

                    // if($c->num_rows>0){
                    // $num = 1;
                    // $row=$c->fetch_assoc(); 
                    // $img = empty($row['dimg'])?"./user.png": '../users/img/'.$row['dimg'].'.jpg';
                    ?>


                    <div class="row">
                       

                        <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <?php
                            //  $id = clean($_GET['id']); -->

                            // $c = $conn->query("SELECT * FROM `dlogin` WHERE userid='$id' ");

                            // if($c->num_rows>0){
                            // $num = 1;
                            // $row=$c->fetch_assoc(); 
                            // $img = empty($row['dimg'])?"./user.png": '../users/img/'.$row['dimg'].'.jpg';
                            ?>


                            <div class="row">



                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Manage Users </h4>

                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            
                                                            <th>Status</th>
                                                            <!-- <th>Edit</th> -->
                                                            <th>View</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php

                                                        $sql = mysqli_query($conn, "SELECT * FROM `duser` WHERE status = 'Banned'");
                                                        $num = 1;
                                                        if (mysqli_num_rows($sql) > 0) {
                                                            while ($row = mysqli_fetch_assoc($sql)) {


                                                        ?>
                                                                <tr>
                                                                    <td><?php  echo $num++; ?></td>
                                                                    <td><?php echo $row['full_name'] ?></td>
                                                                    <td><?php echo $row['email'] ?></td>
                                                                    <td><?php echo $row['status'] ?> </td>
                                                                    <td>
                                                                        <div class="btn text-white disabled <?php   ?>" style="background:<?php if ($row['status']== 'pending') {echo 'red';}else{echo 'black';} ?>"><?php echo $row['status']; ?></div>
                                                                    </td>
                                                                    

                                                                    <td>
                                                                        <a href="users_details?userid=<?php echo $row['unique_id']; ?>" class="btn btn-warning">View</a>
                                                                    </td>
                                                                </tr>

                                                        <?php
                                                            }
                                                        }


                                                        ?>
                                                        <!-- <tr>
                                                <td><a href="javascript:void(0)">Order #58746</a></td>
                                                <td>Mary Adams</td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2017</span> </td>
                                                <td>$245.30</td>
                                                <td>
                                                    <div class="label label-table label-danger">Shipped</div>
                                                </td>
                                                <td>CN</td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0)">Order #98458</a></td>
                                                <td>Caleb Richards</td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> May 18, 2017</span> </td>
                                                <td>$38.00</td>
                                                <td>
                                                    <div class="label label-table label-info">Shipped</div>
                                                </td>
                                                <td>AU</td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0)">Order #32658</a></td>
                                                <td>June Lane</td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Apr 28, 2017</span> </td>
                                                <td>$77.99</td>
                                                <td>
                                                    <div class="label label-table label-success">Paid</div>
                                                </td>
                                                <td>FR</td>
                                            </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>

                    </div>
                </div>


                       





                    </div>
                </div>

            </div>
        </div>
    </div>
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
    <?php include 'js.php'; ?>
</body>


</html>


