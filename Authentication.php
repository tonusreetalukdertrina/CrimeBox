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
    $email = $_POST["email"];
    $password = $_POST["password"];
}

$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if($row["usertype"]=="Admin"){
    header("location: admin_dashboard.php");
}
elseif($row["usertype"]=="User"){
    header("location: user_dashboard.php");
}
elseif($row["email"]!="email" or $row["password"]!="password"){
    echo "<h1>Incorrect email or password...</h1>";
}
else{
    echo "<h1>Wrong Information</h1>";
}

$conn -> close();
?>