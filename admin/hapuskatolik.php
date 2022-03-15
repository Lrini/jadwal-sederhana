<?php 
	
	include '../koneksi.php';
	$id=$_GET['id'];
	$sql =mysqli_query($koneksi,"DELETE FROM katolik where id='$id'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='input_katolik.php';
        </script>
        <?php
    }

 ?>
 