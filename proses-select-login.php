<?php
	include 'koneksi.php';

		$username=$_POST['username'];
		$password= $_POST['password'];
		$sql = mysql_query("select * from tb_login where username='$username' and password='$password'");
		$data = mysql_fetch_array($sql);
		if(mysql_num_rows($sql) > 0)
		{			
				if($data['level']=="admin")
				{
					@$_SESSION['admin'] = $data['kode_user'];
				header("location: tampil-semua.php");
				}else if($data['level']=="pengguna")
				{
					@$_SESSION['pengguna'] = $data['kode_user'];
				header("location: form-pengguna.php");
				}
				
		}
		else
		{

			?>
			<script type="text/javascript">alert("Maaf, Login gagal.Silakan Sign Up atau cek username dan password Anda");
            window.location.href="index.php";
            </script>
			<?php
			
		}

'tutup.php';
?>