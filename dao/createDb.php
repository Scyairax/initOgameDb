<?php
    include('connection_db.php');
    
	$query = $_POST['queryPlayer'];			

if($conn->query($query) === TRUE){
 echo "Nuovo admin creato con successo.";
}else {
echo "Errore durante la creazione dell'admin: ";
}
?>

