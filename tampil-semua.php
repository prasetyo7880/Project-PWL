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
			              			<li class="active"><a href="tampil-semua.php">Data Komplain</a></li>
                                    <li class="dropdown">
			                			<a href="prose-logout.php" class="dropdown-toggle" data-toggle="dropdown">Logout Admin<b class="caret"></b></a>
			                		
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
				<h2>Laporan Admin</h2>
			</div>
		</div>	
	</div>
	<div id="wrapper">
		<div class="container">
<div class="title"><h3></h3></div>
<div class="title"><h3></h3></div>
<?php
	$sql = mysql_query("SELECT * FROM tb_pengguna P,tb_bagian B,tb_komplain K 
								WHERE B.id_bagian=K.id_bagian
								AND P.id_pengguna=K.id_pengguna");
	$data=mysql_num_rows($sql);
	$batas=5;
	$posisi=null;
	
	if(empty($_GET['halaman'])){
	  	$posisi=0;
	  	$halaman=1;
	}else{
		$halaman = $_GET['halaman'];
	  	$posisi=($halaman-1)* $batas;
	}
	?>
<table boder = "1" cellspacing="0" class="table table-hover table-condensed">
<tr>

    <th width="150"><h4>Nama</h4></th>
    <th width="100"><h4>Alamat</h4></th>
    <th width="200"><h4>Telp</h4></th>
    <th width="200"><h4>Email</h4></th>
    <th width="100"><h4>Jenis Kelamin</h4></th>
    <th width="300"><h4>Bagian</h4></th>
    <th width="300"><h4>Komplain</h4></th>
    <th width="100"><h4>Aksi</h4></th>
</tr>	
	<?php
	$limit = "limit ".$posisi.",".$batas;
	$sqljm 	= "SELECT * FROM tb_pengguna P,tb_bagian B,tb_komplain K 
								WHERE B.id_bagian=K.id_bagian
								AND P.id_pengguna=K.id_pengguna $limit";
			$query 	= mysql_query($sqljm);

			$nomer = $posisi;
	 while ($tampil = mysql_fetch_array($query)){
		 $nomer++;
	?>
    <tr>
	<td><h4>
	<?php echo $tampil['nama'];
	?></h4></td>
    
   <td><h4>
	<?php echo $tampil['alamat'];
	?></h4></td>
    <td><h4>
	<?php 
	echo $tampil['telp'];
	?></h4></td>
    <td><h4>
	<?php 
	echo $tampil['email'];
	?></h4></td>
    <td><h4>
	<?php 
	echo $tampil['jenis_kelamin'];
	?></h4></td>
    <td><h4>
	<?php 
	echo $tampil['nama_bagian'];
	?></h4></td>
    <td><h4>
	<?php 
	echo $tampil['komplain'];
	?></h4></td>
    
	<td><h4><a href="hapus-data-admin.php?id=<?php echo $tampil['id_complain']?>"><img src="img/Delete_Icon.png" width="30"/></a></h4></td>
    </tr>
	<?php }?>
</table>
</tr>
<div class="halaman" align="center">
<h4>
<?php
		
			// tampilan bawah pagination
			// cek jika variabel limit tidak kosong
			if(!empty($limit)){
				// menghitung jumlah halaman 
				$jumlah_halaman = ceil($data / $batas);

				// melakukan perulangan sesuai jumlah halaman di atas
				for($i = 1; $i <= $jumlah_halaman; $i++)

				// cek jika $i tidak sama dengan halaman
			    if($i != $halaman) {
			    	echo "<a href='tampil-semua.php?halaman=$i'>$i</a>";
			  	} else {
			  		echo "<a class='active'>$i</a>";
			  	}
			}
	?>
</h4>
</div>

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
				Copyright &copy; <a href="#">E-Complain 2016</a> <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> designed by BootstrapMaster
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