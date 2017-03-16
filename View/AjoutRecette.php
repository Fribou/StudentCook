<?php
	$title='StudentCook : AjoutRecettes';
	ob_start();
	
	
	echo '
<div id="contact-form">
	<div>
		<h2>Ajouter une Recette</h2> 
		
	</div>
		<p id="failure">Oopsie...message not sent.</p>  
		<p id="success">Your message was sent successfully. Thank you!</p>

		   <form method="post" action="index.php?action=recette">
			<div>
		      <label for="name">
		      	<span class="required">Nom Recette: *</span> 
		      	<input type="text" id="name" name="nomRecette" value="" placeholder="Nom Recette" required="required" tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>';
			
			for($i = 1; $i<6; $i++){
			echo '
			<div>		          
		      <label for="subject">
		      <span >Ingredient '.$i.'</span>
			      <select id="subject" name="ingredient'.$i.'" tabindex="2">
					';
					foreach($results as $donnees){
					echo'
			         <option value="'.$donnees['NOMINGREDIENT'].'">'.$donnees['NOMINGREDIENT'].'</option>';
					}
					 echo'
			      </select>
		      </label>
			</div>
			';
			}
			
			echo '
			<div>
		      <label for="name">
		      	<span class="required">Origine: *</span> 
		      	<input type="text" id="name" name="Origine" value="" placeholder="Origine" required="required" tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>
			<div>
		      <label for="name">
		      	<span class="required">Duree: *</span> 
		      	<input type="number" id="name" name="dureeRecette" value="" placeholder="Duree" required="required" tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>
			<div>		          
		      <label for="message">
		      	<span class="required">Détails: *</span> 
		      	<textarea id="message" name="Definition" placeholder="SVP écrivez comment la recette est faite" tabindex="5" required="required"></textarea> 
		      </label>  
			</div>';
			 if($_GET['action']=="AjoutRecette")
				 echo'
			<div>		           
		      <button name="AjoutRecette" type="submit" id="submit" >Ajouter Recette</button> 
			</div>
		   </form>
		   </div>';
		   else if($_GET['action']=="ProposeRecette")
				 echo'
			<div>		           
		      <button name="ProposerRecette" type="submit" id="submit" >Ajouter Recette</button> 
			</div>
		   </form>
		   </div>';
			
			
			//else if ($_GET['action']=="ProposerRecette"){
				
			//}
				
		
		
		$contenu = ob_get_clean();
	require('View/layout.php');
		?>