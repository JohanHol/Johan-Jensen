<?php
	session_start();

    include("includes/functions.php");

    if(!hasLoggedIn()){
    	return;
    }

	include("includes/head.php");
	include("includes/checkPost.php");
?>
	
<body id="profilePageBody">

		<div class="page-header header alignCenter">

			<img src="images/logo.jpg" id="logo">

			<h1>Jensen Online</h1>

			<div class="conainer-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					 data-target="#hamburgerMenu" value="Meny">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="hamburgerMenu">
					<ul class="nav nav-pills nav-justified menu" id="mainMenu">
						<li class="border_right" role="presentation"><a href="frontpage.php">Hem</a></li>
						<li class="border_right" role="presentation"><a href="profile.php">Profil</a></li>
						<li class="border_right" role="presentation"><a href="#">Inställningar</a></li>
						<li class="border_right" role="presentation"><a href="#">Inställningar</a></li>
						<li class="border_right" role="presentation"><a href="#">Inställningar</a></li>
						<li role="presentation"><a href="#">Inställningar</a></li>		
					</ul>
				</div>
			</div>
		</div>

    	<div id="wrapper">

		<?php if($_SESSION["authority"] !== "admin"): //byt utropstecken mot likamedtecken

			include("includes/adminOptions.php");?>

		<?php elseif($_SESSION["authority"] === "teacher"): ?>

			<h1>teacher</h1>

		<?php elseif($_SESSION["authority"] === "student"): ?>
			<div class="row">
				<div class='col-xs-4' id='profileSideBar'>
					<div class='list-group'>
					    <a href='#' class='list-group-item'>Dina kurser</a>
						<a href='#' class='list-group-item'>Klasslista</a>
						<a href='#' class='list-group-item'>Frånvaro</a>
					    <a href='#' class='list-group-item'>Inkord</a>
					    <a href='#' class='list-group-item'>Ändra lösenord</a>
				    </div>
			    </div>
			</div>

		<?php else: ?>

			<h1>You shouldn't be here</h1>

		<?php endif; ?>


    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
<script src="js/adminScript.js?<?php echo time();?>"></script>

</body>
</html>