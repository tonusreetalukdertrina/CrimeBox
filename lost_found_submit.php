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
  top: 66%;
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
</style>
<body>
    <div class="login-box">
    <img src="images/avatar.png" class="avatar">
        <h3>Upload Info of Lost or Found</h3>
            <form action="lost_found_upload.php" method="POST" enctype="multipart/form-data">
            <p>About</p>
            <input type="text" name="about" placeholder="Enter Information" required>
            <input type="file" name="image" required><br><br>
			<input type="submit" name="submit" value="Send"> 
            </form>
        </div>
        <div class="columns">
            <div class="vertical-center">
                <ul>
                    <button type="button" class="btn success"><a href="edit_lost_found.php">View Lost & Found List</a></button>
                </ul>
            </div>
        </div>
    </body>
</html>