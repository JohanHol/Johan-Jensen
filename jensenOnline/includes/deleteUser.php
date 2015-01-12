<?php

include("dbConnection.php");

	if(isset($_POST["deleteUser"])){
		try{

			$id = $_POST["user"];

			$query = "DELETE FROM users WHERE id = :id";

			$ps = $db->prepare($query);

			$ps->execute(array(
				"id" => $id
			));

		}
		catch(Exception $exception){
			echo $exception;
		}
	}
	try{

		$query = "SELECT * FROM users";

		$ps = $db->prepare($query);

		$ps->execute();
		$user = $ps->fetchAll();

	}
	catch(Exception $exception){
		echo $exception;
	}
	
?>
<div class="col-xs-4 hidden adminForms">

	<form action="profile.php" method="POST">
	<select name="user">
	<option value="">Användare</option>

	<?php

	foreach($user as $u){
		echo "<option value =".$u["id"].">".$u["username"]."</option>";
	}

	?>
	</select>
	<input type="submit" name="deleteUser" class="form-control" value="Ta bort">
	</form>

</div>











