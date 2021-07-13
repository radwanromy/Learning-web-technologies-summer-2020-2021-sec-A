<?php
	session_start();
if(isset($_REQUEST['create'])){
		$data = $_REQUEST['test'];

		$conn = mysqli_connect('localhost', 'root', '', 'product_db');

		/*if($conn){
			echo "Database connected...";
		}else{
			echo "Connection error...";
		}*/

		$sql = "insert * from products";
		$result = mysqli_query($conn, $sql);

		$table = "<table border=1>
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>Buying Price</td>
						<td>Selling Price</td>
					</tr>";

		while ($data = mysqli_fetch_assoc($result)){
			$table .= 	"<tr>
							<td>{$data['id']}</td>
							<td>{$data['name']}</td>
							<td>{$data['buy_price']}</td>
							<td>{$data['sell_price']}</td>
						</tr>";
		}

		$table .= "</table>";
		
		echo $table;
		mysqli_close($conn);
	}


	if(isset($_REQUEST['update'])){

		$id		= $_REQUEST['id'];
		$name 	= $_REQUEST['name'];
		$bp 	= $_REQUEST['buy_price'];
		$sp 	= $_REQUEST['sell_price'];

		$products = $_SESSION['products'];
		$product = ['id'=>$id, 'name'=> $name, 'buy_price'=> $buy_price, 'sell_price'=> $sell_price];
		
		//update by ref...
		foreach ($products as $p) {
			if($p['id'] == $id){
				$p = $product;
                array_pop($p);
				break;
			}
		}
        array_pad($products, $product);

		$_SESSION['products'] = $products;
		header('location: ../view/view_product.php');
	}


	if(isset($_REQUEST['delete'])){

		$id	= $_REQUEST['id'];
	
		$$products = $_SESSION['products'];
		
		//delete by ref...
		foreach ($products as $p) {
			if($p['id'] == $id){
                array_pop($products);
				unset($p);
				break;
			}
            
		}
        

		$_SESSION['products'] = $products;
		header('location: ../view/view_users.php');
	}


?>