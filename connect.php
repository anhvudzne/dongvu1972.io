<?php
@session_start();
//config 

$ip_sv = "localhost";
$dbname_sv ="tea";
$user_sv = "root";
$pass_sv = "";

//GMT +7

date_default_timezone_set('Asia/Ho_Chi_Minh');

// Create connection

$conn = new mysqli($ip_sv, $user_sv, $pass_sv, $dbname_sv);
    
// Check connection