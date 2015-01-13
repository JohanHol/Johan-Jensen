<?php

    session_start();

    require_once("includes/dbConnection.php");
    require_once("includes/functions.php");


    if(!hasLoggedIn()){
    	return;
    }
	
	include("includes/head.php");
	include("includes/checkpost.php");
    
?>
<body>

	<div class="container" id="frontPageContainer">

		<img src="images/logo.jpg" class="pull-left" id="logo">

		<div class="page-header" id="frontpageHeader">

			<form action="includes/logout.php" method="POST">
				<button class="btn btn-default pull-right" type="submit" name="logout">Logga ut</button>
			</form>
	
			<h1>Jensen Online <small></br>Ett steg ut i verkligheten</small></h1>

		</div>
		

		<nav class="navbar navbar-default" id="navigatonBar" role="navigation">
			<div class="conainer-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					 data-target="#dicken">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="dicken">
					<ul class="nav nav-pills nav-justified" id="frontpageMenu">
						<li role="presentation"><a href="frontpage.php">Hem</a></li>
						<li role="presentation"><a href="profile.php">Min profil</a></li>
						<li role="presentation"><a href="#">Inställningar</a></li>
						<li role="presentation"><a href="#">Inställningar</a></li>
						<li role="presentation"><a href="#">Inställningar</a></li>
						<li role="presentation"><a href="#">Inställningar</a></li>		
					</ul>
				</div>
			</div>
		</nav>

    <?php
        if(isset($_POST['editBut1'])){
            try{

                $rub1_update = $_POST["newRub1"];

                $query  = "UPDATE news ";
                $query .= "SET rub1 = :rub1 ";
                $query .= "WHERE id = 1";

                $ps = $db->prepare($query);

                $ps->execute(array(

                    "rub1" => $rub1_update

                    ));
            }

            catch(Exception $exception){
                echo $exception;
            }
        }
   

        if(isset($_POST['editBut11'])){
            try{

                $text1_update = $_POST["text1"];

                $query = "UPDATE news ";
                $query .= "SET nyhet1 = :nyhet1 ";
                $query .= "WHERE id = 1";

                $ps = $db->prepare($query);

                $ps->execute(array(

                    "nyhet1" => $text1_update

                    ));
            }

            catch(Exception $exception){
                echo $exception;
            }
        }

if(isset($_POST['editBut2'])){
            try{

                $rub2_update = $_POST["newRub2"];

                $query = "UPDATE news ";
                $query .= "SET rub2 = :rub2 ";
                $query .= "WHERE id = 1";

                $ps = $db->prepare($query);

                $ps->execute(array(

                    "rub2" => $rub2_update

                    ));
            }

            catch(Exception $exception){
                echo $exception;
            }
        }
   

        if(isset($_POST['editBut22'])){
            try{

                $text2_update = $_POST["text2"];

                $query = "UPDATE news ";
                $query .= "SET nyhet2 = :nyhet2 ";
                $query .= "WHERE id = 1";

                $ps = $db->prepare($query);

                $ps->execute(array(

                    "nyhet2" => $text2_update

                    ));
            }

            catch(Exception $exception){
                echo $exception;
            }
        }

if(isset($_POST['editBut3'])){
            try{

                $rub3_update = $_POST["newRub3"];

                $query = "UPDATE news ";
                $query .= "SET rub3 = :rub3 ";
                $query .= "WHERE id = 1";

                $ps = $db->prepare($query);

                $ps->execute(array(

                    "rub3" => $rub3_update

                    ));
            }

            catch(Exception $exception){
                echo $exception;
            }
        }
   

        if(isset($_POST['editBut33'])){
            try{

                $text3_update = $_POST["text3"];

                $query = "UPDATE news ";
                $query .= "SET nyhet3 = :nyhet3 ";
                $query .= "WHERE id = 1";

                $ps = $db->prepare($query);

                $ps->execute(array(

                    "nyhet3" => $text3_update

                    ));
            }

            catch(Exception $exception){
                echo $exception;
            }
        }
    ?>

		<div class="row">
			<div class="col-sm-8" >
				<img src="http://natgeo.dk/files/bonnier-ngm/attach/laptop_screendump-350-px.jpg" alt="" id="mainPicture" class="img-responsive img-rounded">
                <h2 id="rub1">nyhet1</h2>
                <form action="newsPage.php" method="POST">
                    <label for="meddelande">Ändra rubriken:</label><br />
                    <input type="textarea" name="newRub1" cols="35" rows="1" id="editRub1">
                    <input type="submit"  name="editBut1" value="Edit" id="editBut1">
                </form>
                <p id="news1">Consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.
                </p>
                <form action="newsPage.php" method="POST">
                    <label for="meddelande">Ändra texten:</label><br />
                    <textarea name="text1" cols="35" rows="4" id="editText1"></textarea>
                    <input type="submit" name="editBut11" value="Edit" id="editBut11">
                </form>
			</div>

			<div class="col-sm-4" id="frontPageSideBar1">
				<h2 id="rub2">nyhet2</h2>
                <form action="newsPage.php" method="POST">
                    <label for="meddelande">Ändra rubriken:</label><br />
                    <input type="textarea" name="newRub2" cols="35" rows="1" id="editRub2">
                    <input type="submit" name="editBut2" value="Edit" id="editBut2">
                </form>
				<p id="news2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
                <form action="newsPage.php" method="POST">
                    <label for="meddelande">Ändra texten:</label><br />
                    <textarea name="text2" cols="35" rows="4" id="editText2"></textarea>
                    <input type="submit" name="editBut22" value="Edit" id="editBut22">
                </form>
            </div>

            <div class="col-sm-4" id="frontPageSideBar2">
				<h2 id="rub3">nyhet3</h2>
                <form action="newsPage.php" method="POST">
                    <label for="meddelande">Ändra rubriken:</label><br />
                    <input type="textarea" name="newRub3" cols="35" rows="1" id="editRub3"></textarea>
                    <input type="submit" name="editBut3" value="Edit" id="editBut3">
                </form>
				<p id="news3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
                <form action="newsPage.php" method="POST">
                    <label for="meddelande">Ändra texten:</label><br />
                    <textarea name="text3" cols="35" rows="4" id="editText3"></textarea>
                    <input type="submit" name="editBut33" value="Edit" id="editBut33">
                </form>
			</div>
		</div>
<!--
		<div class="row">
			<div class="col-sm-4 subPictureContainer" id="subPic1">
				<img src="http://www.lugnagatan.net/sy/wp-content/uploads/2010/02/colors.gif" class="subPicture img-rounded img-responsive">
				<h3 id="rub4">Lorem Ipsum dolor ist amet 4</h3>
                    <label for="meddelande">Ändra rubriken:</label><br />
                    <textarea name="news" cols="35" rows="1" id="editRub4"></textarea>
                    <input type="submit" value="Edit" id="editButt4">
                <p id="news4">Consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco.
                </p>
                    <label for="meddelande">Ändra texten:</label><br />
                    <textarea name="news" cols="35" rows="4" id="editText4"></textarea>
                    <input type="submit" value="Edit" id="editButt44">
			</div>

			<div class="col-sm-4 subPictureContainer" id="subPic2">
				<img src="http://lindusfrukt.se/frukter.jpg" class="subPicture img-rounded img-responsive">
                <h3 id="rub5">Lorem Ipsum dolor ist amet 5</h3>
                    <label for="meddelande">Ändra rubriken:</label><br />
                    <textarea name="news" cols="35" rows="1" id="editRub5"></textarea>
                    <input type="submit" value="Edit" id="editButt5">
                <p id="news5">Consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco.
                </p>
                    <label for="meddelande">Ändra texten:</label><br />
                    <textarea name="news" cols="35" rows="4" id="editText5"></textarea>
                    <input type="submit" value="Edit" id="editButt55">
			</div>

			<div class="col-sm-4 subPictureContainer" id="subPic3">
				<img src="http://nyistockholm.se/wp-content/uploads/2011/10/F%C3%A4rger-demokrati.jpg" class="subPicture img-rounded img-responsive">
				<h3 id="rub6">Lorem Ipsum dolor ist amet 6</h3>
                    <label for="meddelande">Ändra rubriken:</label><br />
                    <textarea name="news" cols="35" rows="1" id="editRub6"></textarea>
                    <input type="submit" value="Edit" id="editButt6">
                <p id="news6">Consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco.</p>
                    <label for="meddelande">Ändra texten:</label><br />
                    <textarea name="news" cols="35" rows="4" id="editText6"></textarea>
				    <input type="submit" value="Edit" id="editButt66">
			</div>

		</div>
-->
	</div>

  <!--<script type="text/javascript" src="js/newsUpdate.js"></script>-->

</body>
</html>