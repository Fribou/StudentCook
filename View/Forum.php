<?php
	$title='StudentCook : Forum';
	ob_start();
  ?>


  <a href="#top" id="top-button">
    <i class="icon-angle-up"></i>
  </a>
  <div class="row">
    <div class="large-6 column lpad top-msg ">
      <span id="breadcrumb">
        <a href="#"> Postes</a>
      </span>
    </div>
    <div class="large-6 small-12 column lpad top-msg ar">
      Bonjour,
      <a href="#" class="underline"><?php if(isset($_SESSION['identifiant'])){ echo $_SESSION['identifiant'];} else {echo'Anonyme';} ?></a>
    </div>
  </div>

  <div class="row mt">
    <div class="large-12">
      <div class="large-12 forum-category rounded top">
        <div class="large-8 small-10 column lpad">
          Recettes et Discussions!
        </div>
        <div class="large-4 small-2 column lpad ar">
          <a data-connect>
            <i class="icon-collapse-top"></i>
          </a>
        </div>
      </div>

      <div class="toggleview">
        <div class="large-12 forum-head">
          <div class="large-8 small-8 column lpad">
            Sujets
          </div>
          <div class="large-1 column lpad">
            Messages
          </div>
          <div class="large-1 column lpad">
            <br />
          </div>
          <div class="large-2 small-4 column lpad">
            Actualités
          </div>
        </div>



<?php



// La requête sql pour récupérer les messages de la page actuelle.

 $i = 0;
 foreach($topic as $ligne)
	 {
 echo ' <div class="large-12 forum-topic">
	 <div class="large-1 column lpad">
		 <i class="icon-file"></i>
	 </div>
	 <div class="large-7 small-8 column lpad">
		 <span class="overflow-control">
			 <a href="index.php?idtopic='."$ligne[idtopic]".'">'."$ligne[sujet]".'</a>
		 </span>
		 <span class="overflow-control">
			 '."$ligne[description]".'
		 </span>
	 </div>
	 <div class="large-1 column lpad">
		 <span class="center">'."$ligne[nb_msg]".'</span>
	 </div>
	 <div class="large-1 column lpad">
		 <br />
	 </div>
	 <div class="large-2 small-4 column pad">
		 <span>
		 </span>
		 <span>'."$ligne[date_creation]".' à '."$ligne[heure_creation]".'';
		 if(isset($_SESSION['identifiant']) && $_SESSION['identifiant'] == 'Admin'){ 	echo '<a class="close" href="index.php?DelId='."$ligne[idtopic]".'">&times;</a>'; }
		 echo '</span>
		 <span>par <a href="#">'."$ligne[createur]".'</a></span>
	 </div>
 </div>';
	 $i++;
	 if($i == $topicsParPage) break;
}

echo '<p align="center">Page : '; //Pour l'affichage, on centre la liste des pages
for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
{
 //On va faire notre condition
 if($i==$pageActuelle) //Si il s'agit de la page actuelle...
 {
		 echo ' [ '.$i.' ] ';
 }
 else //Sinon...
 {
			echo ' <a href="index.php?action=forum&page='.$i.'">'.$i.'</a> ';
 }
}
echo '</p>';
?>








			</div>

      </div>
    </div>


	<?php
	if(isset($_SESSION['identifiant'])){
echo'
  <div class="row mt">
    <div class="large-12">
      <div class="large-12 forum-category rounded top">
        <div class="large-8 small-10 column lpad">
          Nouveau Topic
        </div>
        <div class="large-4 small-2 column lpad ar">
          <a data-connect>
            <i class="icon-collapse-top"></i>
          </a>
        </div>
      </div>

			<form method="post" action="index.php?action=postTopic">
			  <div class="large-12 small-12 normal lpad">
								<div class="row">
									<div class="large-4 columns">
										<label>Sujet du topic
											<input name="sujet" type="text" placeholder="Sujet" />
										</label>
									</div>
								</div>

								<div class="row">
									<div class="large-4 columns">
										<label>Description du topic
											<input name="description" type="text" placeholder="Description" />
										</label>
									</div>
								</div>

								<div class="row">
									<div class="large-8 columns">
										<label>Message du topic
											<textarea  maxlength ="255" name="message" rows="6" placeholder="Ecrivez ici!"></textarea>
										</label>
									</div>
								</div>

								<input type="submit" value="Poster!"/>

						</div>


							</form>
						</span>
					</div>
					</span>
						</div>';
}


?>
  <div class="row mt mb">
    <div class="large-12">
      <div class="large-12 small-12 forum-category rounded top lpad">
        <span>Statistiques du Forum</span>
      </div>
      <div class="large-12 small-12 normal lpad">
        <h1 class="inset">Qui est en ligne?</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt cupiditate culpa id explicabo eum eius corporis minima laudantium dolor aperiam quam cumque sequi aliquam adipisci alias fugiat praesentium quibusdam sapiente.</p>
        <h1 class="inset">Tableau de statistiques</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta expedita temporibus dolorum esse modi hic quidem sit voluptas laboriosam veniam corporis accusamus id nam! Commodi sequi molestias quasi dolorum animi.</p>
      </div>
    </div>
  </div>

<?php
  $contenu = ob_get_clean();
  require('View/layout.php');
?>
