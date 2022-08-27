<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime_management_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Connection failed: " .$conn -> connect_error);
}

$sql = "SELECT * FROM images";
$result = $conn->query($sql);
?>

<table width="600" height="1000" border="1" cellspacing="1" cellpadding="1">
    <?php 
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            ?>
            <tr>
                <td>ID</td>
                <td><?php echo $row["id"]; ?></td>
                <td><a href="delcomplain.php?id=<?php echo $row["id"] ?>">Delete</a></td>
            </tr>
            <tr>
            <td>Place</td>
                <td><?php echo $row["place"]; ?></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
            <td>Complaint</td>
                <td><?php echo $row["complaint"]; ?></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
            <td>Image</td>
                <td><?php echo "<img src='images/".$row["image"]."' class='my_3' style='width:200px, height:200px;'>"; ?></td>
                <td>&nbsp;</td>
            </tr>
        <?php 
        }
        ?>
    <?php 
    }
    ?>
</table>
