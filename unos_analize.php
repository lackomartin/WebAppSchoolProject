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
    <a href="unos_pacijenta.php"><div class="item">Unos pacijenta</div></a>
    <a href="unos_pacijenta.php"><div class="item" id="selected_item">Unos analize krvi</div></a>
   </div>

    <div class="body">
     <h1>Unos analize krvi novih pacijenata u bolnici!</h1>

     <div class="insert_space">
      <form method="post" action="insert_analiza.php"><br>
       
       <div class="row"><div class="insert">ID:</div><input type="text" name="pacijent" required></div>
       <div class="row"><div class="insert">Stanje:</div>
       <select name="myselectbox">
         <option name="myoption1" value="Pozitivno">Pozitivno</option>
         <option name="myoption2" value="Negativno">Negativno</option>
       </select></div>
       <div class="row"><div class="insert">Odjel:</div>
       <select name="myselectbox2">
         <option name="myoption1" value="1">Mikrobiologija</option>
         <option name="myoption2" value="2">Biokemija</option>
       </select></div>
      <input type="submit" name="Potvrdi">

    </form>
    </div>






    </div>

</body>

</html>