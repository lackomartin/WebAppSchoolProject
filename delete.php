<?php

require('connection.php');
$pacijentID = $_POST['pacijent_id'];

if(isset($_POST['Potvrdi'])){
	mysqli_query($db, "DELETE FROM Pacijent WHERE id = $pacijentID");
	echo '<script type="text/javascript">';
    echo 'alert("Uspješno ste obrisali pacijenta.");';
    echo 'window.location= "pacijenti.php"';
    echo '</script>';
}



?>