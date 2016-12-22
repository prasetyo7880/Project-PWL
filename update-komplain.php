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
				<h2>Biodata Pengguna</h2>
			</div>
		</div>	
	</div>
	<div id="wrapper">
		<div class="container">
                 <div class="table-responsive">
                 <div class="title" align="center"><h3>Berikan informasi yang akurat kepada kami, agar kami dapat melayani anda dengan baik</h3></div>
             <?php
			$id_komplain = $_GET['id'];
			$sql = mysql_query("SELECT * FROM tb_pengguna P,tb_bagian B,tb_komplain K 
								WHERE K.id_complain='$id_komplain' 
								AND B.id_bagian=K.id_bagian
								AND P.id_pengguna=K.id_pengguna");
								
			?>    
             <?php $tampil = mysql_fetch_array($sql);
			 $bagian = $tampil['id_bagian'];
			 $id_pengguna = $tampil['id_pengguna'];
			 $id_complain = $tampil['id_complain'];
			 ?>    
        	<form action="proses-simpan-edit.php" method="post">
            	<table align="center">
                		<input type="hidden" name="id_pengguna" value="<?php echo $id_pengguna;?>">
                        <input type="hidden" name="id_complain" value="<?php echo $id_complain;?>">
                	<tr>
                    <td><h4>Nama</h4></td>
                    <td>:</td>
                    	<td><input type="text" name="nama" placeholder="Nama Lengkap" required size="30" class="form2" value="<?php echo $tampil['nama'];?>" ></td>
                    </tr>
                    <tr>
                    <td><h4>Alamat</h4></td>
                    <td>:</td>
                    <td><input type="text" name="alamat" placeholder="Alamat lengkap" required class="form2"  value="<?php echo $tampil['alamat'];?>"/></td>
                    </tr>
                    <tr>
                    <td><h4>Telp</h4></td>
                    <td>:</td>
                    <td><input type="text" name="telp" placeholder="Telp" required class="form2" value="<?php echo $tampil['telp'];?>"/></td>
                    </tr>
                    <tr>
                    <td><h4>Email</h4></td>
                    <td>:</td>
                    <td><input type="text" name="email" placeholder="Email aktif" required class="form2" value="<?php echo $tampil['email']; ?>"/></td>
                    </tr>
                    <tr>
                    <td><h4>Jenis Kelamin<h4></td>
                    <td>:</td>
                    <td><select name="jenis_kelamin" class="form1">
    					<option value="laki" <?php if($tampil['jenis_kelamin'] = "laki")echo 'selected="selected"'; ?>>Laki-Laki</option>
    					<option value="perempuan" <?php if($tampil['jenis_kelamin'] = "perempuan")echo 'selected="selected"'; ?>>Perempuan</option>
   						</select>
    				</td>
    				</tr>
                    <tr>
                    <td><h4>Bagian<h4></td>
                    <td>:</td>
                    <td><select name="id_bagian" class="form1">
			<?php
            $sql_user = mysql_query("select * from tb_bagian") or die(mysql_error());
            while($data = mysql_fetch_array($sql_user)){
				?>
                <option value="<?php echo $data['id_bagian']?>"
                		<?php if($data['id_bagian']==$bagian)echo 'selected="selected"';?>
                >
                	<?php echo $data['nama_bagian']; ?>
                </option>
                <?php  
           	}
            ?>
    	</select>
    				</td>
    				</tr>
                    <tr>
                    <td><h4>Komplain</h4></td>
                    <td>:</td>
                    <td><textarea name="komplain" class="form2"><?php echo $tampil['komplain'] ?></textarea></td>
                    </tr>
                          
                <tr>
                <td></td>
                <td></td>            
   			 	<td>
                <button type="submit" name="kirim" class="btn-info">Simpan Perubahan</button>
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
     
 