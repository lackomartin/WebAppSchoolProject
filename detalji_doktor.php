<html>
<head>
	<title>Bolnica - web aplikacija</title>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <link rel="stylesheet" href="style.css">
</head>

<body bgcolor="#e8e8e8">
	
   <header>
   </header>

   <div class="menu">
   	<div class="logo_space">
   		<a href="index.php"><img src="images/logo.png" style="width: 80px; height:75px; margin-left: 30%;" ></a>
   	</div>
   	<!-- items -->
    <a href="doktori.php"><div class="item" id="selected_item">Doktor</div></a>
    <a href="sestra.php"><div class="item">Medicinska sestra</div></a>
    <a href="pacijenti.php"><div class="item">Pacijenti</div></a>
    <a href="lijekovi.php"><div class="item">Lijekovi</div></a>
    <a href="unos_pacijenta.php"><div class="item">Unos pacijenta</div></a>
    <a href="unos_analize.php"><div class="item">Unos analize krvi</div></a>
   </div>

    <div class="body">
      <div class="details_space">

   <?php
         $id = $_GET['id'];
         require('connection.php');

         $doktor = mysqli_query($db, "SELECT id, ime, prezime, smijena FROM Doktor, Smijena_doktora WHERE Doktor.id = Smijena_doktora.doktor AND Doktor.id = $id");

         while($row = mysqli_fetch_array($doktor)){
         
         echo "<p class='details'><b>ID:</b> " . $row['id'] ."</p>
         <p class='details'><b>Ime:</b> " . $row['ime'] ."</p>
         <p class='details'><b>Prezime:</b> ". $row['prezime'] ."</p>
         <p class='details'><b>Radna smjena:</b> ". $row['smijena'] ."</p>
         <a href='doktori.php'><div class='back_button'>Nazad</div></a>";

         }

        ?>

     </div>
    </div>

</body>

</html>