<?php 
	include 'inc/header.php'; 
	include "config.php";
	include "database.php";
?>

<?php 
	$db = new database();
	$query = "SELECT * FROM tbl_user";
	$read = $db->select($query);

 ?>

 <?php 

 	if(isset($_GET['msg'])){
 		echo "<span style='color:green'>".$_GET['msg']."</span>";
 	}

  ?>

<form action="index.php" method="post">
		<?php if($read) { ?>


			
	<table class="tblone">
		


		<tr>
			<th width="10%">Serial</th>
			<th width="35%">Name</th>
			<th width="25%">Email</th>
			<th width="15%">Skill</th>
			<th colspan="25%">Action</th>
		</tr>

			<?php $i=1;
		 while($row = $read->fetch_assoc()) {?>	<!-- associative array akare print korbe -->


		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['skill'] ?></td>
			<td><a href="update.php?id=<?php echo urlencode($row['id']); ?>">Edit</a></td>

			<td><a href="delete.php?id=<?php echo urlencode($row['id']); ?>">Delete</a></td>

		</tr>

		<?php } ?>

		<?php } else{ ?>
			<p>Data is not available...!</p>
		<?php } ?>

	</table>
</form>

<a href="create.php">Add New</a>
























 
<?php include 'inc/footer.php'; ?>