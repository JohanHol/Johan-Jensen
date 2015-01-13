<?php
       
    try{
		require_once("includes/dbConnection.php");
		require_once("includes/functions.php");

		$news_update = $_POST["newRub1"];
            
		$query = "INSERT INTO news ";
		$query .= "(rub1) ";
		$query .= "VALUES (:news)";

		$ps = $db->prepare($query);

		$ps->execute(array(

			"news" => $news_update

			));
	}

	catch(Exception $exception){
		echo $exception;
	}




/*
    try{
        require_once("includes/dbConnection.php");
		require_once("includes/functions.php");
        
        $query  = "SELECT * FROM news ";
        $query .= "WHERE news_update = :newestNews";

        $ps = $db->prepare($query);
        $result = $ps->execute([
            
            'newestNews' => $lastUpdate
            
        ]);

        $lastUpdate = $ps->fetch();
    }

    catch (Exception $exception){
        echo $exception;
    }

*/?>