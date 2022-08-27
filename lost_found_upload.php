<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime_management_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Connection failed: " .$conn -> connect_error);
}

if(isset($_POST['submit'])){
    $about = $_POST["about"];
    $imagename = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $uploc = 'images/'.$imagename;
}

$sql = "INSERT INTO lost_found (about, image) VALUES ('$about', '$imagename')";
$result = $conn->query($sql);

if(mysqli_query($conn, $sql)===TRUE){
    move_uploaded_file($tmpname, $uploc);
    echo "<h1>Your provided information has been inserted on the lost and found list</h1>";
}
else{
    echo "Error: " .$sql. "<br>" .$conn -> error;
}
$conn -> close();
?>