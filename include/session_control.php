<?php
session_start ();
//controllo login
if ($_SESSION['user'] != null)
	{} else
	die ("non è stato effettuato il login");
?>