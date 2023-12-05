

<?php
include 'config/constants.php';
if (isset($_POST['submit'])) {
    $plan_id = mysqli_real_escape_string($conn, $_POST['plan_id']);
    $plan = mysqli_real_escape_string($conn, $_POST['plan']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $dreturn = mysqli_real_escape_string($conn, $_POST['dreturn']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $max = mysqli_real_escape_string($conn, $_POST['max']);
    $min = mysqli_real_escape_string($conn, $_POST['min']);
    $wallet_bln = mysqli_real_escape_string($conn, $_POST['wallet_bln']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $link = $_POST['link'];

    //  CHECK IF THE AMOUNT IS LESSER THAN OR GREATER THAN THE WALLET BALANCE
    $validate_amount = mysqli_query($conn, "SELECT * FROM duser WHERE unique_id = '$id'");
    if (mysqli_num_rows($validate_amount) > 0) {
        $valide = mysqli_fetch_assoc($validate_amount);
        if ($wallet_bln < $min) {
            
            
            $_SESSION['msg'] = '<div class="alert alert-danger text-center">Insurficient Fund, your balance does not meet our minimum amount</div>';
            header("location:$link");
            
        } elseif ($wallet_bln < $amount) {
            echo 'Insufficient Funds';
            $_SESSION['msg'] = '<div class="alert alert-danger text-center">Insufficient Fund</div>';

            header("location:$link");
        }elseif($amount > $max) {
            echo $amount.' '. 'is more than'.' '.$max;
            
            $_SESSION['msg'] = '<div class="alert alert-danger text-center">Your amount is more than our maximum amount for this plan</div>';
            header("location:$link");

        } elseif ($amount < $min) {
            echo $amount.' '. 'is not upto'.' '.$min;
            
            $_SESSION['msg'] = '<div class="alert alert-danger text-center">Sorry, your amount does not meet the minimum requirement.</div>';
            header("location:$link");
           
        }else{
            // echo $dreturn;
            // echo $amount;
        
            if ($validate_amount) {
                $total_amount = $amount * $dreturn;
                $total_walletAmount = $wallet_bln - $amount;
                $sum =  $total_amount + $amount;
                 $unique_id = md5(rand(time(), 1000000));
               $expired =  date('Y-m-d h:i:s',strtotime("+ $duration"));
               
                 $invest = mysqli_query($conn, "INSERT INTO invest SET email = '$email' , plan_id = '$plan_id', plan = '$plan', userid = '$id', min = '$min', max = '$max', amount = '$amount', total_amount = '$sum', full_name = '$full_name', unique_id = '$unique_id', damount = '-$amount', duration = '$duration', expiringdate = '$expired'");
                 if ($invest) {
                     $update = mysqli_query($conn, "UPDATE duser SET wallet_bln = '$total_walletAmount' WHERE unique_id = '$id'");
                     
                    if ($update) {
                        $insert = mysqli_query($conn, "INSERT INTO all_trasactions SET email = '$email', full_name = '$full_name', amount = '-$amount', wallet_bln = '$wallet_bln', unique_id = '$id', plan = 'Invest', plan_id = '$unique_id', dreturn = '$total_amount', crypto_name = '$plan'");
                        if ($insert) {
                            $_SESSION['msg'] = '<div class="alert alert-success text-center">You have successfully made a payment! Thanks for choosing us, pls wait for our respond</div>';
                        // header("location:$link");
                        header('location:invest_success');
                        }
                    } else{
                        $_SESSION['msg'] = '<div class="alert alert-danger text-center">Something went worng</div>';
                    }
                      
                }
            } else{
                $_SESSION['<div class="alert alert-danger text-center">Your investment was not able to proceed for some certain reasons, pls try again later</div>'];
                header("location:$link");
                
            }

         
        }
    }
    
}
?>


<div class="alert alert-success"></div>
<div class="alert alert-danger"></div>
