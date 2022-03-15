<?php 
	
	include '../koneksi.php';
	$id=$_GET['id'];
	$sql =mysqli_query($koneksi,"DELETE FROM muslim where id='$id'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='input_muslim.php';
        </script>
        <?php
    }

 ?>
 