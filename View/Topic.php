<?php
	$title= $titre;
	ob_start();
  ?>

<a href="#top" id="top-button">
  <i class="icon-angle-up"></i>
</a>
<div class="row">
  <div class="large-6 column lpad top-msg">
    <span id="breadcrumb">
      <a href="index.php?action=forum"> Postes/</a>

      <?php
      ?>
      <a href="#"><?php print $titre ?></a>
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
        <?php print $titre ?>
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
          <br />
        </div>
        <div class="large-1 column lpad">
          <br />
        </div>
        <div class="large-1 column lpad">
          <br />
        </div>
        <div class="large-2 small-4 column lpad">
          <br />
        </div>
      </div>


<?php
$i = 0;
foreach($msg as $ligne)
  {
echo '
<div class="large-12 forum-topic">
  <div class="large-1 column lpad">
    <i class="icon-file"></i>
  </div>
  <div class="large-8 large-4 column lpad">
    <span >
      '."$ligne[contenu]".'
    </span>
  </div>
  <div class="large-1 column lpad">
    <br />
  </div>
  <div class="large-2 small-4 column pad">
    <span>
    </span>
    <span>'."$ligne[date_message]".' à '."$ligne[heure_message]".'';
    if(isset($_SESSION['identifiant']) && $_SESSION['identifiant'] == 'Admin'){ 	echo '<a class="close" href="index.php?idtopic='."$ligne[idtopic]".'&msgDelId='."$ligne[rang]".'">&times;</a>'; }
    echo '</span>
    <span>par <a href="#">'."$ligne[pseudo]".'</a></span>
  </div>
</div>
';
}
?>
</div>

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
        Ecrire un message
      </div>
      <div class="large-4 small-2 column lpad ar">
        <a data-connect>
          <i class="icon-collapse-top"></i>
        </a>
      </div>
    </div>

    <form method="post" action="index.php?idtopic='.$idtopic.'&action=postMsg">
      <div class="large-12 small-12 normal lpad">
              <div class="row">
                <div class="large-4 columns">
                </div>
              </div>

              <div class="row">
                <div class="large-4 columns">
                </div>
              </div

          </div>

          <div class="row">
            <div class="large-8 columns">
              <label>Message à poster
                <textarea  maxlength ="255" name="message" rows="6" placeholder="Ecrivez ici!"></textarea>
              </label>
            </div>
          </div>

          <input type="submit" value="Poster!"/>

            </form>
          </span>
        </div>
        </span>
          </div>';






}
?>


<?php
  $contenu = ob_get_clean();
  require('View/layout.php');
?>
