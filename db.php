<?php

$host = "localhost";

$user = "root";

$password = "";

$db = "azienda";

$conn = mysqli_connect($host, $user, $password);

if(!$conn)
{
	die ("connessione fallita:".mysqli_connect_error());
	
}
	mysqli_select_db ($conn, $db) 
	or ("Errore nella selezione database:" .mysqli_error($conn));
    echo "Connessione riuscita";
?>