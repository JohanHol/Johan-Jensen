
<!--TO_DO: add the rest of the forms and style dropdown menus-->

<!--Menu left column-->

	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<li class="sidebar-brand"><a href="#">Alternativ</a></li>
			<li class="adminOptions" data-value="0"><a href="#">Lägg till användare</a></li>
			<li class="adminOptions" data-value="1"><a href="#">Lägg till utbildning</a></li>
			<li class="adminOptions" data-value="2"><a href="#">Lägg till kurs</a></li>
			<li class="adminOptions" data-value="3"><a href="#">Hantera anv,kurs,utbild</a></li>
			<li class="adminOptions" data-value="4"><a href="#">Ändra utbildning</a></li>
			<li class="adminOptions" data-value="5"><a href="#">Ändra kurs</a></li>
			<li class="adminOptions" data-value="6"><a href="#">Ta bort användare</a></li>
			<li class="adminOptions" data-value="7"><a href="#">Ta bort utbildning</a></li>
			<li class="adminOptions" data-value="8"><a href="#">Ta bort kurs</a></li>
		</ul>
	</div>


				<!--Add user form-->

	<div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
    

		<div class="hidden adminForms">
    		<div class="panel panel-default col-md-8 col-md-offset-2" id="profilePanel">
            	<div class="panel-heading">
            		<h3 class="panel-title">Lägg till användare</h3>
            	</div>

            	<div class="panel-body">
					<div class="col-md-12">
				    	<form action="profile.php" method="POST">
				    		<div class="input-group">
								<span class="input-group-addon">Personnummer</span>
				    			<input type="text" name="socialsecurity" class="form-control" placeholder="ÅÅÅÅMMDD-XXXX">
				    		</div>
				    		<div class="input-group">
								<span class="input-group-addon">Förnamn</span>
				    			<input type="text" name="name" class="form-control" placeholder="Balder">
				    		</div>
		    				<div class="input-group">
								<span class="input-group-addon">Efternamn</span>
				    			<input type="text" name="lastname" class="form-control" placeholder="Sigurdsson">
				    		</div>
		    				<div class="input-group">
								<span class="input-group-addon">Användarnamn</span>
				    			<input type="text" name="username" class="form-control" placeholder="ykalstr001">
				    		</div>
		    				<div class="input-group">
								<span class="input-group-addon">Lösenord</span>
				    			<input type="text" name="password" class="form-control" placeholder="Minst 5 tecken">
				    		</div>
		    				<div class="input-group">
								<span class="input-group-addon">E-post</span>
				    			<input type="text" name="email" class="form-control" placeholder="odin@valhalla.com">
				    		</div>
				    		<div class="input-group">
								<span class="input-group-addon">Utbildning</span>
				    			<input type="text" name="educationKey" class="form-control" placeholder="WUK15, COBOL15">
				    		</div>
				    		<div class="input-group">
								<span class="input-group-addon">Behörighet</span>
				    			<input type="text" name="authority" class="form-control" placeholder="student,teacher,admin">
				    		</div>				    						    		
				    		<input type="submit" name="addUser" class="form-control formSubmits" value="Skapa">
				    	</form>
				    	</div>
				  	</div>
				</div>
			</div>

				<!--Add education form-->
	<div class="hidden adminForms">
    	<div class="panel panel-default col-md-8 col-md-offset-2" id="profilePanel">
            <div class="panel-heading">
            	<h3 class="panel-title">Lägg till utbildning</h3>
            </div>

            <div class="panel-body">
				<div class="col-md-12">
				    <form action="profile.php" method="POST">

				    	<div class="input-group">
							<span class="input-group-addon">Utbildningsnamn</span>
				    		<input type="text" name="education" class="form-control" placeholder="T.ex WUK15">
				    	</div>

				    	<input type="submit" name="addEducation" class="form-control formSubmits" value="Skapa">
				    </form>
				</div>
			</div>
		</div>
	</div>

				<!--Add course form-->
	<div class="hidden adminForms">
    	<div class="panel panel-default col-md-8 col-md-offset-2" id="profilePanel">
            <div class="panel-heading">
            	<h3 class="panel-title">Lägg till kurs</h3>
            </div>

            <div class="panel-body">
				<div class="col-md-12">
				    <form action="profile.php" method="POST">

				    	<div class="input-group">
							<span class="input-group-addon">Kursnamn</span>
				    		<input type="text" name="course" class="form-control" placeholder="T.ex Javascript">
				    	</div>
				    	<div class="input-group">
							<span class="input-group-addon">Utbildning</span>
				    		<input type="text" name="educationKey" class="form-control" placeholder="T.ex WUK15">
				    	</div>

				    	<input type="submit" name="addCourse" class="form-control formSubmits" value="Skapa">
				    </form>
				</div>
			</div>
		</div>
	</div>

				<!--Change user form-->

	<div class="hidden adminForms">
    	<div class="panel panel-default col-md-8 col-md-offset-2" id="profilePanel">
            <div class="panel-heading">
    			<div class="btn-group btn-group-justified" role="group" aria-label="...">
  					<a href="#" class="btn btn-default">WUK</a>
  					<a href="#" class="btn btn-default">COBOL</a>
  					<a href="#" class="btn btn-default">PTK</a>
  					<a href="#" class="btn btn-default">ITP</a>
				</div>
            </div>

            <div class="panel-body">
				<div class="col-md-12">
	    <table class="table">
      <caption></caption>
      <thead>
        <tr>
          <th>Kursnamn</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Java</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>PHP</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>SQL</td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
				</div>
			</div>
		</div>
	</div>

				<!--Handle educations form-->

				<form action="profile.php" class="col-md-12 hidden adminForms">
					<input type="text" value="education placeholder form">
				</form>

				<!--Handle courses form-->

				<form action="profile.php" class="col-md-12 hidden adminForms">
					<input type="text" value="course placeholder form">
				</form>

				<!--Delete user form-->

				<?php include("includes/deleteUser.php");?>

				

				<?php include("includes/deleteCourse.php");?>

				

				<?php include("includes/deleteEducation.php");?>


	                	</div>
	                </div>
	            </div>
	        </div>











			