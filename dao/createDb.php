<html>
    <?php require_once('../include/include_head.php');?>
<body class="text-center" style="color:white;" background="../img/sfondo.jpg">
<?php
    include('connection_db.php');
    
	$queryDb = $_POST['creazioneDb'];			
	$queryAlly = $_POST['alliance'];			
	$queryPly = $_POST['player'];			
	$queryPlt = $_POST['planet'];			
	$querySc = $_POST['score'];			


if($queryDb!=""){
    if($conn->query($queryDb) == TRUE){
        echo '<div>create db    -----   <img src="../img/success-green-check-mark-icon.png" width="25" height="25"></div>';
    }else {
        echo "Errore durante la creazione ";
    }
}
if($queryAlly!=""){
    if($conn->query($queryAlly) == TRUE){
        echo '<div>update alliances    -----   <img src="../img/success-green-check-mark-icon.png" width="25" height="25"></div>';
    }else {
    echo "Errore durante la creazione ";
    }
}
if($queryPly!=""){
   if($conn->query($queryPly) == TRUE){
    echo '<div>update player    -----   <img src="../img/success-green-check-mark-icon.png" width="25" height="25"></div>';
   }else {
   echo "Errore durante la creazione ";
   }
}
if($queryPlt!=""){
   if($conn->query($queryPlt) == TRUE){
    echo '<div>update planets    -----   <img src="../img/success-green-check-mark-icon.png" width="25" height="25"></div>';
   }else {
   echo "Errore durante la creazione ";
   }
}
if($querySc!=""){
   if($conn->query($querySc) == TRUE){
    echo '<div>update score    -----   <img src="../img/success-green-check-mark-icon.png" width="25" height="25"></div>';
   }else {
   echo "Errore durante la creazione ";
   }
}

header( "refresh:5;url=../settingDb.php" );
?>

</body>
</html>
