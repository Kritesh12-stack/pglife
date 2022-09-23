<?php
$server = "localhost";
$username = "id19607148_kritesh";
$password = "U7b}LfrY*n!#3d?=";
$dbname = "id19607148_pglifedatabase";
$conn = mysqli_connect($server,$username,$password,$dbname);

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
