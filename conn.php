<?php
 
$conn = new mysqli("localhost", "root", "Ms@034571", "crud_oop");
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
?>