<?php
       
    try{
		require_once("includes/dbConnection.php");
		require_once("includes/functions.php");

		$rub1_update = $_POST["newRub1"];
            
		$query = "INSERT INTO news ";
		$query .= "(rub1) ";
		$query .= "VALUES (:news)";

		$ps = $db->prepare($query);

		$ps->execute(array(

			"news" => $rub1_update

			));
	}

	catch(Exception $exception){
		echo $exception;
	}

   try{
		require_once("includes/dbConnection.php");
		require_once("includes/functions.php");

		$rub2_update = $_POST["newRub2"];
            
		$query = "INSERT INTO news ";
		$query .= "(rub2) ";
		$query .= "VALUES (:news)";

		$ps = $db->prepare($query);

		$ps->execute(array(

			"news" => $rub2_update

			));
	}

	catch(Exception $exception){
		echo $exception;
	}

   try{
		require_once("includes/dbConnection.php");
		require_once("includes/functions.php");

		$rub3_update = $_POST["newRub3"];
            
		$query = "INSERT INTO news ";
		$query .= "(rub3) ";
		$query .= "VALUES (:news)";

		$ps = $db->prepare($query);

		$ps->execute(array(

			"news" => $rub3_update

			));
	}

	catch(Exception $exception){
		echo $exception;
	}



    try{
		require_once("includes/dbConnection.php");
		require_once("includes/functions.php");

		$text1_update = $_POST["text1"];
            
		$query = "INSERT INTO news ";
		$query .= "(nyhet1) ";
		$query .= "VALUES (:news)";

		$ps = $db->prepare($query);

		$ps->execute(array(

			"news" => $text1_update

			));
	}

	catch(Exception $exception){
		echo $exception;
	}

try{
		require_once("includes/dbConnection.php");
		require_once("includes/functions.php");

		$text2_update = $_POST["text2"];
            
		$query = "INSERT INTO news ";
		$query .= "(nyhet2) ";
		$query .= "VALUES (:news)";

		$ps = $db->prepare($query);

		$ps->execute(array(

			"news" => $text2_update

			));
	}

	catch(Exception $exception){
		echo $exception;
	}

try{
		require_once("includes/dbConnection.php");
		require_once("includes/functions.php");

		$text3_update = $_POST["text3"];
            
		$query = "INSERT INTO news ";
		$query .= "(nyhet3) ";
		$query .= "VALUES (:news)";

		$ps = $db->prepare($query);

		$ps->execute(array(

			"news" => $text3_update

			));
	}

	catch(Exception $exception){
		echo $exception;
	}
/*
    try{
        require_once("includes/dbConnection.php");
		require_once("includes/functions.php");
        
        $query  = "SELECT rub1 FROM news ";
        $query .= "WHERE rub1 = :newRub1";

        $ps = $db->prepare($query);
        $result = $ps->execute([
            
            'newRub1' => $rub1_update
            
        ]);

        $rub1_update = $ps->fetch();
    }

    catch (Exception $exception){
        echo $exception;
    }
*/
?>