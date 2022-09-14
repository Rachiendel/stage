
<html>
  <head>
    <title>toevoegForm</title>
	  <link rel="stylesheet" href="index.css">
  </head>
  <body>
  <div class="navbar">
    <h1>ENERGIEOVERZICHT HUISHOUDENS</h1>
  <a href="index.php">Index</a> 
  <a class="active" href="Overzicht.php">overzicht</a> 
  <a href="toevoegForm.php">invoer</a> 
  <a href="admin.php">admin</a> 
  <a href="logout.php">Log uit</a>
</div>

     <form name="agendaFormulier"method="post" action="toevoegVerwerk.php">
         <table id = "hallo">
           
             <tr>
             <td>jaar:</td>
             <td><input type="text" name="jaarVeld"></td>
             </tr>
       
              <tr>
             <td>Gas:</td>
               <td><input type="text" name="GasVeld"required/></td>
             </tr>
			        
           
           <tr>
             <td>elektra:</td>
        <td><input type="text" name="elektraVeld"required/></td>
             </tr>
       
             
             <tr>
            <td></td>
             <td><input type="submit" name="verzend" value="Voeg toe aan agenda" ></td>
             </tr>
       
       
</table>
</form>
</body>
</html>




