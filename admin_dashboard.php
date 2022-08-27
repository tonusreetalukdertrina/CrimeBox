
<html>
<head>
    <title>Crime Reporting System </title>
</head>
<style type="text/css">
    body{
    margin: 0;
    padding: 0;
    background: url(images/224.jpeg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.btn {
    border: none;
    outline: none;
    height: 90px;
    width: 210px;
    background: #87cefa;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}


.success {background-color: #87cefa;}

.vertical-center {
  margin: 0;
  position: absolute;
  top: 30%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  -ms-transform: translateX(210%);
  transform: translate(210%);
}
.columns {
  float: left;
  width: 50%;
  padding: 8px;
}
.logout {
  margin: 30;  
  float: right;
  width: 10%;
  padding: 8px;
}
</style>
    <body>
        <div class="columns">
            <div class="vertical-center">
                <ul>
                    <button type="button" class="btn success"><a href="admin_checkmessage.php">Emergency Messages</a></button><br><br>
                    <button type="button" class="btn success"><a href="complaint_list.php">Complaint List</a></button><br><br>
                    <button type="button" class="btn success"><a href="lost_found_submit.php">Lost & Found List</a></button>
                </ul>
            </div>
        </div>
        <button type="button" class="logout success"><a href="logout.php">Log Out</a></button>
    </body>
</html>