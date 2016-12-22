<?php
ob_start();
include 'koneksi.php';
if(isset($_POST['kirim']))
{
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
	$email = $_POST['email'];
	$jenis_kelamin  = $_POST['jenis_kelamin'];
	$bagian = $_POST['id_bagian'];
$sql=mysql_query("insert into tb_pengguna values (null, '$nama','$alamat','$telp','$email','$jenis_kelamin','$bagian')");
	if($sql)
	{
		$last_id = mysql_insert_id();
		header('Location: input-komplain.php?id='.$last_id);
	}
	else
	{
		?>
			<script type="text/javascript">alert("Maaf, Biodata Anda gagal kami proses");
            window.location.href="index.php";
            </script>
		<?php
	}
}
?>