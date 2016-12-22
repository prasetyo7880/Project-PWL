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
	margin-top:30px;
	margin-left:40px;
	border-top-left-radius:15px;
	border-top-right-radius:15px;
	padding:15px;
	text-align:center;
	color:#0e1a41;
	font-size:20px;
	background-color:#137d90;
	width:1400px;
	height:620px;
	-webkit-box-shadow: inset 0px 0px 5px rgba(0,0,0,.55);
	-moz-box-shadow: inset 0px 0px 5px rgba(0,0,0,.55);
	box-shadow: inset 0px 0px 5px rgba(0,0,0,.55);
}
#input-login
{
	margin-left:10px;
	width:1340px;
	height:370px;
	background-color:#91cbd5;
	padding:20px;
	border-bottom-left-radius:15px;
	border-bottom-right-radius:15px;
	-webkit-box-shadow: inset 0px 0px 5px rgba(0,0,0,.55);
	-moz-box-shadow: inset 0px 0px 5px rgba(0,0,0,.55);
	box-shadow: inset 0px 0px 5px rgba(0,0,0,.55);
}
.pilih
{
	padding-left:50px;
	float:left;
	color:#fff;
	cursor:pointer;
	font-size:14px;
}
.pilih a:hover img{
	opacity: 0.9;
	color: #34acd3;
}
.pilih img
{
	-moz-transition: ease-in;
}
.gambar
{
	float:left;
	padding-left:390px;
	color:#fff;
	cursor:pointer;
	font-size:14px;
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
	height:30px;
}
.btn
{
	background-color:#0d5c69;
	border-radius:5px;
	color:#fff;
	width:100px;
	height:30px;
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
    <h2><center>Silakan Pilih Bagian</center></h2>
	  <p>
        
        <?php
	  $sq=mysql_query("select * from tb_perusahaan");
	  while($data = mysql_fetch_assoc($sq)){
		  
	  ?>
	    <div class="gambar">
            <a href="form-pengguna.php"><?php echo $data['nama_perusahaan']; ?></a><br/>
		</div>
           
     	 <div class="pilih">
             
            <a href="form-pengguna.php"><img src="img/empresa.png" width="140" height="140"></a><br/> 
        </div>
        <div class="pilih">
         <a href="form-pengguna.php"><img src="img/loja 1.png" width="120" height="120"></a><br/>
        </div>
        <?php
	  }
	  ?>
        
        </p>
      
    </div>
    </div>
    
</div>
</body>
</html>