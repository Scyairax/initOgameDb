<?php			
   require_once('connection_db.php');  //include il file contenenti le variabili di accesso al DBMS e al database
	
	$USER = ($_POST ["user"]);				//acquisizione variabili dal form login_magazzino.php
	$PWD = ($_POST ["pwd"]);
																	//costruzione comando sql
	$query = "SELECT user,pwd
			   FROM User
			   WHERE (user='$USER')AND(pwd='$PWD')";
																	// se il controllo viene passato , rimane connesso, altrimenti disconnetti e dai messaggio di errore
	
			$stmt = $conn->prepare($query);
			$stmt->execute();
			$righe_di_risp = $stmt->rowCount();									
	
			if($righe_di_risp!=0)  {
				header( "refresh:2;url=./settingDb.php" );
				//reindirizzamento menu del magazzino
			}else{
				echo ("ATTENZIONE,i dati inseriti potrebbero essere errati");
				//	exit ("credenziali d'accesso non valide")
			}


        $_SESSION['user']=$_POST['user']; 
        $_SESSION['pwd']=$_POST['pwd'];
    
  ?>
