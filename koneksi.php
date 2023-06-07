<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "latihancrud";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
// <?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "multiuser";

// $conn = mysqli_connect($servername, $username, $password, $database);
// if (!$conn) {
//     die("koneksi gagal");
// }
