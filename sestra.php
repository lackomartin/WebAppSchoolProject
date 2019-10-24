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
    <a href="sestra.php"><div class="item" id="selected_item">Medicinska sestra</div></a>
    <a href="pacijenti.php"><div class="item">Pacijenti</div></a>
    <a href="lijekovi.php"><div class="item">Lijekovi</div></a>
    <a href="unos_pacijenta.php"><div class="item">Unos pacijenta</div></a>
    <a href="unos_analize.php"><div class="item">Unos analize krvi</div></a>
   </div>

    <div class="body">
     <h1>Popis svih medicinskih sestara u bolnici.</h1>

      <div class="data_space">
        <div class="data_row">
          <div class="id"><b>ID</b></div>
          <div class="podaci"><b>IME</b></div>
          <div class="podaci"><b>PREZIME</b></div>
          <div class="detalji"></div>
        </div>

        <?php
         
         require('connection.php');

         $sestra = mysqli_query($db, "SELECT * FROM Medicinska_sestra");

         while($row = mysqli_fetch_array($sestra)){
         
         echo "
         <div class='data_row2'>
          <div class='id'> ". $row['id'] .  "</div>
          <div class='podaci'>" . $row['ime'] . "</div>
          <div class='podaci'>" . $row['prezime'] . "</div>
          <a href='detalji_sestra.php?id=".$row['id']."'><div class='detalji'>Pogledajte detalje</div></a>
        </div>";

         }

        ?>

        <!--<div class="data_row2">
          <div class="id">1</div>
          <div class="podaci">Goran</div>
          <div class="podaci">Vuk</div>
          <a href="detalji.php"><div class="detalji">Pogledajte detalje</div></a>
        </div>
      -->
      </div>
   










    </div>

</body>

</html>