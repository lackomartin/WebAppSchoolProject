<?php
require('connection.php');

$pacijent = $_POST['pacijent'];
$stanje = $_POST['myselectbox'];
$odjel = $_POST['myselectbox2'];

if(isset($_POST['Potvrdi'])){ 

  $result = mysqli_query($db, "SELECT pacijent FROM Analiza_krvi WHERE pacijent = '$pacijent'");
  $count= mysqli_num_rows($result);

  if($count == 0)  {

  $sql = mysqli_query($db, "INSERT INTO Analiza_krvi(pacijent, stanje, odjel) VALUES ('$pacijent', '$stanje', '$odjel')");
  echo '<script type="text/javascript">';
  echo 'alert("Uspješan unos.");';
  echo 'window.location= "unos_analize.php"';
  echo '</script>';
  
  }

 else{
  echo '<script type="text/javascript">';
  echo 'alert("Pacijent već ima upisanu analizu krvi.");';
  echo 'window.location= "unos_analize.php"';
  echo '</script>';
}

}

     
?>