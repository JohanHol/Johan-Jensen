<?php

    session_start();

    include("includes/functions.php");

    if(!hasLoggedIn()){
    	return;
    }
	
	include("includes/head.php");
	include("includes/checkpost.php");
?>
<body id="frontPageBody">

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

<!-- For later use 
    	<div class="panel panel-default">
            <div class="panel-heading">
            	<h3 class="panel-title">Lägg till kurs</h3>
            </div>

            <div class="panel-body">
    <table class="table">
      <caption>Optional table caption.</caption>
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
</div>
</div>
-->



</body>
</html>

</body>
</html>