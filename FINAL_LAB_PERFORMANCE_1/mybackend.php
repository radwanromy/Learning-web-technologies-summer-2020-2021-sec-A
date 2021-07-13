<?php

	if(isset($_REQUEST['submit'])){
		$data = $_REQUEST['test'];

		$conn = mysqli_connect('localhost', 'root', '', 'product_db');

		$sql = "select * from products";
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
		$data = $_REQUEST['test'];

		$conn = mysqli_connect('localhost', 'root', '', 'product_db');

		$sql = "INSERT INTO `products` (`id`, `name`, `buy_price`, `sell_price`) ";
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



?>