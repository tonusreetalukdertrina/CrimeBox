<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime_management_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Connection failed: " .$conn -> connect_error);
}

$sql = "SELECT * FROM emergency_message";
$result = $conn->query($sql);
?>
<style>
    .pink{
        background-color: lightgoldenrodyellow;
    }
    .rcorners3 {
      border-radius: 15px 50px;
      background: #73AD21;
      padding: 20px;
      width: 733px;
      height: 150px;
}


.success {background-color: #87cefa;}


</style>
<?php 
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        ?>
        <div class="rcorners3">
            <?php 
            echo $row["date"];
            echo "</br>";
            echo "<b>".$row["sender_email"]."</b>";
            echo "</br>";
            echo $row["message"];
            echo "</br>";
            echo $row["location"];
            ?>
        </div>
        <br>
        <button type="button" class="success"><a href="delmsg.php"><h4>Delete</h4></a></button><br>
        <?php 
        echo "</br>";
        }
        ?>
    <?php 
    }
    ?>
