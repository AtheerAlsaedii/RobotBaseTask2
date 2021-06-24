<?php

// Varibals
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moves"; //Scema name

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}
$sql=mysqli_query($conn,"select * from moves ORDER BY id DESC LIMIT 1 ");
$row=mysqli_fetch_row($sql);
    echo " ForWard button value : ".$row[1]."  <br/> ". " BackWard button value : ".$row[2]."   <br/>". "Right button value : ".$row[3]."  <br/> " ." Left button value : ".$row[4]."  <br/> " ." Stop button value : ".$row[5]. "  <br/> ";   

?>