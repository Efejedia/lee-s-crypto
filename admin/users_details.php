

<!DOCTYPE html>
<html lang="en">

<body>


    <?php include 'head.php'; ?>





    <?php include 'header.php'; ?>


    <?php include './left-aside.php';  ?>

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
                        Users Details
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


                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                    <img src="./avatar4.jpeg" class="img-thumbnail" style="width: 280px !important;height: 280px !important;">
                                </center>
                            </div>

                            <div class="col-md-6">

                                <div class="table-responsive ">
                                    <table class="table table-hover no-wrap">

                                        <tbody>
                                            <?php
                                            $id = $_GET['userid'];
                                            $sql = mysqli_query($conn, "SELECT * FROM `duser` WHERE unique_id='$id'");
                                            if (mysqli_num_rows($sql) > 0) {
                                                $row = mysqli_fetch_assoc($sql);



                                            ?>

                                                <tr>
                                                    <th>Fullname</th>
                                                    <td><?php echo $row['full_name']; ?></td>
                                                </tr>
                                                <!-- <tr> 
                                                            <th>Username</th>
                                                            <td><?php //echo $row['username']; 
                                                                ?></td>
                                                        </tr> -->
                                           

                                                <tr>
                                                    <th>Email</th>
                                                    <td><?php echo $row['email']; ?></td>
                                                </tr>


                                                <tr>
                                                    <th>Status</th>
                                                    <td><?php echo ucfirst($row['status']); ?></td>
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

                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#confirm" class="btn btn-info" style="<?php if($row['status'] == 'Confirmed'){echo 'display:none';}elseif ($row['status'] == 'Banned') { echo 'display:none';  } ?>"> <i class="fa fa-edit"></i> Confirm user</a>

                                    
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#add" class="btn btn-info"> <i class="fa fa-edit"></i> Edit Account</a>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#fund" class="btn btn-info"> <i class="fa fa-edit" style="<?php if ($row['status'] == 'Banned') { echo 'display:none';  }elseif ($row['status']=='Pending') {  echo 'display:none'; } ?>"></i> Fund User</a>


                                    <?php
                                     if ($row['status'] == 'Banned') { 
                                        ?>
                                    <a id="unban" user="<?php echo $row['unique_id']; ?>" href="javascript:void(0)" class="btn btn-danger" data-toggle="modal" data-target="#unbaned">Unban Account</a>

                                    <?php } else { ?> 
                                    <a id="ban" user="<?php echo $row['unique_id']; ?>" href="" class="btn btn-danger" data-toggle="modal" data-target="#baned" >Ban Account</a>
                                    <?php  } ?>

                                    <a href="user-proccess?userid=<?php echo $id; ?>" user="<?php echo $row['unique_id']; ?>" id="hudoDelete" state='User' class="btn btn-light" data-toggle="modal"  data-target="#delete" > <i class="fa fa-trash"></i> Delete Account </a>
                                 
                                </div>
                                <hr>
                            <?php
                                            }

                            ?>

                            </div>





                        </div>
                    </div>

                </div>
            </div>
          
            <div class="col-md-4 m-auto col-lg-10 printableArea">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title text-bold py-5">All transaction</h4>
                                <p class="card-text py-4">All transactions of <?php echo $row['full_name']; ?></p>
                                <div class="table-responsive ">
                                    <?php
                                    $sqli = mysqli_query($conn, "SELECT * FROM all_trasactions WHERE unique_id = '$id'");
                                    if (mysqli_num_rows($sqli) > 0) {
                                       while ( $fetch = mysqli_fetch_assoc($sqli)) {
                                       
                                    ?>
                                    <table class="table table-hover no-wrap py-5">

                                        <tbody>


                                           <?php if(!empty($fetch['full_name'])){ ?>
                                            <tr>
                                                <th>Name</th>
                                                <td><?php echo ucfirst($fetch['full_name']); ?></td>
                                            </tr>
                                            <?php  } ?>
                                            <!-- <tr> 
                                                            <th>Username</th>
                                                            <td><?php //echo $row['username']; 
                                                                ?></td>
                                                        </tr> -->
                                            <?php  if (!empty($fetch['plan'])) { ?>
                                                <tr>
                                                <th>Plan</th>
                                                <td><?php echo ucfirst($fetch['plan']); ?></td>
                                            </tr>
                                            <?php  } ?>

                                           <?php if(!empty($fetch['wallet_address'])){ ?>
                                           <tr>
                                                <th>Wallet Address</th>
                                                <td><?php echo $fetch['wallet_address'];   ?></td>
                                            </tr>
                                            <?php } ?>
                                           <?php if(!empty($fetch['crypto_name'])){ ?>
                                           <tr>
                                                <th>Crypto name</th>
                                                <td><?php echo $fetch['crypto_name'];   ?></td>
                                            </tr>
                                            <?php } ?>


                                            <?php  if(!empty($fetch['amount'])){ ?>
                                            <tr>
                                                <th>Amount Invested</th>
                                                <td><?php echo formatNaira($fetch['amount']); ?></td>
                                            </tr>
                                            <?php   }  ?>

                                            <?php  if (!empty($fetch['dreturn'])) {?>
                                                <tr>
                                                <th>Return</th>
                                                <td><?php echo formatNaira($fetch['dreturn']); ?></td>
                                            </tr>
                                            <?php } ?>

                                            <tr>
                                                <th>Plan ID</th>
                                                <td><?php echo $fetch['plan_id']; ?></td>
                                            </tr>
                                            <?php  if(!empty($fetch['duration'])){ ?>
                                                <tr>
                                                    
                                                <th>Duration</th>
                                                <td><?php echo $fetch['duration']; ?></td>
                                            </tr>
                                            <?php  } ?>





                                           <?php  if(!empty($fetch['status'])){ ?>
                                            <tr>
                                                <th>Status</th>
                                                <td><?php echo $fetch['status']; ?></td>
                                            </tr>
                                            <?php   } ?>



                                        </tbody>
                                    </table>
                                    <br> <br> History of <?php echo $row['full_name'];  ?>
                                    <br> <br>
                                    <?php } }else{?>

                                        <section id="wrapper" class="error-page">
        <div class="error-box">
            <div class="error-body text-center">
                <h1>400</h1>
                <h3 class="text-uppercase">No history Found !</h3>
                </div>
            
        </div>
    </section>
                                    <?php  } ?>



                                </div>

                                <!-- <a href="dashboard" class="btn btn-primary text-white">Go Dashboard</a>
                                <input type="button" id="print" class="btn btn-success text-white" value="Print">
                                <input type="button" id="prin" class="btn btn-success text-white" value="Complete payment"> -->
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
            <form action="user-proccess" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h3 class="modal-title" id="addressModalLabel">Update User </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!-- End .modal-header -->
                <div class="modal-body">



                    <div class="form-group">
                        <label for="cat1">Fullname </label>
                        <input type="text" name="fname" id="cat1" value="<?php echo $row['full_name'] ?>" placeholder="Enter Fullname" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="cate">Email </label>
                        <input type="text" name="email" id="cate" value="<?php echo $row['email'] ?>" placeholder="Enter Email" class="form-control">
                    </div>

                    <input type="hidden" name="link" value="users_details?userid=<?php echo $id ?>">
                    <input type="hidden" name="unique_id" value="<?php echo $id ?>">
                </div><!-- End .modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" name="saveUser" class="btn btn-primary btn-sm">Submit</button>
                </div><!-- End .modal-footer -->
            </form>
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div>
<div class="modal fade" id="fund" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:550px;">
        <div class="modal-content">
            <form action="user-proccess" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h3 class="modal-title" id="addressModalLabel">Update User </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!-- End .modal-header -->
                <div class="modal-body">



                    <div class="form-group">
                        <label for="cat1">Fullname </label>
                        <input type="text" name="fname" id="cat1" value="<?php echo $row['full_name'] ?>" placeholder="Enter Fullname" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="cate">Email </label>
                        <input type="text" name="email" id="cate" value="<?php echo $row['email'] ?>" placeholder="Enter Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="cate">Fund Account</label>
                        <input type="text" name="dfund" id="cate"  placeholder="Fund <?php echo ucfirst($row['full_name']) ?>'s Accound" class="form-control">
                    </div>

                    <input type="hidden" name="link" value="users_details?userid=<?php echo $id ?>">
                    <input type="hidden" name="unique_id" value="<?php echo $id ?>">
                </div><!-- End .modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" name="fund_acct" class="btn btn-primary btn-sm">fund_acct</button>
                </div><!-- End .modal-footer -->
            </form>
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:550px;">
        <div class="modal-content">
            <form action="user-proccess" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h3 class="modal-title" id="addressModalLabel">Update User </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!-- End .modal-header -->
                <div class="modal-body">



                    <div class="card">
                        <div class="card-title">
                            <p>Are you sure you want to delete <?php echo $row['full_name'] ?>?</p>

                        </div>
                        
                    </div>
                    
                    <input type="hidden" name="link" value="users_details?userid=<?php echo $id ?>">
                    <input type="hidden" name="userid" value="<?php echo $id ?>">

                </div><!-- End .modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                </div><!-- End .modal-footer -->
            </form>
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div>

<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:550px;">
        <div class="modal-content">
            <form action="user-proccess" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h3 class="modal-title" id="addressModalLabel">Update User </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!-- End .modal-header -->
                <div class="modal-body">



                    <div class="card">
                        <div class="card-title">
                            <p>Are you sure you want to confirm <?php echo $row['full_name'] ?> as a user ?</p>

                        </div>
                        
                    </div>
                    
                    <input type="hidden" name="link" value="users_details?userid=<?php echo $id ?>">
                    <input type="hidden" name="userid" value="<?php echo $id ?>">

                </div><!-- End .modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" name="confirm" class="btn btn-danger btn-sm">Confirm</button>
                </div><!-- End .modal-footer -->
            </form>
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div>

<div class="modal fade" id="unbaned" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:550px;">
        <div class="modal-content">
            <form action="user-proccess" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h3 class="modal-title" id="addressModalLabel">Update User </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!-- End .modal-header -->
                <div class="modal-body">



                    <div class="card">
                        <div class="card-title">
                            <p>Are you sure you want to Unbaned <?php echo $row['full_name'] ?> ?</p>

                        </div>
                        
                    </div>
                    
                    <input type="hidden" name="link" value="users_details?userid=<?php echo $id ?>">
                    <input type="hidden" name="userid" value="<?php echo $id ?>">

                </div><!-- End .modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" name="unbaned" class="btn btn-danger btn-sm">Unbaned</button>
                </div><!-- End .modal-footer -->
            </form>
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div>


<div class="modal fade" id="baned" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:550px;">
        <div class="modal-content">
            <form action="user-proccess" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h3 class="modal-title" id="addressModalLabel">Update User </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!-- End .modal-header -->
                <div class="modal-body">



                    <div class="card">
                        <div class="card-title">
                            <p>Are you sure you want to baned <?php echo $row['full_name'] ?>  ?</p>

                        </div>
                        
                    </div>
                    
                    <input type="hidden" name="link" value="users_details?userid=<?php echo $id ?>">
                    <input type="hidden" name="userid" value="<?php echo $id ?>">

                </div><!-- End .modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" name="baned" class="btn btn-danger btn-sm">Baned</button>
                </div><!-- End .modal-footer -->
            </form>
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div>