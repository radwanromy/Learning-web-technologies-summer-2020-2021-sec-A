<?php
	$title="Edit Products";
	//include 'header.php';
	require_once('../model/productModel.php');
	$products = updateProduct('$i');
?>

	<h1>Edit Product</h1>

	<nav>
		<a href="home.php">Back</a> |
	</nav>
	
	<br>
	<div>
		<form method="post" action="../controller/productController.php">
			<fieldset>
			<?php  for($i=0; $i<count($products); $i++){ ?>
			<input type="hidden" name="id" value="<?=$products[$i]['id']?>">
				<table>
					
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value="<?=$products[$i]['name']?>"></td>
					</tr>
					<tr>
						<td>Buying Price</td>
						<td><input type="number" name="sell_price" value="<?=$products[$i]['buy_price']?>"></td>
					</tr>
					<tr>
						<td>Selling Price</td>
						<td><input type="number" name="sell_price" value="<?=$products[$i]['sell_price']?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="update" value="Update"></td>
					</tr>
						<?php } ?>
				</table>
			</fieldset>
		</form>
	</div>

	<br>
	<br>

<?php
	include 'footer.php';
?>