<?php
/*
include("dbConnection.php");

	if(isset($_POST["deleteEducation"])){
		try{

			$id = $_POST["educations"];

			$query = "DELETE FROM educations WHERE id = :id";

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

		$query = "SELECT * FROM educations";

		$ps = $db->prepare($query);

		$ps->execute();
		$educations = $ps->fetchAll();

	}
	catch(Exception $exception){
		echo $exception;
	}
	
?>
<div class="col-xs-4 hidden adminForms">

	<form action="profile.php" method="POST">
	<select name="educations">
	<option value="">Utbildningar</option>

	<?php

	foreach($educations as $e){
		echo "<option value =".$e["id"].">".$e["education"]."</option>";
	}

	?>
	</select>
	<input type="submit" name="deleteEducation" class="form-control" value="Ta bort">
	</form>
	
</div>

*/

