<!DOCTYPE html>
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
.login-box{
    width: 320px;
    height: 420px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
}

</style>
<body>
    <div class="login-box">
    <img src="images/avatar.png" class="avatar">
        <h2>Send Your Complaint</h2>
            <form action="complaint_upload.php" method="POST" enctype="multipart/form-data">
            <p>Place</p>
            <input type="text" name="place" placeholder="Enter Incident Place" required>
            <p>Complaint</p>
            <input type="text" name="complaint" placeholder="Describe Your Complaint" required>
            <input type="file" name="image"><br><br>
			<input type="submit" name="submit" value="Send"> 
            </form>
        </div>
    
    </body>
</html>