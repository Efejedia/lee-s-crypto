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
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Blank Page</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div class="row py-5">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-7">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-8">

                                    <div class="form-group ">
                                        <input type="hidden" name="search" placeholder="Search here..." class="form-control">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <!-- <button type="submit" name="news" class="btn btn-info style3 w-100" > <i class="fa fa-search"></i> Search</button> -->
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 text-right">
                        <button type="button" class="btn btn-success style3 " data-toggle="modal" data-target="#add">Add New Plan</button>
                    </div>
                </div>



                <div class="row">
                    <!-- ============================================================== -->
                    <!-- Table -->
                    <!-- ============================================================== -->
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-header">
                                <h4>Add Plans</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive" style="min-height: 200px;">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>

                                                <th>#</th>
                                                <th>Img</th>
                                                <th>Crypto Name</th>
                                                <!-- <th>Cover Image</th>      -->
                                                <th>Wallet Address</th>

                                                <th>---</th>
                                            </tr>
                                        </thead>
                                      
                                        <?php

                                        $sql = mysqli_query($conn, "SELECT * FROM `wallet`");
                                        if (mysqli_num_rows($sql) > 0) {
                                            $num = 1;
                                            while ($row = mysqli_fetch_assoc($sql)) {
                                                # code...




                                        ?>

                                                <tbody id="myDIV">


                                                    <tr>

                                                        <td><?php echo $num++;  ?></td>


                                                        <td> <img src="uploaded_img/<?php echo $row['dimg']; ?>" alt="" style="width: 50px;aspect-ratio:1/1;border-radius:50%;"> </td>
                                                        <td> <?php echo $row['crypto_name']; ?> </td>
                                                        <td> <?php echo $row['wallet_address']; ?> </td>

                                                        <td>
                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#edit<?php echo $row['unique_id']; ?>" class="btn btn-info"> <i class="fa fa-edit"></i> Edit plan</a>

                                                            <a href="manage_crypto?id=<?php echo $row['unique_id']; ?>" user="<?php echo $row['unique_id']; ?>" id="hudoDelete<?php echo $row['unique_id']; ?>" state='User' class="btn btn-light" data-toggle="modal" data-target="#delete<?php echo $row['unique_id']; ?>"> <i class="fa fa-trash"></i> Delete Plans </a>




                                                            <div class="modal fade" id="edit<?php echo $row['unique_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document" style="max-width:550px;">
                                                                    <div class="modal-content">
                                                                        <form action="plan_logic" method="post" enctype="multipart/form-data">
                                                                            <div class="modal-header">
                                                                                <h3 class="modal-title" id="addressModalLabel">Update plans </h3>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div><!-- End .modal-header -->

                                                                            <div class="modal-body">


                                                                                <div class="form-group">
                                                                                    <label for="cat1">Plan </label>
                                                                                    <input type="text" name="title" id="cat1" value="<?php echo $row['crypto_name']; ?>" placeholder="Enter Title" class="form-control">
                                                                                </div>
                                                                               
                                                                                <input type="hidden" name="unique_id" value='<?php echo $row['unique_id']; ?>'>



                                                                            </div><!-- End .modal-body -->
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
                                                                                <button type="submit" name="esubmit" class="btn btn-primary btn-sm">Submit</button>
                                                                            </div><!-- End .modal-footer -->
                                                                        </form>
                                                                    </div><!-- End .modal-content -->
                                                                </div><!-- End .modal-dialog -->
                                                            </div>

                                                            <div class="modal fade" id="delete<?php echo $row['unique_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document" style="max-width:550px;">
                                                                    <div class="modal-content">
                                                                        <form action="crypto_logic" method="post" enctype="multipart/form-data">
                                                                            <div class="modal-header">
                                                                                <h3 class="modal-title" id="addressModalLabel">Delete plan </h3>
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

                                                                                <!-- <input type="hidden" name="link" value="users_details?userid=<?php echo $id ?>"> -->
                                                                                <input type="text" name="unique_id" value="<?php echo $row['unique_id']; ?>">

                                                                            </div><!-- End .modal-body -->
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
                                                                                <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                                                                            </div><!-- End .modal-footer -->
                                                                        </form>
                                                                    </div><!-- End .modal-content -->
                                                                </div><!-- End .modal-dialog -->
                                                            </div>



                                                        </td>
                                                    </tr>


                                                </tbody>

                                        <?php
                                            }
                                        } else {
                                            echo '
                                                        <tr>
                                                        <td colspan="4" class="text-danger">Sorry! No result found </td>
                                                        </tr>
                                                        ';
                                        }
                                        ?>
                                    </table>

                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="pagination pagination-md justify-content-center">

                                    <?php
                                    // if(isset($_GET['search']) AND !empty($_GET['search'])){
                                    //     for ($counter = 1; $counter <= $total_no_of_pages; $counter++){ 
                                    //         echo "<li  class='page-item '><a class='page-link' href='manage-categories?page_no=$counter&search=$search' style='color:#0088cc;'>$counter</a></li>"; 

                                    //     }
                                    // }else{
                                    //     for ($counter = 1; $counter <= $total_no_of_pages; $counter++){ 
                                    //         echo "<li  class='page-item '><a class='page-link' href='blog?page_no=$counter' style='color:#0088cc;'>$counter</a></li>"; 

                                    //     }
                                    // }

                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="crypto_logic" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h3 class="modal-title" id="addressModalLabel">Add plans </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!-- End .modal-header -->
                <div class="modal-body">

                    <input type="hidden" name="link" value="blog">

                    <div class="form-group">
                        <label for="cat">Title </label>
                        <!-- <input type="text" name="title" id="cat" required placeholder="Enter Plan title" class="form-control"> -->
                     
                        <input type="text" name="crypto_name" class="form-control" required placeholder="Enter Plan title" >
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" class="form-control">
                    </div>




                    <div class="form-group">
                        <!-- <label for="">Cover Image (840 X 420)</label> -->
                        <!-- <input type="file" name="img" required class="form-control-file">
                    <input type="hidden" name="himg" value=""> -->
                    </div>

                </div><!-- End .modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="Create" class="btn btn-primary btn-sm">Submit</button>
                </div><!-- End .modal-footer -->
            </form>
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->


</div>