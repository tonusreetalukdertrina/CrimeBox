
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
    width: 288px;
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

img{
            margin: 15%;
            position: center;
            height: 30%;
            width: 20%;
            opacity: 0.7;
        }
  
.centered {
    position: absolute;
    top: 240px;
    left: 340px;
    transform: translate(-50%, -50%);
    color: white;
}
</style>
    <body>
    <div>
        <img src="images/title.jpg">
        <div class="centered">
            <h1>CrimeBox</h1>
</div>
    </div>
        <div class="columns">
            <div class="vertical-center">
                <ul>
                    <button type="button" class="btn success"><a href="registration.php"><h4>Sign Up</h4></a></button><br><br>
                    <button type="button" class="btn success"><a href="login.php"><h4>Sign In</h4></a></button>
                </ul>
            </div>
        </div>
    </body>
</html>