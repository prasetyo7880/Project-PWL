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
.tx
{
	width:240px;
	height:60px;
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
    <h2><center>Selamat Datang di E-Complain</center></h2>
        <h5>Silakan Register untuk menggunakan aplikasi kami</h5>
    <form action="" method="post">
		<div>
			<input type="text" name="username" placeholder="Username" class="lg"/>
		</div>
		<div style="margin-top:10px;">
			<input type="password" name="password" placeholder="Password" class="lg" />
		</div>
        <div style="margin-top:10px;">
			<input type="text" name="nama" placeholder="Nama Lengkap" class="lg" />
		</div>
		<div style="margin-top:10px;">
			<select name="jenis_kelamin" size="1" class="lg">
				<option value="">Pilih Jenis Kelamain</option>
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</div>
		<div style="margin-top:10px;">
			<textarea name="alamat" class="tx" placeholder='Alamat'></textarea>
		</div>
		<div style="margin-top:10px;">
			<input type="submit" name="register" value="Register" class="btn"/>
			<button type="submit" name="login" class="btn"><a href="login.php" class="btn">Login</a></button>
		</div>
	</form>
    <?php
	include "koneksi.php";
	if (@$_POST['register']) {
		$username = @$_POST['username'];
		$password = @$_POST['password'];
		$nama = @$_POST['nama'];
		$jenis_kelamin = @$_POST['jenis_kelamin'];
		$alamat = @$_POST['alamat'];	
		if ($username == '' || $password == '' || $nama == '' || $jenis_kelamin == '' || $alamat == '') {
			?> <script type="text/javascript">alert('Data tidak boleh kosong');</script> <?php
		}else{
			$sql_insert = mysql_query("insert into tb_login values (null,'$username','$password','$nama','$jenis_kelamin','$alamat','pengguna')") or die(mysql_error());
			if ($sql_insert) {
				?> <script type="text/javascript">alert('Pendaftaran berhasil, silahkan login');</script> <?php
			}
		}
		
	}
	?>
	</div>
</div>

    </div>
    </div>
</div>
</body>
</html>