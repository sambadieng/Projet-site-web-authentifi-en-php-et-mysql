


<?php
      require_once("entete.php");
?>
<?php
   require_once("securite.php");
?>

<?php
  require_once("conn.php");
       $req=  "SELECT * FROM etudiant";
       $ps=$pdo->prepare($req);
       $ps->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LISTE ETUDIANT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="scolarite.css">
  <link rel="stylesheet" type="text/css" href="scolarite2.css">
  <link rel="stylesheet" type="text/css" href="scolarite3.css">
  <link rel="stylesheet" type="text/css" href="scolarite4.css">
  <link rel="stylesheet" type="text/css" href="scolarite5.css">
  
  
	
</head>
<body>
    <div class="divmoyen">
       
      <div class="ta">
         <table border="1"  id="table">
         	<tr>
         		<th id="blue" style="color: brown">CODE</th>
         		<th id="blue" style="color: brown">PRENOM</th>
         		<th id="blue" style="color: brown">NOM</th>
         		<th colspan="3" id="blue" style="color: brown">EMAIL</th>
         	</tr>
         	<?php while ( $et= $ps->fetch()){?> 
         		<tr>
         			 <td id="white"> <?php echo ($et["CODE"])  ?></td>
         			 <td id="white"> <?php echo ($et["PRENOM"])  ?></td>
         			 <td id="white"> <?php echo ($et["NOM"])  ?></td>
         			 <td id="white"> <?php echo ($et["EMAIL"])  ?></td>
         			 <td><a href="edit.php?code=<?php echo ($et["CODE"]) ?>">edit</a></td>
         			 <td><a  onclick="return confirm('Etes vous sur..? ');" href="supprimer.php?code=<?php echo ($et["CODE"])  ?>">supprimer</a></td>
         			</tr>
         	 <?php }?>

         	<tr>
         		
         	</tr>
         </table>
      </div>

     <img src="code.png" id="estel">
    <?php
          require_once 'contact.php';
    ?>
    <div class="h">
           
     </div> 
        
         <h1 class="h0">A PROPOS</h1>
         <pre>
          <h2 class="h6">Programme de la formation
du developpement web et mobile
à accesss code school de Dakar</h2>
         </pre> 
  <div class="divmax">

    <div>
           <img src="photoshop.png">
           <img src="illustrator.png">
           <img src="indesign.png">    
    </div>   
    <div>
      <img src="html.png">
      <img src="css.png">
      <img src="javascript.png">
    </div>  
    <div>
      <img src="bootstrap.png">
      <img src="php.png">
      <img src="mysql.jpg">
     
    </div>
    <div>
             <img src="wordpress.png">
             <img src="mobile.jpg">
    </div>
  </div>  
  <div class="h7">
    <ul>
    <li class="h8">CONTACT:
          +221-77-247-75-81</li>
    <li class="h8">EMAIL:sambadieng18@yahoo.fr</li> 
    <li class="h8">ADDRESS:Rue 3 bis x boulvard de l'est,point E,Dakar,Dakar 15608</li>     
     </ul> 
  </div>  

  </div>  
</body>
</html>
