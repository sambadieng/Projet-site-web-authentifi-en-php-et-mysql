

<?php
   require_once 'config.php';
   require_once 'fonction.php';
   
?>
<!DOCTYPE html>
<html>
<head>
	<title> contact </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="scolarite3.css">
	
</head>
<body>
	 <!-- <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">  -->
	<!-- <div class="row"> -->
		<!-- <div>
		  <h4>   <pre>
		       CONTACT: 
		              tel:+221-77-247-75-81
		            email:sambadieng18@yahoo.fr  
		     </pre>
		   </h4>   -->
	</div>
		<div class="div21">
			<h2 style="color: white">HEURE DE COURS</h2>
			 <h5 style="color: white"> <?= date('N'); ?> </h5>
			<ul >
				<?php foreach (JOURS as $k=> $jours):?> 
                  
					<li <?php if($k+1===(int)date('N')):?>style="color:red" <?php endif ?> style="color: white">
						<strong><?=$jours ?> </strong> : 
						<?=creneaux_html(CRENEAUX[$k]); ?>
						 </li>
                  
			    <?php endforeach; ?>
				
			</ul>
			
		</div>
	<!-- </div> -->
	
</body>
</html>
