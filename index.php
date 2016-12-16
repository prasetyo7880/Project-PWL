<?php
	include 'koneksi.php';
?>


<html>
<head>
	<title>E-Complain</title>
<style type="text/css">
body
{
	font-family:Arial;
	font-size:14px;
	background-color:#fff;
}
#utama
{
	width:400px;
}
#judul
{
	margin-top:10px;
	margin-left:10px;
	border-top-left-radius:15px;
	border-top-right-radius:15px;
	padding:15px;
	text-align:center;
	color:#0e1a41;
	font-size:20px;
	background-color:#137d90;
	width:1450px;
	height:700px;
	-webkit-box-shadow: inset 0px 0px 5px rgba(0,0,0,.55);
	-moz-box-shadow: inset 0px 0px 5px rgba(0,0,0,.55);
	box-shadow: inset 0px 0px 5px rgba(0,0,0,.55);
}
#input-login
{
	margin-left:10px;
	width:1390px;
	height:450px;
	background-color:#91cbd5;
	padding:20px;
	border-bottom-left-radius:15px;
	border-bottom-right-radius:15px;
	-webkit-box-shadow: inset 0px 0px 5px rgba(0,0,0,.55);
	-moz-box-shadow: inset 0px 0px 5px rgba(0,0,0,.55);
	box-shadow: inset 0px 0px 5px rgba(0,0,0,.55);
}
#isi
{
	margin-left:38%;
	width:300px;
	margin-top:40px;
}
#gambar
{
	margin-top:30px;
}
input
{
	padding:10px;
	border:0px;
}
.lg
{
	width:240px;
	height:40px;
}
.btn
{
	background-color:#0d5c69;
	border-radius:5px;
	color:#fff;
	width:100px;
	height:40px;
}
.btn:hover
{
	background-color:#55cbdf;
	cursor:pointer;
}

</style>
</head>
<body>
<div id="utama">
	<div id="judul">
    <img src="img/rehr_affiliates_main.png" width="220" height="180">
    <div id="input-login">
    <h2><center>Selamat Datang di E-Complain</center></h2>
        <h5>Silakan Login untuk menggunakan aplikasi kami</h5>
        <div style="margin-top:10px;">
        <a href="login.php"><img src="img/user_lock.png" height="100" width="100"/></a>
        <a href="register.php"><img src="img/AddUser.png" height="100" width="100"/></a>       
        </div>
        <div style="margin-top:10px;">
        <a href="login.php"><button type="submit" name="login" class="btn">Sign In</button></a>
        <a href="register.php"><button type="submit" name="register" class="btn">Sign Up</button></a>
        </div> 
     
    </div>
    </div>
</div>
</body>
</html>