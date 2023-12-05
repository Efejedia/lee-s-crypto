

<?php
session_start();
$conn = new mysqli("localhost", "root", "", "crypto");

function formatNaira($value) {
    return '&#36; '.number_format($value) ;
}

function clean($value){
    
    $value=trim($value);
    // $value=htmlspecialchars($value);
    $value=strip_tags($value);
    return $value;
}