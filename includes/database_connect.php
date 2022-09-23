<?php
$server = "";
$username = "";
$password = "";
$dbname = "";
$conn = mysqli_connect($server,$username,$password,$dbname);

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
