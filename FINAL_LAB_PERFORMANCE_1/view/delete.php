<?php
	$title="Delete Products";
	//include 'header.php';
	require_once('../model/productModel.php');
	$products = deleteProduct('id');
?>


	<h1>Delet Product</h1>

	<nav>
		<a href="home.php">Back</a> |
	</nav>
	
	<br>
	<div>
		<form method="post" action="../controller/productController.php">
		<?php  for($i=0; $i<count($products); $i++){ ?>
			<input type="hidden" name="id" value="<?=$products[$i]['id']?>">
			<table border="1">
				<tr>
					<td>Name</td>
					<td><?=$products[$i]['name']?></td>
				</tr>
				<tr>
					<td>Buying Price</td>
					<td><?=$products[$i]['buy_price']?></td>
				</tr>
				<tr>
					<td>Selling Price</td>
					<td>
					<?=$products[$i]['sell_price']?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><h3>Are you sure?</h3></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="delete" value="Confirm"></td>
				</tr>
			</table>	<?php } ?>
		</form>
	</div>

	<br>
	<br>

<?php
	include 'footer.php';
?>