<?php 

//AJAX in progress for real time updates when selecting educations etc
	require_once("dbConnection.php");

	if($_GET['q']!== ""){
		try{


			$query = "SELECT education_key, name, lastname, socialsecurity ";
			$query .= "FROM users WHERE authority = 'student' AND education_key = :education_key";

			$ps = $db->prepare($query);
					
			$ps->execute(array(
				"education_key" => $_GET['q']	
			));

			$users = $ps->fetchAll();
					
		}
		catch(Exception $exception) {
			echo "Query failed, see error message below: <br /><br />";
			echo $exception. "<br /><br />";
		}
	}

		try{

			


		}
		catch(Exception $exception) {
			echo "Query failed, see error message below: <br /><br />";
			echo $exception. "<br /><br />";
		}

	$output = "";
	
	$output .= "<table>";
	$output .= "<thead>";
	$output .= "<th>Username</th>";
	$output .= "<th>Email</th>";
	$output .= "<th>Options</th>";
	$output .= "</thead>";
	

	foreach($users as $user){
		$output .= "<tr>";
		$output .= "<td>". $user['name']. "</td><td>" .$user['lastname'] . "</td><td><a href='#'>Edit </a><a href='#'> Delete</a></td>";
		$output .= "</tr>";
	}
	$output .= "</table>";

	echo $output;
?>