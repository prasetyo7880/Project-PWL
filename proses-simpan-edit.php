<?php
ob_start();
include 'koneksi.php';
if(isset($_POST['kirim']))
{
	$id_pengguna=$_POST['id_pengguna'];
	$id_complain = $_POST['id_complain'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
	$email = $_POST['email'];
	$jenis_kelamin  = $_POST['jenis_kelamin'];
	$bagian = $_POST['id_bagian'];
	$komplain = $_POST['komplain'];
$sql=mysql_query("update tb_pengguna set nama='$nama', alamat='$alamat',telp='$telp',email='$email',jenis_kelamin='$jenis_kelamin',id_bagian='$bagian' where id_pengguna='$id_pengguna'") or die ("gagal ".mysql_error());

$sqlkomplain = mysql_query("update tb_komplain set komplain='$komplain', id_bagian='$bagian' where id_complain='$id_complain'");

	if($sql && $sqlkomplain)
	{
		echo $id_complain;
		header('Location: view-komplain.php?id='.$id_complain);
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