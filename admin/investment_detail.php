<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Dec 2020 10:00:55 GMT -->


<head>
    <?php include './head.php' ?>

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
        <?php include 'header.php'; ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include 'left-aside.php'; ?>
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
                <?php echo isset($_SESSION['msg']) ? $_SESSION['msg'] : '' ?>

                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-header">
                            Deposit Details
                        </div>
                        <div class="card-body">

                            <?php
                            //  $id = clean($_GET['id']);

                            // $c = $conn->query("SELECT * FROM `dlogin` WHERE userid='$id' ");

                            // if($c->num_rows>0){
                            // $num = 1;
                            // $row=$c->fetch_assoc(); 
                            // $img = empty($row['dimg'])?"./user.png": '../users/img/'.$row['dimg'].'.jpg';
                            ?>


                            <div class="row" style="margin: auto;">


                                <div class="col-md-8 m-auto" style="margin: auto;">

                                    <div class="table-responsive ">
                                        <table class="table table-hover no-wrap">

                                            <tbody>
                                                <?php
                                                $uid = $_GET['uid'];
                                                $userid = $_GET['userid'];
                                                // $amount = $_GET['amount'];
                                                $sql = mysqli_query($conn, "SELECT * FROM `invest` where unique_id = '$uid' and  userid ='$userid'");
                                                $num = 1;
                                                if (mysqli_num_rows($sql) > 0) {
                                                    $row = mysqli_fetch_assoc($sql);
                                                    // $userid = $row['unique_id'];
                                                    // $status = $row['status'];
                                                ?>





                                                    <tr>
                                                        <th>Fullname</th>
                                                        <td><?php echo $row['full_name'] ?></td>
                                                    </tr>
                                                    <!-- <tr> 
                                                <th>Username</th>
                                                <td><?php //echo $row['username']; 
                                                    ?></td>
                                            </tr> -->
                                                    <tr>
                                                        <th>Amount Invested</th>
                                                        <td><?php echo  clean(formatNaira($row['amount'])) ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th>Plan</th>
                                                        <td><?php echo $row['plan'] ?> </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Plan Duration</th>
                                                        <td><?php echo $row['duration'] ?> </td>
                                                    </tr>


                                                    <tr>
                                                        <th>Reward</th>
                                                        <td><?php echo clean(formatNaira($row['total_amount'])) ?> </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Status</th>
                                                        <td><?php echo $row['status'] ?> </td>
                                                    </tr>

                                                    <tr>
                                                        <th> Time</th>
                                                        <td><?php echo $row['time'];   ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th> Date</th>
                                                        <td><?php echo $row['date'];   ?></td>
                                                    </tr>



                                            </tbody>
                                        </table>



                                    </div>


                                </div>


                                <div class="col-md-12">
                                    <hr>
                                    <div class="text-right">

                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#add" class="btn btn-info " style="<?php if ($row['status'] == 'Confirmed') {
                                                                                                                                                echo 'display:none';
                                                                                                                                            } ?>"> <i class="fa fa-edit"></i>Confirm Investment</a>




                                        <a href="user-proccess?userid=<?php echo $uid; ?>" user="<?php echo $userid; ?>" id="hudoDelete" state='User' class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $userid; ?>"> <i class="fa fa-trash"></i> Edit </a>

                                        <a href="user-proccess?userid=<?php echo $uid; ?>" user="<?php echo $uid ?>" id="hudoDelete" state='User' class="btn btn-light" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash"></i> Delete</a>

                                    </div>
                                    <hr>

                                    <!--     EDIT MODAL    -->

                                    <div class="modal fade" id="edit<?php echo $userid; ?>" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document" style="max-width:550px;">
                                            <div class="modal-content">
                                                <form action="investment_logic" method="post" enctype="multipart/form-data">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="addressModalLabel">Edit Amount </h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div><!-- End .modal-header -->

                                                    <div class="modal-body">


                                                        <div class="form-group">
                                                            <label for="cat">Amount </label>
                                                            <input type="text" name="total_amount" id="cat" value="<?php echo $row['total_amount']; ?>" placeholder="Edit amount" class="form-control">
                                                        </div>
                                                        <input type="hidden" name="userid" value='<?php echo $userid; ?>'>
                                                        <input type="hidden" name="uid" value='<?php echo $uid; ?>'>
                                                        <input type="hidden" name="link" value="investment_detail?userid=<?php echo $userid ?>&uid=<?php echo $uid;  ?>">




                                                    </div><!-- End .modal-body -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="esubmit" class="btn btn-primary btn-sm">Submit</button>
                                                    </div><!-- End .modal-footer -->
                                                </form>
                                            </div><!-- End .modal-content -->
                                        </div><!-- End .modal-dialog -->
                                    </div>

                                    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document" style="max-width:550px;">
                                            <div class="modal-content">
                                                <form action="investment_logic" method="post" enctype="multipart/form-data">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="addressModalLabel">Update User </h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div><!-- End .modal-header -->
                                                    <div class="modal-body">



                                                        <div class="card">
                                                            <div class="card-title">
                                                                <p>Are you sure you want to delete?</p>

                                                            </div>

                                                        </div>


                                                        <input type="hidden" name="amount" value="<?php echo $row['amount'] ?>">
                                                        <input type="hidden" name="uid" value="<?php echo $uid ?>">
                                                        <input type="hidden" name="userid" value="<?php echo $userid ?>">
                                                        <input type="hidden" name="link" value="investment_detail?userid=<?php echo $userid ?>&uid=<?php echo $uid;  ?>">

                                                    </div><!-- End .modal-body -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                                                    </div><!-- End .modal-footer -->
                                                </form>
                                            </div><!-- End .modal-content -->
                                        </div><!-- End .modal-dialog -->
                                    </div>



                                <?php
                                                }
                                ?>

                                </div>





                            </div>
                        </div>

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <?php include 'right-aside.php'; ?>
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
        <?php include 'footer.php';  ?>
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


<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:550px;">
        <div class="modal-content">
            <form action="investment_logic" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h3 class="modal-title" id="addressModalLabel">Update User </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!-- End .modal-header -->
                <div class="modal-body">


                    <div class="card">
                        <div class="card-title">
                            <p>Are you sure you want to confirm Payment?
                            <h6>
                                If Yes click submit, Else click close
                            </h6>
                            </p>

                        </div>



                        <input type="hidden" name="link" value="deposite-detail?userid=<?php echo $id ?>&deposite=<?php $deposite_id;  ?>&amount=<?php echo $amount ?>">
                        <input type="hidden" name="uid" value="<?php echo $uid ?>">
                        <input type="hidden" name="userid" value="<?php echo $userid ?>">
                        <input type="hidden" name="link" value="investment_detail?userid=<?php echo $userid ?>&uid=<?php echo $uid;  ?>">

                        <input type="hidden" name="amount" value="<?php echo $amount ?>">
                    </div><!-- End .modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" name="saveUser" class="btn btn-primary btn-sm">Submit</button>
                    </div><!-- End .modal-footer -->
            </form>
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div>
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:550px;">
        <div class="modal-content">
            <form action="update" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h3 class="modal-title" id="addressModalLabel">Update User </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!-- End .modal-header -->
                <div class="modal-body">


                    <div class="card">
                        <div class="card-title">
                            <p>Are you sure you want to confirm Payment?
                            <h6>
                                If Yes click submit, Else click close
                            </h6>
                            </p>

                        </div>



                        <input type="hidden" name="link" value="deposite-detail?userid=<?php echo $userid ?>&uid=<?php $uid;  ?>&amount=<?php echo $amount ?>">
                        <input type="hidden" name="uid" value="<?php echo $uid ?>">
                        <input type="hidden" name="userid" value="<?php echo $userid ?>">
                        <input type="hidden" name="amount" value="<?php echo $amount ?>">
                    </div><!-- End .modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" name="saveUser" class="btn btn-primary btn-sm">Submit</button>
                    </div><!-- End .modal-footer -->
            </form>
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div>