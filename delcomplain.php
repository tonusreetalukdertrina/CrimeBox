<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime_management_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Connection failed: " .$conn -> connect_error);
}

$id = $_GET["id"];

$sql = "DELETE FROM images WHERE id='$id'";

if(mysqli_query($conn, $sql)===TRUE){
    header("location: complaint_list.php");
}
else{
    echo "Error: " .$sql. "<br>" .$conn -> error;
}
$conn -> close();
?>