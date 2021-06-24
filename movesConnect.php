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
  die("Connection failed: " . $conn->connect_error); }



// ForWard Button 
if(isset($_POST['Forward'])){
    // insert value into table
$sql =("insert into moves (MForWard,MBackWard,MRight,MLeft,MStop) values ('Forward','0','0','0','0')");
//Check
if ($conn->query($sql) === TRUE){
    echo "Move has been added successfully"; }
    else {
    echo "Error: " . $sql . "<br>" . $conn->error; } }


// BackWard Button 
if(isset($_POST['Backward'])){
    // insert value into table
$sql =("insert into moves (MForWard,MBackWard,MRight,MLeft,MStop) values ('0','Backward','0','0','0')");
//Check
if ($conn->query($sql) === TRUE){
    echo "Move has been added successfully"; }
    else {
    echo "Error: " . $sql . "<br>" . $conn->error; } }


// Right Button 
if(isset($_POST['Right'])){
    // insert value into table
$sql =("insert into moves (MForWard,MBackWard,MRight,MLeft,MStop) values ('0','0','Right','0','0')");
//Check
if ($conn->query($sql) === TRUE){
    echo "Move has been added successfully"; }
    else {
    echo "Error: " . $sql . "<br>" . $conn->error; } }


// Left Button 
if(isset($_POST['Left'])){
    // insert value into table
$sql =("insert into moves (MForWard,MBackWard,MRight,MLeft,MStop) values ('0','0','0','Left','0')");
//Check
if ($conn->query($sql) === TRUE){
    echo "Move has been added successfully"; }
    else {
    echo "Error: " . $sql . "<br>" . $conn->error; } }


// Stop Button 
if(isset($_POST['Stop'])){
    // insert value into table
$sql =("insert into moves (MForWard,MBackWard,MRight,MLeft,MStop) values ('0','0','0','','Stop')");
//Check
if ($conn->query($sql) === TRUE){
    echo "Move has been added successfully"; }
    else {
    echo "Error: " . $sql . "<br>" . $conn->error; } }

?>
