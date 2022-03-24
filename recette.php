<!DOCTYPE html>
<html>
	<title>RECETTE</title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="recette.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./CSS/w3.css">
<link rel="stylesheet" href="./CSS/css">

<style>
	body, html,h1 {height: 100%;
font-style: italic;
font-family: "Amatic SC", sans-serif;
background-color: black!important;}
</style>
</head>
<body>
<div class="emi3">
	<div class="w3-top w3-hide-small" style="z-index: 1; top: 0;">
		<div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
		  <a href="home.php" class="w3-bar-item w3-button"><i>Accueil</i></a>
		  <a href="recette.php" class="w3-bar-item w3-button"><i>Recettes</i></a>
		  <a href="#about" class="w3-bar-item w3-button"><i>A Propos</i></a>
		  <a href="#contact" class="w3-bar-item w3-button"><i>Contact</i></a>
      <div style="float: right!important;">
        <a class="w3-bar-item "><i> SITE DE RECETTE</i></a>
      </div>
		</div>
	  </div>
		<!-- Menu Container -->
    <?php $connexion= new mysqli("localhost","root","","cuisine");
        $requet="SELECT * FROM `recette`";
        $Result= $connexion->query($requet);
    ?>
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
    <div class="w3-content">
    
      <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">RECETTES</h1>
      <div class="w3-row w3-center  ">
       
          <div class="  w3-padding-large w3-hover-red w3-red">NOS RECETTES LES PLUS CONSULTEES</div> 
       
      </div>
  
      <?php while($row=$Result->fetch_array(MYSQLI_ASSOC)):?>
        <p><a href="information.php?id_rec=<?=$row['id']?>&nom=<?=$row['nom']?>"><?php echo $row['nom']; ?></a></p>
      <?php endwhile?>
      <button><a href="ajouterrecette.php">ajouter</a></button>
        
  
    </div>
   
</div>
	
<div class="posfooter">
  Copyright@<a href="https://www.w3schools.com/w3css/default.asp" target="_blank">2022</a>
</div>
</div>
</body>
</html>