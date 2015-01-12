<?php

	//Query functions

	function prepareStatement(){

	Global $db;
	Global $ps;
		$ps = $db->prepare($query);
	}

	//Miscellaneous

	function hasLoggedIn(){
		if(isset($_SESSION["username"])){ //lägg tillbaks utropstecken före isset
            header("Location: index.php");
            return false;
        }
        else{
        	return true;
        }
	}

	function alert($color, $type, $text){

		echo "<div class='alert alert-".$color." alert-dismissible' role='alert' id='loginAlert'>
		<button type='button' class='close' data-dismiss='alert'>
		<span aria-hidden='true'>&times;</span>
		<span class='sr-only'>Close</span></button>
		<strong>".$type."</strong>".$text."</div>";
	}

	function redirect($location){

		echo "<script>window.top.location='".$location."'</script>";
	}

?>