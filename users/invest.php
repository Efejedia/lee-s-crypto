<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>

    <?php include 'header.php' ?>

    <section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white">Buy And Sell</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Buy and Sell</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-50">
        <div class="container">
            <?php echo isset($_SESSION['msg']) ? $_SESSION['msg'] : '' ?>
            <div class="row">
                <?php
                $user_query = mysqli_query($conn, "SELECT * FROM duser WHERE unique_id = '$id'");
                if (mysqli_num_rows($user_query) > 0) {
                    $fetch_user = mysqli_fetch_assoc($user_query);


                ?>
                    <div class="col-lg-12 col-12">
                        <?php
                        $plan_id = $_GET['plan_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM dplans where unique_id = '$plan_id'");
                        if (mysqli_num_rows($sql) > 0) {
                            $row = mysqli_fetch_assoc($sql);

                        ?>
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Invest To <?php echo $row['title'];  ?></h4>
                                </div>
                                <div class="box-body">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <!-- <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#market" role="tab">Market</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#limit" role="tab">Limit</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#stop" role="tab">Stop</a> </li> -->
                                    </ul>
                                    <div class="tab-content p-10 tabcontent-border">
                                        <div class="tab-pane active" id="market" role="tabpanel">
                                            <form class="dash-form" action="invest_logic" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <select class="form-select">
                                                        <option value="<?php echo $row['title'];  ?>"><?php echo $row['title'];  ?></option>


                                                    </select>
                                                </div>

                                                <p>Wallet Balance: <span class="fw-600"><?php echo formatNaira($fetch_user['wallet_bln']); ?></span></p>



                                                <div class="input-group mb-10">
                                                    <span class="input-group-addon">Amount</span>
                                                    <input type="number" class="form-control" placeholder="0" name="amount" required="Amount">
                                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                    <input type="hidden" name="max" value="<?php echo $row['max']; ?>">
                                                    <input type="hidden" name="min" value="<?php echo $row['min']; ?>">
                                                    <input type="hidden" name="dreturn" value="<?php echo $row['dreturn']; ?>">
                                                    <input type="hidden" name="duration" value="<?php echo $row['duration']; ?>" id="duration">
                                                    <input type="hidden" value="<?php echo $plan_id; ?>" name="plan_id">
                                                    <input type="hidden" value="<?php echo $row['title']; ?>" name="plan" id="title">
                                                    <input type="hidden" value="<?php echo $fetch_user['wallet_bln']; ?>" name="wallet_bln">
                                                    <input type="hidden" value="<?php echo $fetch_user['email']; ?>" name="email" id="email">
                                                    <input type="hidden" value="<?php echo $fetch_user['full_name']; ?>" name="full_name" >
                                                    <input type="hidden" name="link" value="invest?plan_id=<?php echo $plan_id ?>">
                                                </div>

                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-5">Percentage: </p>
                                                    <p class="mb-5"><span class="fw-600"><?php echo $row['dreturn']; ?>% </span></p>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-5">Minimul Amount </p>
                                                    <p class="mb-5"><span class="fw-600"><?php echo clean(formatNaira($row['min'])); ?> </span></p>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-5">Maximul Amount</p>
                                                    <p class="mb-5"><span class="fw-600"><?php echo clean(formatNaira($row['max'])); ?></span></p>
                                                </div>

                                                <button type="submit" class="btn btn-block btn-success mt-20 text-white" name="submit">Invest</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php }  ?>
            </div>

    </section>
    <?php if (isset($_SESSION['msg'])) {
        unset($_SESSION['msg']);
    } ?>


    <?php include 'js.php'; ?>
    <?php include 'footer.php'; ?>
</body>

</html>


<!-- Include this script in your HTML file -->
<script>

document.addEventListener('DOMContentLoaded', function () {
    // Get the elements
    var countdownElement = document.getElementById('countdown');
    var form = document.querySelector('.input-group');

    // Extract the relevant data from the form
    var duration = parseInt(form.querySelector('[name="duration"]').value); // in seconds
    var plan_id = form.querySelector('[name="plan_id"]').value;

    // Calculate the end time of the countdown
    var endTime = new Date().getTime() + duration * 1000;

    // Update the countdown every second
    var countdownInterval = setInterval(function () {
        var now = new Date().getTime();
        var timeRemaining = endTime - now;

        // Check if the countdown has reached zero
        if (timeRemaining <= 0) {
            clearInterval(countdownInterval); // Stop the countdown when it reaches zero
            countdownElement.innerHTML = 'Countdown Expired';

            // Trigger the AJAX request here
            var email = form.querySelector('[name="email"]').value;
            var amount = form.querySelector('[name="amount"]').value;
            var dplan = form.querySelector('[name="dplan"]').value;
            var userid = form.querySelector('[name="userid"]').value;

            $.ajax({
                url: 'invest_logic.php',
                method: 'post',
                data: {
                    email: email,
                    amount: amount,
                    dplan: dplan,
                    userid: userid,
                    pid: plan_id, // Assuming you want to pass the plan_id from the form
                },
                success: function (response) {
                    // Handle the response from the server if needed
                    console.log(response);
                    // Redirect to success page if necessary
                    window.location.assign('dashboard.php');
                },
                error: function (xhr, status, error) {
                    // Handle the error if needed
                    console.error(error);
                },
            });

            return;
        }

        // Convert milliseconds to seconds and format into days, hours, minutes, and seconds
        var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
        var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

        // Display the countdown in the designated element
        countdownElement.innerHTML =
            'Countdown: ' + days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's';
    }, 1000); // Update every second
});


</script>
