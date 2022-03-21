<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "gestion_magasin";

$conn = new mysqli($servername, $username, $password, $database);
if (!$conn)
{
    echo "Database connection fails";
}
?>
