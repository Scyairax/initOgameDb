<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-warehouse"></i>Parser</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="planets.php">Planets<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="settingDb.php">settingDb<span class="sr-only">(current)</span></a>
      </li>
	  


    </ul>

    <form ACTION="index.php" class="form-inline my-2 my-lg-0">
	<?php
			echo  '<p  style="color : white"; > Utente&nbsp;&nbsp;:&nbsp;'.$_SESSION['user'].'&nbsp;&nbsp;&nbsp;&nbsp;</p>'; 	
		?>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LogOut</button>
    </form>
  </div>
  </nav>
  