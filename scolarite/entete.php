<!DOCTYPE html>
 <html>
 <head>
 	<title>Haut de page </title>
 	<link rel="stylesheet" type="text/css" href="scolarite1.css">
 	<link rel="stylesheet" type="text/css" href="scolarite3.css">
 	<link rel="stylesheet" type="text/css" href="scolarite5.css">
 	 	
 </head>
 <body>
     <div class="divmin">
 	   <img src="dream-tech2.png" id="im1" class="im8">
        <div class="en" id="emn"  >
	
		   <nav>
		       <a href="etudiant.php" class="c1">ETUDIANT</a>
		       <a href="saisieEtudiant.php" class="c2" >SAISIE</a>  
		       <a href="logout.php" class="c3">LOGOUT
		        [<?php 
		           session_start();
		        echo ((isset($_SESSION['PROFILE']))?($_SESSION['PROFILE']['LOGIN']):"") 
		        ?>]
		    </a>
		   </nav>
	    </div>

    </div>
 </body>
 </html> 
 

