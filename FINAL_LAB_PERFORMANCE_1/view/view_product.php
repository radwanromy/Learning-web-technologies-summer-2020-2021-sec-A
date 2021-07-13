<?php
	$title="View Products";
	//include 'header.php';
	require_once('../model/productModel.php');
	$products = getAllProduct();
?>

	<h1>Product List</h1>

	<nav>
		<a href="home.php">Back</a> |
	</nav>
	
	<br>

	<div>
		<table border="1">
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Buying Price</td>
				<td>Selling Price</td>
				<td>Action</td>
			</tr>

			<?php  for($i=0; $i<count($products); $i++){ ?>
				<tr>
					<td><?=$products[$i]['id']?></td>
					<td><?=$products[$i]['name']?></td>
					<td><?=$products[$i]['buy_price']?></td>
					<td><?=$products[$i]['sell_price']?></td>
					<td>
						<a href="edit.php?id=<?=$products[$i]['id']?>">Edit</a> |
						<a href="delete.php?id=<?=$products[$i]['id']?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
			
		</table>
	</div>

	<br>
	<br>
	<br>

<?php
	include 'footer.php';
?>