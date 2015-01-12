<?php

include("dbConnection.php");

	if(isset($_POST["deleteCourse"])){
		try{

			$id = $_POST["courses"];

			$query = "DELETE FROM courses WHERE id = :id";

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

		$query = "SELECT * FROM courses";

		$ps = $db->prepare($query);

		$ps->execute();
		$courses = $ps->fetchAll();

	}
	catch(Exception $exception){
		echo $exception;
	}
	
?>
<div class="col-xs-4 hidden adminForms">

	<form action="profile.php" method="POST">
	<select name="courses">
	<option value="">Kurser</option>

	<?php

	foreach($courses as $c){
		echo "<option value =".$c["id"].">".$c["course"]."</option>";
	}

	?>
	</select>
	<input type="submit" name="deleteCourse" class="form-control" value="Ta bort">
	</form>
	
</div>



