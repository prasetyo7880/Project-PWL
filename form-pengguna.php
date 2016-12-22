<?php require_once("koneksi.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-Complain</title> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
<style type="text/css">


</style>
	</head>
<body>
    	<header>
	<div class="container">
			<div class="row">
				<div class="logo span3">	
					<a class="brand" href="#"></a>		
				</div>
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
                            <div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li class="active"><a href="form-pengguna.php"><h4>Input Komplain</h4></a></li>
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
				<h2>Biodata Pengguna</h2>
			</div>
		</div>	
	</div>
	<div id="wrapper">
		<div class="container">
                 <div class="table-responsive">
                 <div class="title" align="center"><h3>Berikan informasi yang akurat kepada kami, agar kami dapat melayani anda dengan baik</h3></div>
                 
                 
        	<form action="proses-input-pengguna.php" method="post">
            	<table align="center">
                	<tr>
                    <td><h4>Nama</h4></td>
                    <td>:</td>
                    	<td><input type="text" name="nama" placeholder="Nama Lengkap" class="form2"/></td>
                    </tr>
                    <tr>
                    <td><h4>Alamat</h4></td>
                    <td>:</td>
                    <td><input type="text" name="alamat" placeholder="Alamat lengkap" class="form2"  /></td>
                    </tr>
                    <tr>
                    <td><h4>Telp</h4></td>
                    <td>:</td>
                    <td><input type="text" name="telp" placeholder="Telp" class="form2" /></td>
                    </tr>
                    <tr>
                    <td><h4>Email</h4></td>
                    <td>:</td>
                    <td><input type="text" name="email" placeholder="Email aktif"  class="form2" /></td>
                    </tr>
                    <tr>
                    <td><h4>Jenis Kelamin<h4></td>
                    <td>:</td>
                    <td><select name="jenis_kelamin" class="form1">
    					<option value="laki-laki">Laki-Laki</option>
    					<option value="perempuan">Perempuan</option>
   						</select>
    				</td>
    				</tr>
                    <tr>
                    <td><h4>Ke Bagian<h4></td>
                    <td>:</td>
                    <td><select name="id_bagian" class="form1">
			<?php
            $sql_user = mysql_query("select * from tb_bagian") or die(mysql_error());
            while($data = mysql_fetch_array($sql_user)){ 
            echo "<option value=".$data['id_bagian'].">".$data['nama_bagian']."</option>"; }
            ?>
    	</select>
    				</td>
    				</tr>
                          
                <tr>
                <td></td>
                <td></td>            
   			 	<td>
                <button type="submit" name="kirim" class="btn-detail">Lanjut</button>
                <button type="reset" name="reset" class="btn-detail">Reset</button>
    			</td>
    			</tr>
    	</table>
            </form>
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


</body>
</html>
     
 