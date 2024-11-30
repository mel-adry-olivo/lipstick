<?php 

$conn = new mysqli('localhost', 'root', '', 'lipstick');
if ($conn->connect_error) {
    exit("Connection failed: " . $conn->connect_error);
}