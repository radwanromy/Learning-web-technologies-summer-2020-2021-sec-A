<?php
	require_once('DB_config.php');
	
	function validate($username, $password){

		$conn = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0 ){
			return true;
		}else{
			return false;
		}
	}

	function getUserByID($id){

		$conn = getConnection();
		$sql = "select * from users where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}
    function getAllUser(){
            $conn = getConnection();
            $sql = "select * from users";
            $result = mysqli_query($conn, $sql);
            $users = [];

            while($user = mysqli_fetch_assoc($result)){
                array_push($users, $user);
            }

            return $users;
        }  

	



	function updateProduct($product){
		$conn = getConnection();
		$sql = "update product set name='{$product['name']}', buying_price='{$product['buying_price']}', selling_price='{$product['selling_price']}' where name={$product['name']}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteProduct($name){
		$conn = getConnection();
		$sql = "delete from product where name={$name}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	}

?>