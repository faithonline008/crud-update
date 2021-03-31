<?php 
	include 'inc/header.php'; 
	include "config.php";
	include "database.php";
?>

<?php 

	$db = new database();
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$query = "DELETE FROM tbl_user WHERE id=$id";
			$deleteData = $db->delete($query);
	}


?>	