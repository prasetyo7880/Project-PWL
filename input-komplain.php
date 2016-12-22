<?php 
include 'koneksi.php'; ?>
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
                         
				<h2>Masukkan komplain</h2>
			</div>
		</div>	
	</div>
	<div id="wrapper">
		<div class="container">
                 <div class="table-responsive">
                 <div class="title" align="center"><h3>Berikan saran, keluhan, pujian, komplain, aspirasi atau hal-hal lain yang bersifat membangun kepada perusahaan kami, agar kami dapat menjadi lebih baik</h3></div>
                 
    		<?php
				if(isset($_GET['id'])){
					$id_pengguna = $_GET['id'];
					
					$sql = mysql_query("SELECT id_bagian FROM tb_pengguna WHERE id_pengguna='$id_pengguna'");
					
					$tampil = mysql_fetch_array($sql);
					
					$id_bagian = $tampil['id_bagian'];
				}
			?>

        	<form action="proses-input-komplain.php" method="post">
            	
            	<table align="center">
                	<tr>
                    <td></td>
                    <td><img src="img/complain.png" height="150" width="150"/></td>
                    	<input type="hidden" name="id_pengguna" value="<?php echo $id_pengguna;?>">
                		<input type="hidden" name="id_bagian" value="<?php echo $id_bagian; ?>">
                    	<td><textarea  name="komplain" placeholder="Tuliskan Komplainmu" class="form2"></textarea></td>
                    </tr>
                <td></td>
                <td></td>            
   			 	<td>
                <button type="submit" name="kirim" class="btn-info">Lanjut</button>
    			</td>
    			</tr>
    	</table>
            </form>
            
            
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
     
 