<html>
<head>
	<title>Bolnica - web aplikacija</title>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <link rel="stylesheet" href="style.css">

     <script type="text/javascript">
       function checkDelete(){
        return confirm('Jeste li sigurni?');
        }
    </script>
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
    <a href="pacijenti.php"><div class="item" id="selected_item">Pacijenti</div></a>
    <a href="lijekovi.php"><div class="item">Lijekovi</div></a>
    <a href="unos_pacijenta.php"><div class="item">Unos pacijenta</div></a>
    <a href="unos_analize.php"><div class="item">Unos analize krvi</div></a>
   </div>

    <div class="body">
      <div class="details_space">

   <?php
         $id = $_GET['id'];
         require('connection.php');

         $pacijent = mysqli_query($db, "SELECT Pacijent.id, Pacijent.ime, Pacijent.prezime, Pacijent.soba, Doktor.ime AS ime2,
          Doktor.prezime AS prezime2 
          FROM Pacijent, Doktor 
          WHERE Pacijent.doktor = Doktor.id AND Pacijent.id = $id");

         while($row = mysqli_fetch_array($pacijent)){
         
         echo "<p class='details'><b>ID:</b> " . $row['id'] ."</p>
         <p class='details'><b>Ime:</b> " . $row['ime'] ."</p>
         <p class='details'><b>Prezime:</b> ". $row['prezime'] ."</p>
         <p class='details'><b>Soba:</b> ". $row['soba'] ."</p>
         <p class='details'><b>Doktor:</b> ". $row['ime2'] . " ". $row['prezime2'] ."</p>
         <a href='pacijenti.php'><div class='back_button'>Nazad</div></a>
         <form method='post' action='delete.php'>
         <input type='hidden' name='pacijent_id' value='".$row['id']."' />
         <input type='submit' name='Potvrdi' class='delete' value='Obriši pacijenta' onclick='return checkDelete()''>
         </form>
         </div>";

        }

        $analiza = mysqli_query($db, "SELECT Pacijent.id, Analiza_krvi.stanje, Odjeli.naziv 
          FROM Pacijent, Analiza_krvi, Odjeli 
          WHERE Pacijent.id = Analiza_krvi.pacijent AND Analiza_krvi.odjel = Odjeli.sifra AND Pacijent.id = $id");

         while($row2 = mysqli_fetch_array($analiza)){

         echo "<div class='blood_test'>
         <p class='details' style='text-align:center;'><b>ANALIZA NALAZA KRVI</b></p>
         <hr></br>
         <p class='details'><b>Stanje: </b>". $row2['stanje'] ."</p>
         <p class='details'><b>Odjel na kojem je rađena analiza: </b>". $row2['naziv'] ."</p>
         </div>";
         
        }

      ?>

    </div>

</body>

</html>