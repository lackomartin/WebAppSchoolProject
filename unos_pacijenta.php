<html>
<head>
	<title>Bolnica - web aplikacija</title>
     <meta charset="utf-8">
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
    <a href="lijekovi.php"><div class="item">Lijekovi</div></a>
    <a href="unos_pacijenta.php"><div class="item" id="selected_item">Unos pacijenta</div></a>
    <a href="unos_analize.php"><div class="item">Unos analize krvi</div></a>
   </div>

    <div class="body">
     <h1>Unos novih pacijenata!</h1>

     <div class="insert_space">
      <form method="post" action="insert.php" id="form"><br>

       <div class="row"><div class="insert">Ime:</div><input type="text" name="ime" id= "ime" required></div>
       <div class="row"><div class="insert">Prezime:</div><input type="text" name="prezime" id="prezime" required></div>
       <div class="row"><div class="insert">Soba:</div>
        <select name="myselectbox">
         <option name="myoption1" value="1">1</option>
         <option name="myoption2" value="2">2</option>
         <option name="myoption3" value="3">3</option>
         <option name="myoption4" value="4">4</option>
         <option name="myoption5" value="5">5</option>
       </select></div>
       <div class="row"><div class="insert">Doktor:</div>
       <select name="myselectbox2">
         <option name="myoption1" value="1">Goran Vuk</option>
         <option name="myoption2" value="2">Filip Magić</option>
         <option name="myoption3" value="3">David Goričanec</option>
         <option name="myoption4" value="4">Pero Perić</option>
       </select></div>
      <input type="submit" name="Potvrdi" value="Potvrdi">
    </form>
    </div>
    

    </div>

</body>

</html>