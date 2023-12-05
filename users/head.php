
<?php
include 'config/constants.php';
if (!isset($_SESSION['unique_id'])) {
    header('location:login');
 } 

 $id =$_SESSION['unique_id'];
 
 $mysql = $conn->query("SELECT * FROM `duser` WHERE unique_id = '$id' ");
 if($mysql->num_rows>0){
   $row = $mysql->fetch_assoc();

   if($row['status']=='Pending'){
     $_SESSION['msg'] = "Sorry, you're not allow to login until admin verified your account!";
     header("Location:login.php");
   }else if($row['status']=='Banned'){
     $_SESSION['msg'] = "Sorry, your account has been banned, contact admin!";
     header("Location:login.php");
   }
 }
 // @session_start();
 
 // include 'config.php';
    //    $email = $_SESSION['email'];
    //    $unique_id = $_SESSION['unique_id'];
    
?>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://crypto-admin-templates.multipurposethemes.com/sass/bs5/images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.5/css/all.css">


    <title>Crypto</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
	<!-- <link rel="stylesheet" href="css/skin_color.css"> -->