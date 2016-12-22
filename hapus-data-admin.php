<?php
include 'koneksi.php';

$id_complain =$_GET['id'];
$sql = mysql_query("SELECT id_pengguna FROM tb_komplain WHERE id_complain='$id_complain'");
$data = mysql_fetch_array($sql);
$id_pengguna=$data['id_pengguna'];
$hapus_pengguna = mysql_query("delete from tb_pengguna where id_pengguna = '$id_pengguna'");
$hapus_komplain =mysql_query("delete from tb_komplain where id_complain='$id_complain'");
if($hapus_pengguna && $hapus_komplain)
{
	?>
			<script type="text/javascript">alert("Data Berhasil terhapus");
            window.location.href="tampil-semua.php";
            </script>
		<?php
}
else
{
	echo "gagal";
}

?>
