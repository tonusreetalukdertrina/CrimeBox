<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime_management_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Connection failed: " .$conn -> connect_error);
}

if($_SERVER["REQUEST_METHOD"]=='POST'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $usertype = $_POST["usertype"];
    $password = $_POST["password"];
}

$sql = "INSERT INTO user (name, email, usertype, password) VALUES ('$name', '$email', '$usertype', '$password')";

if($conn -> query($sql)===TRUE){
    echo "<h1>You have successfully registered.</h1>";
}
else{
    echo "Error: " .$sql. "<br>" .$conn -> error;
}
$conn -> close();
?>