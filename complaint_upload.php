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
    $place = $_POST["place"];
    $complaint = $_POST["complaint"];
    $imagename = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $uploc = 'images/'.$imagename;
}

$sql = "INSERT INTO images (place, complaint, image) VALUES ('$place', '$complaint', '$imagename')";

if(mysqli_query($conn, $sql)===TRUE){
    move_uploaded_file($tmpname, $uploc);
    echo "<h1>Your complaint has been sent<h1>";
}
else{
    echo "Error: " .$sql. "<br>" .$conn -> error;
}
$conn -> close();
?>