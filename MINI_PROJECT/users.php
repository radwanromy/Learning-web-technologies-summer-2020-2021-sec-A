<?php
	
?>

	<h1>User List</h1>

	
	
	<br>

	<div>
		<table border="1">
		<tr>
		    <th colspan="4" >
		        Users
		    </th>
		</tr>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Email</td>
				<td>User Type</td>
			</tr>

			<?php  for($i=0; $i<count($users); $i++){ ?>
				<tr>
					<td><?=$users[$i]['id']?></td>
					<td><?=$users[$i]['name']?></td>
					<td><?=$users[$i]['email']?></td>
					<td><?=$users[$i]['type']?></td>
					<td>
						<a href="edit.php?id=<?=$users[$i]['id']?>">Edit</a> |
						<a href="delete.php?id=<?=$users[$i]['id']?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
			<tr>
			   <td colspan="4"  align="right">
		<a href="home.php">Go Home</a> 
			   </td>
	
			</tr>
		</table>
	</div>

	<br>
	<br>
	<br>

<?php
?>