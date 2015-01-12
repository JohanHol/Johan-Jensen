<?php

	try{

		include("dbConnection.php");

		$query = "SELECT * FROM users";

		$ps = $db->prepare($query);

		$ps->execute();

		$users = $ps->fetchAll();

	}
	catch(Exception $exception){
		echo $exception;
	}

?>

<div class="col-xs-4 hidden adminForms">
	<form action="editUser.php" method="POST">
		<select name="editUser">
			<option>Användare</option>

	<?php

	foreach($users as $u){

		echo "<option value =".$u["id"].">".$u["socialsecurity"]." ".$u["name"]." ".$u["lastname"]."</option>";
	}

	?>

			</option>
		</select>
	</form>
</div>

<?php



?>












