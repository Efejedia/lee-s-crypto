<!DOCTYPE html>
<html lang="en">

<body>


    <?php include 'head.php'; ?>





    <?php include 'header.php'; ?>


    <?php include 'left-aside.php';  ?>

    <div class="page-wrapper">
        <div class="container-fluid">

            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Dashboard </h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active"> Users Details </li>
                        </ol>
                    </div>
                </div>
            </div>

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
                                            $id = $_GET['userid'];
                                            $deposite_id = $_GET['deposite'];
                                            $amount = $_GET['amount'];
                                            $sql = mysqli_query($conn, "SELECT * FROM `ddeposite` where unique_id = '$id'  and deposite_id = '$deposite_id' ORDER BY id DESC");
                                            $num = 1;
                                            if (mysqli_num_rows($sql) > 0) {
                                                $row = mysqli_fetch_assoc($sql);
                                                $userid = $row['unique_id'];
                                                $deposite_id = $row['deposite_id'];
                                                $status = $row['status'];
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
                                                    <th>Amount</th>
                                                    <td><?php echo  $row['amount'] ?></td>
                                                </tr>

                                                <tr>
                                                    <th>Plan</th>
                                                    <td><?php echo $row['crypto_name'] ?> </td>
                                                </tr>


                                                <tr>
                                                    <th>Wallet Address</th>
                                                    <td><?php echo $row['wallet_address'] ?> </td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td><?php echo $row['status'] ?> </td>
                                                </tr>

                                                <tr>
                                                    <th>Reg. Date</th>
                                                    <td><?php echo $row['created_at'];   ?></td>
                                                </tr>



                                        </tbody>
                                    </table>



                                </div>


                            </div>


                            <div class="col-md-12">
                                <hr>
                                <div class="text-right">

                                    <!-- <a href="history/<?php //echo $row['userid']; 
                                                            ?>/" class="btn btn-dark" > <i class="fa fa-user"></i>  History</a> -->

                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#add" class="btn btn-info " style="<?php if ($row['status']=='Confirmed') { echo 'display:none'; } ?>"> <i class="fa fa-edit"></i>Confirm Payment</a>


                                   

                                    <a href="user-proccess?userid=<?php echo $id; ?>" user="<?php echo $row['unique_id']; ?>" id="hudoDelete" state='User' class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $row['unique_id']; ?>"> <i class="fa fa-trash"></i> Edit </a>

                                    <a href="javascript:void(0)" data-toggle="modal"  id="hudoDelete" state='User' class="btn btn-light" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash"></i> Delete Account </a>

                                </div>
                                <hr>

                                        <!--     EDIT MODAL    -->

                                        <div class="modal fade" id="edit<?php echo $row['unique_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document" style="max-width:550px;">
                                            <div class="modal-content">
                                                <form action="update" method="post" enctype="multipart/form-data">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="addressModalLabel">Edit Amount </h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div><!-- End .modal-header -->

                                                    <div class="modal-body">

                                                        <div class="form-group">
                                                            <label for="cat">Amount </label>
                                                            <input type="text" name="amount" id="cat" value="<?php echo $row['amount']; ?>" placeholder="Edit amount" class="form-control">
                                                            <input type="hidden" name="id" value='<?php echo $row['unique_id']; ?>'>
                                                            <input type="hidden" name="unique_id" value='<?php echo $row['unique_id']; ?>'>
                                                            <input type="hidden" name="deposite_id" value='<?php echo $deposite_id; ?>'>
                                                            <input type="hidden" name="link" value="deposite-detail?userid=<?php echo $id ?>&deposite=<?php echo $deposite_id;  ?>&amount=<?php echo $amount ?>">
                                                        </div>



                                                    </div><!-- End .modal-body -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="esubmit" class="btn btn-primary btn-sm">Submit</button>
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
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <?php include 'js.php'; ?>




</body>

</html>




<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
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



                        <input type="hidden" name="link" value="deposite-detail?userid=<?php echo $id ?>&deposite=<?php echo $deposite_id;  ?>&amount=<?php echo $amount ?>">
                        <input type="hidden" name="unique_id" value="<?php echo $id ?>">
                        <input type="hidden" name="deposite_id" value="<?php echo $deposite_id ?>">
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



                        <input type="hidden" name="link" value="deposite-detail?userid=<?php echo $id ?>&deposite=<?php $deposite_id;  ?>&amount=<?php echo $amount ?>">
                        <input type="hidden" name="unique_id" value="<?php echo $id ?>">
                        <input type="hidden" name="deposite_id" value="<?php echo $deposite_id ?>">
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

