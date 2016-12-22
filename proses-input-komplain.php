<?php
ob_start();
include 'koneksi.php';
if(isset($_POST['kirim']))
{
	$komplain = $_POST['komplain'];
	$id_pengguna = $_POST['id_pengguna'];
	$id_bagian = $_POST['id_bagian'];
		$sql = mysql_query("insert into tb_komplain values(null, '$komplain','$id_pengguna','$id_bagian')");
		if($sql)
		{
		$last_id = mysql_insert_id();
		header('Location: view-komplain.php?id='.$last_id);
		}else{
			
		echo "Gagal";	
			
		}
}
?>