<?php
session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>


 <script type="text/javascript" src="../JS/cursor.js">  </script>
	<body>
	</body>

	



<?php
	
	//$title = "Display Product";
//	include('header.php');
	require_once('../Model/empDB.php');
	$emps = getAllEmp();

?>

<body>
	<div id="main_content">
	
		
			<legend>Display Employee Information</legend>
			<table border="0" width="100%">
				
				
					<th>
                   Employer ID
					</th>
				<th>
                  Employer Name

					</th>
					<th>
                   Company Name
					</th>
					<th>
                   Contact No
					</th>
					<th>
                  User Name
					</th>
                <th>
                  Password
					</th>
                
                <th>
                   Action
					</th>
 

				<?php for($i=0; $i < count($emps); $i++){ ?>
				<tr align="center">
				<td align="center"><?=$emps[$i]['eid']?></td>
					<td ><?=$emps[$i]['ename']?></td>
					<td><?=$emps[$i]['cname']?></td>
					<td><?=$emps[$i]['cno']?></td>
					<td><?=$emps[$i]['uname']?></td>
					<td><input type="button" name="roomNo" value="<?=$emps[$i]['pass'] ?>" hidden > hidden</td>

				</tr>
				<form action="../Controller/editEmp.php" method="post"  >
                <tr align="center">
				<td ><input type="text" style="color: #00ccff" name="eid" value="<?=$emps[$i]['eid']?>" /></td>
					<td ><input type="text" style="color: #00ccff"  name="ename" value="<?=$emps[$i]['ename']?>" /></td>
					<td><input type="text" style="color: #00ccff"  name="cname" value="<?=$emps[$i]['cname']?>" /></td>
					<td><input type="text" style="color: #00ccff"  name="cno" value="<?=$emps[$i]['cno']?>" /></td>
					<td><input type="text"  style="color: #00ccff" name="uname" value="<?=$emps[$i]['uname']?>" /></td>
				    <td><input type="text"  style="color: #00ccff" name="pass" value="<?=$emps[$i]['pass'] ?>" /></td>
					<td>
				
                           
				        <input  type="submit"  style="color: #00ccff"  name="UP" value="Save Edit " placeholder="" >
                    </td>

				</form>
       

				<?php } ?>
			</table>
	
	</div>

</body>
<?php
	
	}else{
		header('location: ../view/login.php');
	}
?>
        <center>Developed by <a href="https://github.com/radwanromy" style="color: red;font-size:15px;">A. S. M. Radwan</a></center>
		    
		    
  
	</head>
</html>
