<?php
require('connection.php');

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$soba = $_POST['myselectbox'];
$doktor = $_POST['myselectbox2'];

if(isset($_POST['Potvrdi'])){ 
	
	mysqli_query($db, "INSERT into Pacijent(ime, prezime, soba, doktor) values('$ime', '$prezime', '$soba', '$doktor')");
	echo '<script type="text/javascript">';
    echo 'alert("Uspješan unos pacijenta.");';
    echo 'window.location= "unos_pacijenta.php"';
    echo '</script>';
}

     
?>

