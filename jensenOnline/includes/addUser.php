<?php

//TO_DO hash password

			try{

				$socialsecurityError = $nameError = $lastnameError = $usernameError = $passwordError = $emailError = $authorityError = $identicalUserError = $identicalEmailError = false;

				require_once("includes/dbConnection.php");
				require_once("includes/functions.php");

				$socialsecurity = trim($_POST["socialsecurity"]);
				$name      		= trim($_POST["name"]);
				$lastname  		= trim($_POST["lastname"]);
				$username  		= trim($_POST["username"]);
				$password  		= trim($_POST["password"]);
				$email     		= trim($_POST["email"]);
				$educationKey   = trim($_POST["educationKey"]);
				$authority 		= trim($_POST["authority"]);

				$options = [
					"cost" => 10,
					//"salt" => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)
				];

				$hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);
					//jasons here  //ssn validate (but should work with just 12 numbers in also)
				
				if((!is_numeric($socialsecurity) && !strlen($socialsecurity) == 12)|| !preg_match("/^[0-9]{8}-[0-9]{4}$/", $socialsecurity)){

    				$socialsecurityError = true;
    			}									//to here	

				if(!preg_match("/^[A-Za-z0-9]*$/",$username)){

  					$usernameError = true;
  				}

				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

  					$emailError = true;
  				}

  				if(strlen($password) < 5){

  					$passwordError = true;
  				}
  				//jason here //username already taken
  				try{
					$query  = "SELECT * FROM users ";
					$query .= "WHERE username = :user";
						
					$ps = $db->prepare($query);
					$result = $ps->execute([
						'user' => $username
					]);
						
					$users = $ps->fetch();
			
				}catch (Exception $exception){
					echo $exception;
				}
				//to here 
				//jason here //Email taken (in progress)
  				try{
					$query  = "SELECT * FROM users ";
					$query .= "WHERE email = :mail";
						
					$ps = $db->prepare($query);
					$result = $ps->execute([
						'mail' => $email
					]);
						
					$emails = $ps->fetch();
			
				}catch (Exception $exception){
					echo $exception;
				}
		
				//to here 
				if($users){
				
					$identicalUserError = true;
				}

				if($emails){

					$identicalEmailError = true;
				} 
  																									// J here
  				if($usernameError === true || $emailError === true || $passwordError === true || $socialsecurityError === true || $identicalUserError === true || $identicalEmailError === true){
				// J here
					if($socialsecurityError === true){

  						alert("danger", "Varning! ", "Tolv siffror med bindestreck i personnumret.");
  						unset($socialsecurity);
  					}//to here
  					if($usernameError === true){

  						alert("danger", "Varning! ", "Du kan bara ha siffror och bokstäver i användernamnet.");
  					}
  					if($emailError === true){

						alert("danger", "Varning! ", "E-postformatet var fel");					
  					}
  					if($passwordError === true){

						alert("danger", "Varning! ", "Lösenordet måste vara med än 5 tecken");
  					}
  					if($identicalUserError === true){

  						alert("danger","Användarnamnet är tagit", " välj ett annat");
  					}
  					if($identicalEmailError === true){
  						
  						alert("danger","E-Postadressen är tagit", " välj en annan");
  					}

  				}
  				else{

					$query = "INSERT INTO users ";
					$query .= "(socialsecurity, name, lastname, username, password, email, education_key, authority) ";
					$query .= "VALUES (:socialsecurity, :name, :lastname, :username,:hashedPassword,:email,:educationKey,:authority)";

					$ps = $db->prepare($query);

					$ps->execute(array(
						"socialsecurity" => $socialsecurity,
						"name"           => $name,
						"lastname"       => $lastname,
						"username"       => $username,
						"hashedPassword" => $hashedPassword,
						"email"          => $email,
						"educationKey"   => $educationKey,
						"authority"      => $authority
					));

					alert("success", $name." ".$lastname, " har lagts till");
					//j here // unsets the fields in add user
					unset($_POST['socialsecurity']);
					unset($_POST['name']);
					unset($_POST['lastname']);
					unset($_POST['username']);
					unset($_POST['password']);
					unset($_POST['email']);
					unset($_POST['educationKey']);
					unset($_POST['authority']);
				
				//	ends here
  				}
			}
			catch(Exception $exception){
				echo $exception;
			}

 ?>



