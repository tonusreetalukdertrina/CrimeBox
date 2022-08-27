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
    $sender_email = $_POST["sender_email"];
    $ip_addr = $_POST["ip_addr"];
    $url = "http://ip-api.com/json/" .$ip_addr;
    $contents = file_get_contents($url);
    $message = $_POST["message"];
    $location = "Location: " .$contents;
}

$sql = "INSERT INTO emergency_message (sender_email, message, location) VALUES ('$sender_email', '$message', '$location')";

if(mysqli_query($conn, $sql)===TRUE){
    echo "<h1>Your message has been sent</h1>";
}
else{
    echo "Error: " .$sql. "<br>" .$conn -> error;
}
$conn -> close();
?>