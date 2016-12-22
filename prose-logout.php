<?php
@session_start();
unset($_SESSION['username']);
session_destroy();	
?>
			<script type="text/javascript">alert("Anda Telah Logout");
            window.location.href="index.php";
            </script>
			<?php
		
?>