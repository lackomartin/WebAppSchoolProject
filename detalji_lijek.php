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
    <a href="doktori.php"><div class="item">Doktor</div></a>
    <a href="sestra.php"><div class="item">Medicinska sestra</div></a>
    <a href="pacijenti.php"><div class="item">Pacijenti</div></a>
    <a href="lijekovi.php"><div class="item" id="selected_item">Lijekovi</div></a>
    <a href="unos_pacijenta.php"><div class="item">Unos pacijenta</div></a>
    <a href="unos_analize.php"><div class="item">Unos analize krvi</div></a>
   </div>

    <div class="body">
      <div class="details_space">

   <?php
         $sifra = $_GET['sifra'];
         require('connection.php');

         $lijek = mysqli_query($db, "SELECT Lijek.sifra, Lijek.naziv, Dobavljac.naziv AS naziv2, Dobavljac.sjediste FROM Lijek, Dobavljac WHERE Lijek.dobavljac = Dobavljac.sifra AND Lijek.sifra = $sifra");

         while($row = mysqli_fetch_array($lijek)){
         
         echo "<p class='details'><b>Šifra:</b> " . $row['sifra'] ."</p>
         <p class='details'><b>Naziv lijeka:</b> ". $row['naziv'] ."</p>
         <p class='details'><b>Naziv dobavljača:</b> ". $row['naziv2'] ."</p>
         <p class='details'><b>Sjedište dobavljača:</b> ". $row['sjediste'] ."</p>
         <a href='lijekovi.php'><div class='back_button'>Nazad</div></a>";

         }

        ?>

     </div>
    </div>

</body>

</html>