


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Dec 2020 10:00:55 GMT -->


<head>
<?php  include './head.php' ?>

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
       <?php  include 'header.php'; ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       <?php  include 'left-aside.php'; ?>
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
            <?php echo isset($_SESSION['msg']) ? $_SESSION['msg'] : '' ?>
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
                                                
                                                <th>Plan </th>
                                                <!-- <th>Cover Image</th>      -->
                                                <th>Min</th>
                                                <th>Max</th>
                                                <th>Return</th>
                                                <th>Duration</th>
                                                <th>---</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        
                                        $sql = mysqli_query($conn, "SELECT * FROM `dplans`");
                                        if (mysqli_num_rows($sql) > 0) {
                                            $num = 1;
                                            while ($row = mysqli_fetch_assoc($sql)) {
                                                # code...




                                        ?>
                                    
                                                <tbody id="myDIV">


                                                    <tr>

                                                        <td><?php echo $num++;  ?></td>


                                                        
                                                        <td> <?php echo $row['title']; ?> </td>
                                                        <td> <?php echo $row['min']; ?> </td>
                                                        <td> <?php echo $row['max']; ?> </td>
                                                        <td> <?php echo $row['dreturn']; ?> </td>
                                                        <td> <?php echo $row['duration']; ?> </td>
                                                        <td>
                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#edit<?php echo $row['unique_id']; ?>" class="btn btn-info"> <i class="fa fa-edit"></i> Edit plan</a>

                                                            <a href="add_plans?id=<?php echo $row['unique_id']; ?>" user="<?php echo $row['unique_id']; ?>" id="hudoDelete" state='User' class="btn btn-light" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash"></i> Delete Plans </a>




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
                                                                                    <input type="text" name="title" id="cat1" value="<?php echo $row['title']; ?>" placeholder="Enter Title" class="form-control">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="cat">Maximul </label>
                                                                                    <input type="text" name="max" id="cat" value="<?php echo $row['max']; ?>" placeholder="Maximul" class="form-control">
                                                                                    <input type="hidden" name="id" value='<?php echo $row['unique_id']; ?>'>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="cat">Minimul </label>
                                                                                    <input type="text" name="min" id="cat" value="<?php echo $row['min']; ?>" placeholder="Enter Price" class="form-control">
                                                                                    <input type="hidden" name="unique_id" value='<?php echo $row['unique_id']; ?>'>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="cat">The Return</label>
                                                                                    <input type="text" name="dreturn" id="cat" value="<?php echo $row['dreturn']; ?>" placeholder="Enter Price" class="form-control">
                                                                                    <input type="hidden" name="unique_id" value='<?php echo $row['unique_id']; ?>'>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="cat">Duration</label>
                                                                                    <input type="text" name="duration" id="cat" value="<?php echo $row['duration']; ?>" placeholder="Enter Price" class="form-control">
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

                                                            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document" style="max-width:550px;">
                                                                    <div class="modal-content">
                                                                        <form action="controller" method="post" enctype="multipart/form-data">
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
                                                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

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
                <?php  include 'right-aside.php'; ?>
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
            <form action="plan_logic" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h3 class="modal-title" id="addressModalLabel">Add plans </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!-- End .modal-header -->
                <div class="modal-body">

                    <input type="hidden" name="link" value="blog">
                    <div class="form-group">
                        <input type="file" name="image" >
                    </div>
                    <div class="form-group">
                        <label for="cat">Title </label>
                        <!-- <input type="text" name="title" id="cat" required placeholder="Enter Plan title" class="form-control"> -->
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="min" class="form-control" placeholder="Minimal">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="max" class="form-control" placeholder="Maximum">
                    </div>

                    <div class="form-group">
                        <label for="cat">The Return </label>
                        <input type="text" class="form-control" name="dreturn" placeholder="The return" >
                    </div>
                    <div class="form-group">
                        <label for="cat">Duration </label>
                        <input type="text" class="form-control" name="duration" placeholder="Duration">
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