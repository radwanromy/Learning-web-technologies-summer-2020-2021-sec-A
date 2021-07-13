<?php
	require_once('DB_config.php');
	
	function validate($id=true){

		$conn = getConnection();
		$sql = "select * from products where id='{$id}' ";
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0 ){
			return true;
		}else{
			return false;
		}
	}

	function getproductByID($id){

		$conn = getConnection();
		$sql = "select * from products where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$product = mysqli_fetch_assoc($result);
		return $product;
	}

	function getAllProduct(){
		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		$products = [];

		while($product= mysqli_fetch_assoc($result)){
			array_push($products, $product);
		}

		return $products;
	}


	function deleteProduct($id){
       $conn = getConnection();
		$sql = "DELETE FROM products where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$products = mysqli_fetch_assoc($result);
		return $products;

	}
	


	function updateProduct($product, $id){
        
        $conn = getConnection();
		$sql = "UPDATE products SET name='{$name}',buy_price='{$buy_price}',sell_price='{$sell_price}' where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$product = mysqli_fetch_assoc($result);
		return $product;

	}

	function insertProduct($product){
		
        $conn = getConnection();
		$sql = "INSERT INTO `products` (`id`, `name`, `buy_price`, `sell_price`) ";
		$result = mysqli_query($conn, $sql);
		$product = mysqli_fetch_assoc($result);
		return $product;
	}

?>