<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>E-Complain</title> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="logo span3">		
				</div>
				<div class="span9">	
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li class="active"><a href="form-pengguna.php">Input Komplain</a></li>
                                    <li class="dropdown">
			                			<a href="prose-logout.php" class="dropdown-toggle" data-toggle="dropdown">Logout Pengguna<b class="caret"></b></a>
			                		
			              			</li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>	
				</div>		
			</div>	
		</div>		
	</header>	
	<div id="page-title">
		<div id="page-title-inner">
		<div class="container">
				<h2>Data Komplain</h2>
			</div>
		</div>	
	</div>
	<div id="wrapper">
		<div class="container">
<div class="title"><h3></h3></div>
<table boder = "1" cellspacing="0" class="table table-hover table-condensed">
<tr>

    <th><h4>Nama</h4></th>
    <th><h4>Alamat</h4></th>
    <th><h4>Telp</h4></th>
    <th><h4>Email</h4></th>
    <th><h4>Jenis Kelamin</h4></th>
    <th><h4>Bagian</h4></th>
    <th><h4>Komplain</h4></th>
    <th><h4>Aksi</h4></th>
</tr>
<tr>
	<?php
			$id_komplain = $_GET['id'];
			$sql = mysql_query("SELECT * FROM tb_pengguna P,tb_bagian B,tb_komplain K 
								WHERE K.id_complain='$id_komplain' 
								AND B.id_bagian=K.id_bagian
								AND P.id_pengguna=K.id_pengguna");
	?>
	<td><h4>
	<?php $tampil = mysql_fetch_array($sql);
	echo $tampil['nama'];?>
    </h4></td>
   	<td><h4>
	<?php echo $tampil['alamat'];?>
	</h4></td>
    <td><h4>
	<?php echo $tampil['telp'];?>
    </h4></td>
    <td><h4>
	<?php echo $tampil['email'];?>
    </h4></td>
    <td><h4>
	<?php echo $tampil['jenis_kelamin'];?>
    </h4></td>
    <td><h4>
	<?php echo $tampil['nama_bagian'];?>
    </h4></td>
    <td width="120"><h4>
	<?php echo $tampil['komplain'];?>
    </h4></td>
    
    <td><a href="update-komplain.php?id=<?php echo $tampil['id_complain'] ?>"><img src="img/BlueRegisterIcon.png" width="30"/></a></td>
	<td><a href="hapus-data.php?id=<?php echo $tampil['id_complain']?>"><img src="img/Delete_Icon.png" width="30"/></a></td>
</tr>

</table>
</tr>
</div>				
	</div>
    <div id="footer">
	<div class="container">
			<div class="row">
            	<div class="span3">
					
					<h3>Profil Kelompok</h3>
					<p>
						<h5>Eko Prasetyo (14.11.7880)<p>
                       	Imam Indra Gumelar (14.11.7899)</p>
                        Teknik Informatika<p>
                        STMIK AMIKOM YOGYAKARTA</p></h5>
					</p>
						
				
                </div>
                
				<div class="span3">
					<h3>Alamat Kami</h3>
					<h5>Mancasan, Condong Catur, Sleman, Yogyakarta<br />
                    Telp : 087813695994 / 089668163927<br />
                    Email : <a href="ekoprasetyo11297@gmail.com">ekoprasetyo11297@gmail.com</a></p><a href="indragumelar27@gmail.com">indragumelar27@gmail.com</a></h5>
				</div>
              </div>
	</div>
    </div>
	
	<div id="copyright">
		<div class="container">		
			<p>
				Copyright &copy; <a href="http://www.bigbag.pe.hu">BigBag 2016</a> <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> designed by BootstrapMaster
			</p>	
		</div>		
	</div>	
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>
</body>
</html>